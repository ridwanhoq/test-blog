<?php

namespace App\Http\Repositories;

use App\Models\Vote;

class VoteRepository{

    public function store($data){
        Vote::create($data);
    }


}