@extends('layouts.layout')
@section('title')
Edit
@endsection

@section('content')
<div class="card p-3 w-50 container">
    <h1>edit post</h1>
    <form action="{{ route('post.update',$post->id) }} " method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" value="{{old('title')??$post->title}}" name="title" placeholder="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="2">{{old('body')??$post->body}} </textarea>
        </div>
        <input class="btn btn-success container " type="submit" value="Update">
    </form>
</div>
@endsection

