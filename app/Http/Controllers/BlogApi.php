<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Blog;
use App\Post;

class BlogApi extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','show']);
    }

    public function index()
    {
        return Blog::collection(Post::with('comments')->paginate(3));
    }
    public function show(Post $id)
    {
        return new Blog($id);
    }
}
