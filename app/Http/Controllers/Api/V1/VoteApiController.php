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

            $this->checkVoteEndTimeNotExpires($pollQuestionId);

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

    private function checkVoteEndTimeNotExpires($pollQuestionId)
    {

        $usaOrLocalTime = request()->is_usa_time == 1 ? $this->getCurrentUsaTime() : $this->getCurrentLocalTime();

        $poll = Poll::query()
            ->whereHas('pollQuestion', function ($pollQuestion) use ($pollQuestionId) {
                $pollQuestion->where('id', $pollQuestionId);
            })
            ->where('end_time', '>', $usaOrLocalTime)   
            ->first();

        if (empty($poll)) {
            return false;
        }

        return true;
    }

    public function getCurrentUsaTime()
    {
        return now('America/New_York')->format('H:i');
    }

    public function getCurrentLocalTime()
    {
        $user = auth()->user();

        $userCountryName    =  $user->country->name ?? '';
        $userStateName      =  $user->state->name ?? '';

        return now($userCountryName . '/' . $userStateName)->format('H:i');
    }

    public function matchUserPollSubmissionWithPublicAnswers(){
        
    }

}
