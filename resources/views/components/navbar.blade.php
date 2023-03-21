<nav class="navbar navbar-expand-lg bg-body-tertiary  bg-dark px-5 " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Salim</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">create Posts</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('posts.softDelete') }}">Deleted Posts</a> --}}
                </li>
            </ul>
        </div>
        <form class="d-flex" role="search">
            {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button> --}}
            <a class="nav-link" href="{{ route('posts.softDelete') }}"> <i class="fa-solid fa-trash-can pt-2 container "
                    style="color:rgb(169, 113, 113);font-size: 30px;"></i>
            </a>
            {{-- <i class="fa-solid fa-trash  container " style="width:100;color:red;font-size: 50px;"></i> --}}
        </form>
    </div>
    </div>
</nav>
