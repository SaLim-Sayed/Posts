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
        <div class="fw-bold container btn btn-dark my-2 d-flex justify-content-between align-items-start">

        <span class="my-2 ms-2 me-auto"> <b class="h2">Posts </b></span>
            <a href="{{ route('posts.create') }} " class=" btn btn-primary mx-2">create</a>
            <a href="{{ route('posts.delete.all') }} " class="btn btn-danger">Delete All</a>

        </div>

        @foreach ($posts as $post)
            <div class="bg-success-subtle ">
                <div class="fw-bold container btn btn-secondary bg-gradient my-2 d-flex justify-content-between align-items-start z-3 rounded-3">
                    <div class="ms-2 me-auto">{{ $post->title }}</div>
                    <span class="badge bg-primary rounded-pill m-2">{{ $post->id }}</span>
                </div>

                <li class="bg-success-subtle list-group-item d-flex justify-content-between align-items-start">

                    <div class="ms-2 me-auto">
                        <h3>{{ $post->body }}</h3>
                        <ul>
                            @foreach ($post->comments as $comment)
                                <li>{{ $comment->body }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <span>
                        <a href="{{ route('posts.show', $post->id) }} " class="btn btn-primary">show</a>
                        <a href="{{ route('posts.edit', $post->id) }} "class="btn btn-info">edit</a>
                        <a href="{{ route('posts.delete', $post->id) }} " class="btn btn-danger">delete</a>
                    </span>
                </li>
                <hr>
            </div>
        @endforeach
        </ol>

        {{-- {{ $posts->links() }} --}}
    </div>
@endsection
