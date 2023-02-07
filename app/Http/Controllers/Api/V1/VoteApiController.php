<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Repositories\VoteRepository;
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

    public function store()
    {

        try{


            $this->repo->store([
                'start_time' => request()->start_time
            ]);

    
        }catch(Exception $error){

        }
        

        
    }

    public function voteSubmit(){

    }

    private function checkVoteTimeExpires(){
        
    }

    
}
