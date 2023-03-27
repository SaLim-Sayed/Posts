@extends('layouts.layout')

@section('title')
    Posts
@endsection

@section('content')
    <div class="container card w-70 bg-secondary-subtle scr" style="width: 800px"  >
        @foreach ($users as $user)
            <div class="fw-bold container btn btn-dark my-2 d-flex justify-content-between align-items-start">


                <span class="my-2 ms-2 me-auto">  <b
                        class="h2">{{ $user->id }} - {{ $user->name }} </b></span>
                <a href="{{ route('users.delete', $user->id) }}  " class="btn btn-danger mt-2">Delete </a>

            </div>

            <li class="list-group list-group-numbered ">

            <li class="bg-success-subtle list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">

                        <ul>
                            <h5>Role</h5>
                            <ul>
                                @forelse ($user->roles as $role)
                                    <li>{{ $role->role_name }} </li>
                                @empty
                                    <li>User</li>
                                @endforelse
                            </ul>
                            <hr>
                            mobile number is <mark> {{ $user->phone->number ?? 'not valid' }}</mark>

                        </ul>

                    </div>

                </div>
                {{-- <a href="{{ route('users.delete', $user->id) }} " class="btn btn-danger">delete</a>

                <span>
                        <a href="{{ route('posts.show', $post->id) }} " class="btn btn-primary">show</a>
                        <a href="{{ route('posts.edit', $post->id) }} "class="btn btn-info">edit</a>
                        <a href="{{ route('posts.delete', $post->id) }} " class="btn btn-danger">delete</a>
                    </span> --}}
            </li>
            <hr>
        @endforeach
        </li>
        {{-- {{ $posts->links() }} --}}
    </div>
@endsection
