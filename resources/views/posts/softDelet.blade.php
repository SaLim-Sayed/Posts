@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container card w-70 bg-secondary-subtle" style="width: 800px">
        <ol class="list-group list-group-numbered ">
            @foreach ($posts as $post)
                <li class="bg-success-subtle list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $post->title }}</div>
                        {{ $post->body }}
                    </div>
                    <span>
                        <a href="{{ route('posts.restore', $post->id) }} " class="btn btn-primary">Restore</a>
                        <a href="{{ route('posts.forceDelete', $post->id) }} " class="btn btn-danger">forceDelete</a>
                    </span>
                    <span class="badge bg-primary rounded-pill m-2">{{ $post->id }}</span>
                </li>
                <hr>
            @endforeach
        </ol>
    </div>
@endsection
