<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function sendReminderEmail(Request $request, $id)
    {
        // find or create new post
        $post = Post::firstOrNew($id);

        // your logic to save post goes here

        // pass post object to our job
        // our post class has info regarding new post
        $this->dispatch( (new onPostPublished($post))->onQueue('emails') );
    }
}
