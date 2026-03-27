<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobApplying;
use App\Models\Resume;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index(Request $req)
    {
        $query = Job::query()->with(['employer', 'locations'])
            ->where('jobs.is_active', 1)
            ->where('expire_at', '>', Carbon::now())
            ->when($req->keyword != null, function ($query) use ($req) {
                return $query->whereRaw('LOWER(jobs.jname) LIKE ?', ['%' . strtolower($req->keyword) . '%']);
            })
            ->when($req->industry_id != null, function ($query) use ($req) {
                return $query->join('job_industry', 'jobs.id', '=', 'job_industry.job_id')
                    ->whereIn('industry_id', $req->industry_id);
            })
            ->when($req->location_id != null, function ($query) use ($req) {
                return $query->join('job_location', 'jobs.id', '=', 'job_location.job_id')
                    ->whereIn('location_id', $req->location_id);
            })
            ->when($req->salary != null, function ($query) use ($req) {
                if ($req->salary == 4) {
                    return $query->where('min_salary', '<', 5);
                } else if ($req->salary >= 5) {
                    return $query->where('max_salary', '>=', $req->salary);
                }
            })
            ->when($req->experience != null, function ($query) use ($req) {
                $exp = $req->experience;
                if ($exp == -1) {
                    return $query->whereNull('yoe');
                } else if ($exp >= 0 && $exp <= 5) {
                    return $query->where('yoe', '=', $exp);
                } else if ($exp > 5) {
                    return $query->where('yoe', '>=', $exp);
                }
            })
            ->when($req->jtype_id != null, function ($query) use ($req) {
                return $query->where('jtype_id', '=', $req->jtype_id);
            })
            ->when($req->jlevel_id != null, function ($query) use ($req) {
                return $query->where('jlevel_id', '=', $req->jlevel_id);
            })
            ->when($req->posting_period != null, function ($query) use ($req) {
                return $query->where('jobs.created_at', '>=', Carbon::now()->subDays($req->posting_period));
            })
            ->select('jobs.*')
            ->distinct();

        if ($req->type == 'get_all') {
            $jobs = $query->orderBy('latitude')->orderBy('longitude')->get();
        } else {
            switch ($req->sort_type) {
                case 1:
                    $query->orderBy('created_at', 'desc');
                    break;
                case 2:
                    $query->orderBy('created_at');
                    break;
                default:
                    break;
            }
            $jobs = $query->orderByDesc('jobs.created_at')->paginate(9);
        }

        return response()->json($jobs);
    }
    public function show($id)
    {
        $job = Job::with(['employer', 'jtype', 'jlevel', 'industries'])
            ->where('id', $id)
            ->select('jobs.*', DB::raw("TO_CHAR(created_at, 'DD/MM/YYYY') as postDate"))
            ->first();
        $this->addLocationInf($job);

        if ($job) {
            return response()->json($job);
        } else {
            return response()->json('resource not found');
        }
    }
    public function getHotList()
    {
        $res = Job::with(['employer', 'locations'])
            ->where('id', '<=', 15)
            ->inRandomOrder()
            ->paginate(6);

        return response()->json($res);
    }
    public function create(Request $req)
    {
        $new_record = $req->all();

        $industries = $new_record['industries'];
        unset($new_record['industries']);
        $locations = $new_record['locations'];
        unset($new_record['locations']);

        $new_record['employer_id'] = Auth::user()->id;

        $job = Job::create($new_record);
        for ($i = 0; $i < count($industries); $i++) {
            $job_industries[$i] = collect(['job_id' => $job->id, 'industry_id' => $industries[$i]])->toArray();
        }
        DB::table('job_industry')->insert($job_industries);

        for ($i = 0; $i < count($locations); $i++) {
            $job_locations[$i] = collect(['job_id' => $job->id, 'location_id' => $locations[$i]])->toArray();
        }
        DB::table('job_location')->insert($job_locations);

        return response()->json('Updated successfully');
    }
    public function update(Request $req)
    {
        $update_fields = $req->all();
        if (isset($update_fields['industries'])) {
            $industries = $update_fields['industries'];
            unset($update_fields['industries']);

            //update job_industry
            DB::table('job_industry')->where('job_id', $req->id)->delete();
            for ($i = 0; $i < count($industries); $i++) {
                $job_industries[$i] = collect(['job_id' => $req->id, 'industry_id' => $industries[$i]])->toArray();
            }
            DB::table('job_industry')->insert($job_industries);
        }
        if (isset($update_fields['locations'])) {
            $locations = $update_fields['locations'];
            unset($update_fields['locations']);

            //update job_location
            DB::table('job_location')->where('job_id', $req->id)->delete();
            for ($i = 0; $i < count($locations); $i++) {
                $job_locations[$i] = collect(['job_id' => $req->id, 'location_id' => $locations[$i]])->toArray();
            }
            DB::table('job_location')->insert($job_locations);
        }
        if (count($update_fields) > 0) {
            Job::where('id', $req->id)
                ->update($update_fields);
        }
        $msg = 'Update successfully';

        return response()->json($msg);
    }
    public function getJobIndustries($id)
    {
        $res = Job::find($id)->industries;

        return response()->json($res);
    }

    public function addLocationInf($job)
    {
        $res = DB::table('job_location')
            ->join('locations', 'location_id', '=', 'locations.id')
            ->where('job_id', $job->id)
            ->pluck('locations.name');
        //convert $res from array to string to send back frontend
        $location = array2String($res);
        $job['location'] = $location;
        //format date to display:
        // $job['expire_at'] = Carbon::parse($job['expire_at'])->format('d/m/Y');
        // $job['updated_at'] = Carbon::parse($job['updated_at'])->toDateTimeString();
    }
    public function apply(Request $req)
    {
        $candidate_id = Auth::user()->id;
        $current_time = Carbon::now();
        $use_suitable_resume = $req->use_suitable_resume;

        DB::transaction(function () use ($req, $candidate_id, $current_time, $use_suitable_resume) {
            $new_applying = JobApplying::create([
                'job_id' => $req->id,
                'candidate_id' => $candidate_id,
                'created_at' => $current_time,
                'updated_at' => $current_time
            ]);

            $url = "";
            $skill_text = "";
            if ($use_suitable_resume == 1) {
                $new_path = "applied_resumes/applied_resume_{$new_applying->id}.png";
                supabaseCopyFile('suitable_resumes', "suitable_resume_{$req->candidate_bookmark_id}.png", 'applied_resumes', "applied_resume_{$new_applying->id}.png");
                $url = getStorageFileUrl($new_path);
            } else {
                if ($req->hasFile('cv')) {
                    $url = uploadToStorage($req->cv, 'applied_resumes');
                    $skill_text = $req->skill_text;
                } else if ($req->has('resume_id')) {
                    $new_path = "applied_resumes/applied_resume_{$new_applying->id}.png";
                    supabaseCopyFile('resumes', "resume_{$req->resume_id}.png", 'applied_resumes', "applied_resume_{$new_applying->id}.png");
                    $url = getStorageFileUrl($new_path);
                    $skill_text = Resume::find($req->resume_id)->skill_text;
                }
            }

            $new_applying->update([
                'resume_link' => $url,
                'skill_text' => $skill_text
            ]);
        });

        return response()->json('applied successfully');
    }

    public function checkCanApply($job_id)
    {
        $user = Auth::user();
        $res = DB::table('job_applying')
            ->where([
                ['job_id', '=', $job_id],
                ['candidate_id', '=', $user->id]
            ])
            ->orderByDesc('created_at')
            ->first();

        if ($res && (Carbon::now())->diffInDays(Carbon::parse($res->created_at)) <= 6 * 30) {
            return response()->json(['value' => false]);
        }

        return response()->json(['value' => true]);
    }

    public function getSimilarJobs($id)
    {
        $location_ids = Job::join('job_location', 'jobs.id', '=', 'job_id')
            ->where('job_id', $id)
            ->pluck('location_id');
        $industry_ids = DB::table('job_industry')
            ->where('job_id', $id)
            ->pluck('industry_id');
        $similar_jobs = Job::with('employer', 'locations')
            ->join('job_industry', 'jobs.id', '=', 'job_industry.job_id')
            ->join('job_location', 'jobs.id', '=', 'job_location.job_id')
            ->whereIn('industry_id', $industry_ids)
            ->whereIn('location_id', $location_ids)
            ->where('jobs.id', '<>', $id)
            ->select('jobs.*')
            ->inRandomOrder()
            ->take(5)
            ->get();

        return response()->json($similar_jobs);
    }

    public function getRecommendJobs()
    {
        $user_id = Auth::user()->id;
        $candidate = Candidate::find($user_id);
        $location_id = $candidate->location_id;
        $industry_id = $candidate->desired_industry_id;
        $jtype_id = $candidate->desired_jtype_id;
        $jlevel_id = $candidate->desired_jlevel_id;

        $query = Job::query()->with('employer', 'locations');
        if ($location_id) {
            $query->join('job_location', 'jobs.id', '=', 'job_location.job_id')
                ->where('location_id', $location_id);
        }
        if ($industry_id) {
            $query->join('job_industry', 'jobs.id', '=', 'job_industry.job_id')
                ->where('industry_id', $industry_id);
        }
        if ($jtype_id) {
            $query->where('jtype_id', $jtype_id);
        }
        if ($jlevel_id) {
            $query->where('jlevel_id', $jlevel_id);
        }

        $jobs = $query->inRandomOrder()->take(6)->select('jobs.*')->get();

        return response()->json($jobs);
    }
}
