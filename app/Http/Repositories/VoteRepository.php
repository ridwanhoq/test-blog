<?php

namespace App\Http\Repositories;

use App\Models\Vote;

class VoteRepository{

    public function store($data){
        // Vote::create($data);
        Vote::create([
            'user_id'   => auth()->user()->id,
            'vote_id'   => $data['vote_id']
        ]);
    }


}