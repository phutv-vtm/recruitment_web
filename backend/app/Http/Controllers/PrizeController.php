<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrizeController extends Controller
{
    public function index()
    {
        $res = Prize::all();

        return response()->json($res);
    }

    public function getByCurrentCandidateProfile()
    {
        $candidate_id = Auth::user()->id;
        $res = Prize::where([
            ["candidate_id", $candidate_id],
            ["resume_id", null]
        ])->get();
        return response()->json($res);
    }

    public function getByCurCandResumeId($resume_id)
    {
        $candidate_id = Auth::user()->id;
        $res = Prize::where([
            ["candidate_id", $candidate_id],
            ["resume_id", $resume_id]
        ])->get();
        return response()->json($res);
    }

    public function create(Request $req)
    {
        $candidate_id = Auth::user()->id;

        DB::transaction(function () use ($req, $candidate_id) {
            $prize = new Prize;
            $prize->candidate_id = $candidate_id;
            $prize->name = $req->name;
            $prize->receive_date = $req->receive_date;
            $prize->save();
            //process saving file:
            $file = $req->file('image');
            if ($file) {
                $filename = 'prize' . '_' . $prize->id . '.' . $file->getClientOriginalExtension();
                $path = uploadToStorage($file, 'prizes', $filename, ['isImage' => true]);
                $prize->image = $path;
                $prize->save();
            }
        });

        return response()->json("created successfully");
    }

    public function destroy($id)
    {
        Prize::findOrFail($id)->delete();

        return response()->json("deleted successfully");
    }

    public function update(Request $req)
    {
        $prize = Prize::find($req->id);
        $prize->name = $req->name;
        $prize->receive_date = $req->receive_date;

        $file = $req->file('image');
        if ($file) {
            supabaseDeleteFiles('prizes', array_map(
                fn($ext) => 'prize_' . $req->id . '.' . $ext,
                ['png', 'jpg', 'jpeg', 'webp']
            ));
            $filename = 'prize' . '_' . $prize->id . '.' . $file->getClientOriginalExtension();
            $path = uploadToStorage($file, 'prizes', $filename, ['isImage' => true]);
            $prize->image = $path;
        }
        if ($req->delete_img) {
            $prize->image = NULL;
        }
        $prize->save();

        return response()->json('updated successfully');
    }
}
