<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dwipa's Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-home"
                                style="color: rgb(0, 85, 255)"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('peminjaman.index') }}"><i class="fa-solid fa-bookmark"
                                style="color: rgb(0, 85, 255)"></i>
                            Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}"><i class="fa-solid fa-users"
                                style="color: rgb(0, 85, 255)"></i> User</a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('buku.index') }}"><i class="fa-solid fa-book"
                                style="color: rgb(0, 85, 255)"></i> Buku</a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori.index') }}"><i class="fa fa-tag"
                                style="color: rgb(0, 85, 255)"></i>
                            Kategori</a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.password') }}"><i class="fa-solid fa-key"
                                style="color: rgb(0, 85, 255)"></i>
                            Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}"><i class="fa-solid fa-right-from-bracket"
                                style="color: rgb(0, 85, 255)"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>{{ $title }}</h1>
        @yield('content')

    </div>
</body>

</html>
