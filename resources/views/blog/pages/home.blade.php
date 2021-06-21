@extends('blog/main')
@section('content')
    @foreach($posts as $post)
<div class="post-preview">
        <a href="/post/{{$post->id}}">
            <h2 class="post-title">{{$post->title}}</h2>
        </a>
        <h3 class="post-subtitle">{{$post->content}}</h3>
    <div>
        <img  width="300" height="300" src="{{asset($post->path)}}" alt="">
    </div>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        {{$post->created_at}}
    </p>
    <ul class="links">
        <li><a href="/delete/{{$post->id}}">Delete</a></li>
        <li><a href="/update/{{$post->id}}">Update</a></li>
    </ul>
</div>
<hr/>
    @endforeach


<div class="clearfix"><a class="btn btn-primary float-right" href="#!">Older Posts →</a>
    <a class="btn btn-primary float-left" href="/add-post/">Add post</a></div>
@endsection
