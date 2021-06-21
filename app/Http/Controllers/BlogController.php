<?php

namespace App\Http\Controllers;
use App\Post;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        $posts = post::all();
        return view('blog.pages.home', compact('posts') );
    }
    public function show(Post $post){
        return view('blog.pages.show-post', compact('post'));
    }
    public function addPost()
    {
        return view('blog.pages.add-post');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
            'img' => 'mimes:jpeg, jpg, png |required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/',"", $path);
        Post::create(
            ['title' => request('title'),
            'content' => request('content'),
            'path'=>$filename,
            'user_id'=>Auth::id()]
        );
        return redirect('/');
    }
    public function delete(Post $post){
        if (Gate::allows('delete',$post)){
        $post->delete();
        return redirect('/');
        }
    }
    public function update(Post $post){
        if (Gate::allows('update',$post)) {
            return view('blog.pages.update-post', compact('post'));
        }
    }

    public function storeUpdate(Request  $request, Post $post){
        if($request->file()){
            File::delete(storage_path('app/public'.$post->path));
            $path = $request->file('img')->store('public/images');
            $filename = str_replace('public/',"", $path);
            Post::where('id',$post->id)->update(['path'=>$filename]);

        }
        Post::where('id',$post->id)->update($request->only(['title','content']));

        return redirect('/');
    }
}

