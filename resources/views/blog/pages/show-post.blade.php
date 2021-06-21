@extends('blog/main')

@section('content')
    <div class="row">
        <div class="col-8 col-md-10 mx-auto">
            <h2>{{$post->title}}</h2>
            <p>{{$post->content}}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form action="/post/{{$post->id}}/comment" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Enter comment here" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Comment</button>
                </div>
            </form>
        </div>
    </div>
    <div class="comments">
        <ul>
            @foreach($post->comments as $comment)
                <li>{{$comment->body}}</li>
            @endforeach
        </ul>

    </div>
@endsection
