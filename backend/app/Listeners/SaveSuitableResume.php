<?php

namespace App\Listeners;

use App\Events\SendRecommend2Candidate;
use App\Models\CandidateBookmark;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveSuitableResume implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendRecommend2Candidate $event): void
    {
        $new_path = "suitable_resumes/suitable_resume_{$event->bookmark_id}.png";
        supabaseCopyFile('resumes', "resume_{$event->resume_id}.png", 'suitable_resumes', "suitable_resume_{$event->bookmark_id}.png");
        $url = getStorageFileUrl($new_path);

        CandidateBookmark::where('id', $event->bookmark_id)->update([
            'is_send_noti' => 1,
            'resume_link' => $url
        ]);
    }
}
