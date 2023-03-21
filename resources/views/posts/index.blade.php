@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container card w-70 bg-secondary-subtle" style="width: 800px">
        @if (Session::has('success'))
            <div class="alert alert-primary mt-2 text-center" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <span class="my-2"> <b class="h2">Posts | </b>
            <a href="{{ route('posts.create') }} " class=" btn btn-primary">create</a>
            <a href="{{ route('posts.delete.all') }} " class="btn btn-danger">Delete All</a>
        </span>

        <ol class="list-group list-group-numbered ">
            @foreach ($posts as $post)
                <li class="bg-success-subtle list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $post->title }}</div>
                        {{ $post->body }}
                    </div>
                    <span>
                        <a href="{{ route('posts.show', $post->id) }} " class="btn btn-primary">show</a>
                        <a href="{{ route('posts.edit', $post->id) }} "class="btn btn-info">edit</a>
                        <a href="{{ route('posts.delete', $post->id) }} " class="btn btn-danger">delete</a>
                    </span>
                    <span class="badge bg-primary rounded-pill m-2">{{ $post->id }}</span>
                </li>
                <hr>
            @endforeach
        </ol>

{{ $posts->links() }}
    </div>
@endsection
