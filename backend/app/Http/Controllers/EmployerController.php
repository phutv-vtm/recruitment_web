<?php

namespace App\Http\Controllers;

use App\Events\NotifyCandidateEvent;
use App\Events\SendRecommend2Candidate;
use App\Models\Candidate;
use App\Models\CandidateBookmark;
use App\Models\CandidateMessage;
use App\Models\Employer;
use App\Models\Job;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Redis;

class EmployerController extends Controller
{
    public function index(Request $request)
    {
        $keyw = $request->query('keyword');
        $query = Employer::query()
            ->join('users', 'user_id', '=', 'users.id')
            ->where('users.is_active', 1);
        if ($keyw) {
            $query->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($keyw) . '%']);
        }
        $res = $query->paginate(6);

        return response()->json($res);
    }
    public function show($id)
    {
        $employer = Employer::find($id);
        if ($employer) {
            return $employer;
        } else {
            return response()->json([
                'message' => 'resource not found'
            ], 404);
        }
    }
    public function update(Request $req)
    {
        $employer_id = Auth::user()->id;
        $update_data = $req->except(['location_ids', 'logo_file', 'delete_logo', 'image_file', 'delete_image']);

        if ($req->hasFile('logo_file')) {
            $logo_file = $req->file('logo_file');
            //delete old logo:
            supabaseDeleteFiles('employer_logos', array_map(
                fn($ext) => 'logo_' . $employer_id . '.' . $ext,
                ['png', 'jpg', 'jpeg', 'webp']
            ));
            $filename = 'logo_' . $employer_id . '.' . $logo_file->getClientOriginalExtension();
            $path = uploadToStorage($logo_file, 'employer_logos', $filename, ['isImage' => true]);
            $update_data['logo'] = $path;
        }
        if ($req->hasFile('image_file')) {
            $image_file = $req->file('image_file');
            //delete old image:
            supabaseDeleteFiles('employer_images', array_map(
                fn($ext) => 'image_' . $employer_id . '.' . $ext,
                ['png', 'jpg', 'jpeg', 'webp']
            ));
            $filename = 'image_' . $employer_id . '.' . $image_file->getClientOriginalExtension();
            $path = uploadToStorage($image_file, 'employer_images', $filename, ['isImage' => true]);
            $update_data['image'] = $path;
        }
        if ($req->has('delete_logo')) $update_data['logo'] = null;
        if ($req->has('delete_image')) $update_data['image'] = null;

        //update employers table:
        Employer::find($employer_id)->update($update_data);

        //update employer_location table:
        $location_ids = explode(',', $req->location_ids);
        $employer_location_data = [];
        for ($i = 0; $i < count($location_ids); $i++) {
            $employer_location_data[$i] = [
                'employer_id' => $employer_id,
                'location_id' => $location_ids[$i]
            ];
        }
        DB::table('employer_location')
            ->where('employer_id', $employer_id)
            ->delete();
        DB::table('employer_location')->insert($employer_location_data);

        return response()->json('updated successfully');
    }
    public function getDetail()
    {
        $id = Auth::user()->id;
        $employer = Employer::with(['user', 'locations'])->find($id);

        return response()->json($employer);
    }
    public function destroy($id)
    {
        if (Employer::find($id))
            Employer::destroy($id);
        else return response()->json(['message' => 'resource not found']);
    }

    public function getHotList()
    {
        $res = Employer::take(5)->inRandomOrder()->get();
        for ($i = 0; $i < count($res); $i++) {
            $job_num = Job::where('employer_id', $res[$i]['id'])->count();
            $res[$i]['job_num'] = $job_num;
        }

        return response()->json($res);
    }

    public function getComJobs($id)
    {

        $jobs = Employer::join('jobs', 'employers.id', '=', 'employer_id')
            ->where([
                ['employers.id', '=', $id],
                ['jobs.is_active', '=', 1]
            ])
            ->select('jobs.*', DB::raw(
                "TO_CHAR(jobs.created_at, 'DD/MM/YYYY') as postDate,
                 TO_CHAR(jobs.expire_at, 'DD/MM/YYYY') as deadline"
            ))
            ->get();
        for ($i = 0; $i < count($jobs); $i++) {
            $res = DB::table('job_location')
                ->join('locations', 'location_id', '=', 'locations.id')
                ->where('job_id', $jobs[$i]->id)
                ->pluck('locations.name');
            //convert $res from array to string to send back frontend
            $location = array2String($res);
            $jobs[$i]['location'] = $location;
        }
        return $jobs;
    }

    public function getCandidateList(Request $req)
    {
        $job_id = $req->job_id;
        $interview_round = $req->interview_round;
        $job_ids = Job::where('employer_id', '=', Auth::user()->id)->pluck('id');

        if ($req->status == 'WAITING' || $req->status == 'BROWSING_RESUME') {
            $status = ['WAITING', 'BROWSING_RESUME'];
        } else $status[] = $req->status;

        $query = DB::table('job_applying')
            ->join('jobs', 'job_id', '=', 'jobs.id')
            ->join('candidates', 'candidate_id', '=', 'candidates.id')
            ->whereIn('status', $status)
            ->whereIn('job_id', $job_ids)
            ->when(!empty($job_id), function ($query) use ($job_id) {
                $query->where('job_id', $job_id);
            })
            ->when(
                $req->status == 'BROWSING_INTERVIEW' && !empty($job_id),
                function ($query) use ($interview_round) {
                    $query->where('interview_round', $interview_round);
                }
            )
            ->when($req->filled('skill_text'), function ($query) use ($req) {
                $term = strtolower($req->skill_text);
                $query->orderByRaw(
                    "CASE WHEN LOWER(skill_text) LIKE ? THEN 0 ELSE 1 END",
                    ['%' . $term . '%']
                );
            })
            ->selectRaw("job_applying.*, firstname, lastname, phone, email, jname, interview_round_num,
                        TO_CHAR(job_applying.created_at, 'DD/MM/YYYY HH24:MI') as appliedTime");
        if (!$req->filled('skill_text')) $query->orderByDesc('job_applying.created_at');
        $candidates = $query->paginate(10);

        return response()->json($candidates);
    }

    public function processApplying(Request $req)
    {
        // return $req;
        $interview_round_num = $req->interview_round_num;
        $current_round = $req->interview_round;
        $currentTime = Carbon::parse(Carbon::now())->format('H:i d/m/Y');
        $company = Employer::where('user_id', '=', Auth::user()->id)->value('name');
        $msg_name = "";

        if ($req->actType == "VIEWED") $next_status = "BROWSING_RESUME";
        else if ($req->actType == "ACCEPT") {
            if ($req->step == "step1") {
                $next_status = "BROWSING_INTERVIEW";
                $next_round = 1;
                $msg_name = "Hồ sơ được chấp nhận, vị trí ";
            } else if ($req->step == "step2") {
                if ($current_round < $interview_round_num) {
                    $next_round = $current_round + 1;
                    $msg_name = "Bạn đã vượt qua vòng phỏng vấn thứ {$current_round}, vị trí ";
                } else {
                    $next_status = "PASSED";
                    $msg_name = "Chúc mừng bạn đã được nhận, vị trí ";
                }
            }
        } else if ($req->actType == "REJECT") {
            if ($req->step == "step1") {
                $next_status = "RESUME_FAILED";
                $msg_name = "Hồ sơ bị loại, vị trí ";
            } else if ($req->step == "step2") {
                $next_status = "INTERVIEW_FAILED";
                $msg_name = "Phỏng vấn bị loại, vị trí ";
            }
        }
        $msg_name = $msg_name . $req->jname . ', ' . $company . ', ' . $currentTime;
        //update:
        $job_applying_data = ['updated_at' => Carbon::now()];
        if (isset($next_status)) $job_applying_data['status'] = $next_status;
        if (isset($next_round)) $job_applying_data['interview_round'] = $next_round;

        DB::table('job_applying')
            ->where('id', $req->id)
            ->update($job_applying_data);

        if ($req->actType != "VIEWED") {
            $candidate_msg_data = [
                'candidate_id' => $req->candidate_id,
                'job_id' => $req->job_id,
                'name' => $msg_name,
            ];
            if ($req->has('content')) $candidate_msg_data['content'] = $req->content;

            CandidateMessage::create($candidate_msg_data);
            event(new NotifyCandidateEvent($msg_name, $req->candidate_id));
        }

        return response()->json("Updated successfully");
    }
    public function getJobList(Request $req)
    {
        $employer_id = Auth::user()->id;
        $keyword = $req->query('keyword');

        $jobs = Job::with(['industries', 'locations'])
            ->join('jtypes', 'jtype_id', '=', 'jtypes.id')
            ->join('jlevels', 'jlevel_id', '=', 'jlevels.id')
            ->where('employer_id', '=', $employer_id)
            ->when($keyword != null, function ($query) use ($keyword) {
                return $query->where(function ($query2) use ($keyword) {
                    $query2->whereRaw('LOWER(jname) LIKE ?', ['%' . strtolower($keyword) . '%'])
                        ->orWhereraw('LOWER(jtypes.name) LIKE ?', ['%' . strtolower($keyword) . '%'])
                        ->orWhereraw('LOWER(jlevels.name) LIKE ?', ['%' . strtolower($keyword) . '%']);
                });
            })
            ->selectRaw("jobs.*, jtypes.name as jtype_name, jlevels.name as jlevel_name,
                        TO_CHAR(jobs.created_at ,'DD/MM/YYYY HH24:MI') as postTime,
                        TO_CHAR(expire_at ,'DD/MM/YYYY') as deadline")
            ->orderByDesc('jobs.created_at')
            ->get();

        return response()->json($jobs);
    }
    public function changeJobStatus(Request $req)
    {
        Job::where('id', $req->job_id)
            ->update(['is_active' => $req->status]);

        return response()->json('Updated successfully');
    }
    public function findCandidates(Request $req)
    {
        $query = Candidate::query()
            ->whereNotNull('public_resume_id')
            ->join('resumes', 'public_resume_id', '=', 'resumes.id')
            ->join('locations', 'location_id', '=', 'locations.id');
        if ($req->has('location_ids')) {
            $query->whereIn('location_id', $req->location_ids);
        }
        if ($req->has('desired_industry_ids')) {
            $query->whereIn('desired_industry_id', $req->industry_ids);
        }
        if ($req->filled('jtype_id')) {
            $query->where('desired_jtype_id', $req->jtype_id);
        }
        if ($req->filled('jlevel_id')) {
            $query->where('desired_jlevel_id', $req->jlevel_id);
        }
        if ($req->filled('gender')) {
            $query->where('candidates.gender', $req->gender);
        }
        if ($req->filled('min_age')) {
            $query->whereRaw(
                'EXTRACT(YEAR FROM AGE(resumes.dob)) BETWEEN ? AND ?',
                [$req->min_age, $req->max_age]
            );
        }
        if ($req->filled('job_yoe')) {
            $query->where('job_yoe', ">=", $req->job_yoe);
        }
        if ($req->filled('skill_text')) {
            $term = strtolower($req->skill_text);
            $query->orderByRaw(
                "CASE WHEN LOWER(skill_text) LIKE ? THEN 0 ELSE 1 END",
                ['%' . $term . '%']
            );
        }
        $resumes = $query->select(
            'resumes.*',
            DB::raw('locations.name AS location'),
            'desired_job'
        )->paginate(9)->toArray();

        $employer_id = Auth::user()->id;
        $employer_job_ids = Job::where('employer_id', $employer_id)->pluck('id');

        for ($i = 0; $i < count($resumes['data']); $i++) {
            $resume = $resumes['data'][$i];
            $res = DB::table('candidate_bookmarks')
                ->where([
                    ['employer_id', '=', $employer_id],
                    ['candidate_id', '=', $resume['candidate_id']],
                    ['is_deleted', '=', 0]
                ])
                ->latest()
                ->get()
                ->toArray();
            if (count($res) > 0) $resumes['data'][$i]['is_send_noti'] = $res[0]->is_send_noti;
            $resumes['data'][$i]['candidate_bookmark_id'] = $res[0]->id ?? null;
            if (count($res) > 0) {
                $job_ids = DB::table('candidate_bookmark_detail')
                    ->where('candidate_bookmark_id', $res[0]->id)
                    ->pluck('job_id');
                $resumes['data'][$i]['job_ids'] = $job_ids;
            }
            // get applying of any company's jobs:
            $resumes['data'][$i]['applying'] = DB::table('job_applying')
                ->where('candidate_id', $resume['candidate_id'])
                ->whereIn('job_id', $employer_job_ids)
                ->orderByDesc('created_at')
                ->first();
        }

        return response()->json($resumes);
    }
}
