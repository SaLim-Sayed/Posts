@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="card p-3 w-50 container ">
        <h1>create new post</h1>
        <form action="{{ route('post.store') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">

                @error('title')
                    <small class="card bg-danger text-light w-50 container mt-2 text-center">{{ $message }}</small>
                @enderror

            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="2"></textarea>

                @error('body')
                    <small class="card bg-danger text-light w-50 container mt-2 text-center">{{ $message }}</small>
                @enderror
            </div>
            <input class="btn btn-success container " type="submit" value="Create">
        </form>
    </div>
@endsection
