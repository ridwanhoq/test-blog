<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Repositories\VoteRepository;
use App\Models\Poll;
use App\Models\Vote;
use Exception;
use Illuminate\Http\Request;

class VoteApiController extends Controller
{

    private $repo;

    public function __construct(VoteRepository $repo)
    {
        $this->repo = $repo;
    }

    public function pollQuestionOwnResponseSubmit($pollQuestionId)
    {

        try {

            $this->checkVoteTimeExpires($pollQuestionId);

            $this->repo->store([
                'start_time' => request()->start_time
            ]);

            return response()->json([], 200);
        } catch (Exception $error) {
        }
    }

    public function voteSubmit()
    {
    }

    private function checkVoteTimeExpires($pollQuestionId)
    {

        $usaOrLocalTime = request()->is_usa_time == 1 ? $this->getCurrentUsaTime() : $this->getCurrentLocalTime();

        $poll = Poll::query()
            ->whereHas('pollQuestion', function ($pollQuestion) use ($pollQuestionId) {
                $pollQuestion->where('id', $pollQuestionId);
            })
            ->where('end_time', '<', $usaOrLocalTime)
            ->first();

        if (empty($poll)) {
            return false;
        }

        return true;
    }

    public function getCurrentUsaTime()
    {
        return now('America/News_York')->toTimeString();
    }

    public function getCurrentLocalTime()
    {
        $user = auth()->user();
        
        return '07:00';
    }
}
