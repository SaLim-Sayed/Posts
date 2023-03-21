@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container w-50">
        <h1>Post | {{ $post->id }}</h1>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $post->title }}</div>
                    {{ $post->body }}
                </div>
                <span>
                    <a href="{{ route('posts.show', $post->id) }} " class="btn btn-primary">show</a>
                    <a href="{{ route('posts.edit', $post->id) }} "class="btn btn-info">edit</a>
                    <a href="{{ route('posts.delete', $post->id) }} " class="btn btn-danger">delete</a>
                </span>
            </li>
        </ol>
    </div>
@endsection
