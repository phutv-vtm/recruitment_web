<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateBookmark;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    public function getCurrent()
    {
        $id = Auth::user()->id;
        $candidate = Candidate::with(['industry', 'jtype', 'jlevel'])->find($id);

        return $candidate;
    }
    public function getCurrentAvatar()
    {
        $path = Candidate::find(Auth::user()->id)->avatar;
        if ($path) {
            [$folder, $filename] = explode('/', $path, 2);
            return supabaseDownload($folder, $filename);
        }
        return response()->json();
    }

    public function update(Request $req)
    {
        $id = Auth::user()->id;
        $candidate = Candidate::find($id);

        $candidate->lastname = $req->lastname;
        $candidate->firstname = $req->firstname;
        $candidate->gender = $req->gender;
        $candidate->dob = $req->dob;
        $candidate->phone = $req->phone;
        $candidate->email = $req->email;
        $candidate->address = $req->address;
        $candidate->location_id = $req->location_id;
        $candidate->link = $req->link;
        $candidate->objective = $req->objective;

        if ($req->has('desired_job')) $candidate->desired_job = $req->desired_job;
        if ($req->has('desired_industry_id')) $candidate->desired_industry_id = $req->desired_industry_id;
        if ($req->has('desired_jtype_id')) $candidate->desired_jtype_id = $req->desired_jtype_id;
        if ($req->has('desired_jlevel_id')) $candidate->desired_jlevel_id = $req->desired_jlevel_id;
        if ($req->has('desired_min_salary')) $candidate->desired_min_salary = $req->desired_min_salary;
        if ($req->has('desired_max_salary')) $candidate->desired_max_salary = $req->desired_max_salary;
        if ($req->has('job_yoe')) $candidate->job_yoe = $req->job_yoe;

        $file = $req->file('image');
        if ($file) {
            $ext = $file->getClientOriginalExtension();
            //delete old avatar image:
            deleteStorageFile('candidate_avatars/avatar_' . $id . '_0');

            $filename = 'avatar_' . $id . '_0';
            $path = uploadToStorage($file, 'candidate_avatars', $filename, ['isText' => true]);
            $url = uploadToStorage($file, 'candidate_avatars', $filename . '.' . $ext, ['isImage' => true]);
            $candidate->avatar = $path;
            $candidate->avatar_url = $url;
        }
        if ($req->delete_img) {
            deleteStorageFile('candidate_avatars/avatar_' . $id . '_0');
            $candidate->avatar = null;
            $candidate->avatar_url = null;
        }
        $candidate->save();

        return response()->json('updated successfully');
    }

    public function getAppliedJobs($id)
    {
        $jobs = Job::join('job_applying', 'jobs.id', '=', 'job_id')
            ->join('employers', 'employer_id', '=', 'employers.id')
            ->where('candidate_id', $id)
            ->select(
                'jobs.id',
                'jname',
                'employers.name',
                'resume_link',
                'status',
                DB::raw("TO_CHAR(job_applying.created_at, 'DD/MM/YYYY') as postDate")
            )
            ->orderByDesc('job_applying.created_at')
            ->get();

        return response()->json($jobs);
    }
    public function getSavedJobs($id)
    {
        // $candidate_id = Auth::user()->id;
        $jobs = Job::with(['employer', 'locations'])
            ->join('saved_jobs', 'id', '=', 'job_id')
            ->where('candidate_id', $id)
            ->select('jobs.*', DB::raw("TO_CHAR(expire_at, 'DD/MM/YYYY') as deadline"))
            ->get();

        return response()->json($jobs);
    }
    public function checkJobSaved($job_id)
    {
        $candidate_id = Auth::user()->id;
        $res = DB::table('saved_jobs')->where([
            ['candidate_id', '=', $candidate_id],
            ['job_id', '=', $job_id]
        ])->exists();

        if ($res) {
            return response()->json(['value' => true]);
        } else {
            return response()->json(['value' => false]);
        }
    }
    public function processJobSaving(Request $req)
    {
        $candidate_id = Auth::user()->id;
        if ($req->status == true) {
            DB::table('saved_jobs')->insert([
                ['candidate_id' => $candidate_id, 'job_id' => $req->job_id]
            ]);
        } else if ($req->status == false) {
            DB::table('saved_jobs')->where([
                ['candidate_id', '=', $candidate_id],
                ['job_id', '=', $req->job_id]
            ])->delete();
        }

        // if ($req->status) {
        //     $job_id = $req->job_id;
        //     $saved_job_ids = DB::table('saved_jobs')
        //         ->where('candidate_id', $candidate_id)
        //         ->pluck('job_id')
        //         ->toArray();

        //     $other_candidate_ids = DB::table('saved_jobs')
        //         ->where('job_id', $job_id)
        //         ->pluck('candidate_id');

        //     $similar_job_ids = DB::table('saved_jobs')
        //         ->whereIn('candidate_id', $other_candidate_ids)
        //         ->distinct()
        //         ->orderBy('job_id')
        //         ->pluck('job_id');
        //     foreach ($similar_job_ids as $job_id) {
        //         if(!in_array($job_id, $saved_job_ids)) {
        //             $recommend_job_ids[] = $job_id;
        //         }
        //     }

        //     return $recommend_job_ids;
        // }
        return response()->json('Updated successfully');
    }
    public function updatePublicResume(Request $req)
    {
        $candidate_id = Auth::user()->id;
        if ($req->has('not_public')) {
            $resume_id = null;
        } else {
            $resume_id = $req->resume_id;
        }

        Candidate::where('id', $candidate_id)->update(['public_resume_id' => $resume_id]);

        return response()->json('updated successfully');
    }

    public function getCurJobRecommendData(Request $req)
    {
        $candidate_id = Auth::user()->id;

        $ret = CandidateBookmark::join('candidate_bookmark_detail', 'id', '=', 'candidate_bookmark_id')
            ->where([
                ['candidate_id', '=', $candidate_id],
                ['job_id', '=', $req->job_id],
                ['is_send_noti', '=', 1]
            ])
            ->select('resume_link', 'candidate_bookmark_id')
            ->latest()
            ->first();

        return response()->json($ret);
    }
}
