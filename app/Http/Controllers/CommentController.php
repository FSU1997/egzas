<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\Auth;


class CommentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addComment(Post $post)
        {
            Comment::created([
                'body' => request('path'),
                'user_id' => auth()->id(),
                'post_id' => $post->id
            ]);
        return back();
    }

}

