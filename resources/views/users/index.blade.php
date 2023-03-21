@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container card w-70 bg-secondary-subtle" style="width: 800px">

        @foreach ($users as $user)
            <ol class="list-group list-group-numbered ">

                <li class="bg-success-subtle list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">
                            <h3>{{ $user->name }}</h3>
                            <ul>
                                <h5>Role</h5>
                                <ul>
                                    @foreach ($user->roles as $role)
                                        <li>{{ $role->role_name }} </li>
                                    @endforeach
                                </ul>
                            </ul>
                        </div>
                        mobile number is <mark> {{ $user->phone->number }}</mark>

                    </div>
                    <a href="{{ route('users.delete', $user->id) }} " class="btn btn-danger">delete</a>

                    {{-- <span>
                        <a href="{{ route('posts.show', $post->id) }} " class="btn btn-primary">show</a>
                        <a href="{{ route('posts.edit', $post->id) }} "class="btn btn-info">edit</a>
                        <a href="{{ route('posts.delete', $post->id) }} " class="btn btn-danger">delete</a>
                    </span> --}}
                    <span class="badge bg-primary rounded-pill m-2">{{ $user->id }}</span>
                </li>
                <hr>
        @endforeach
        </ol>
        {{-- {{ $posts->links() }} --}}
    </div>
@endsection
