@extends('blog/main')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @include('blog._partials.error')
            <form action="/storeUpdate/{{$post->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PATCH') }}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Text</label>
                    <textarea class="form-control" name="content" rows="3">{{$post->content}}</textarea>
                </div>
                <div class="form-group custom-file offset-md-3 col-md-6 mb-3 mb-md-0">
                    <input type="file" class="custom-file-input text-black" name="img" id="postImg" lang="en" >
                    <label class="custom-file-label text-black" for="listingImage">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
