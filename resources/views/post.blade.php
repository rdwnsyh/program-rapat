<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- BOOTSRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My Css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

    <link rel="icon" href="../images/logo.png" type="logo/png" sizes="16x16">

    <title>BBSPGL | {{ $title }} </title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="../images/logo.png" alt="logo" width="33" class="d-inline-block align-text-top">
                BBSPGL
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/data-rapat">Data Rapat</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Selamat datang, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Ke Dashboard</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- detail data -->
    <div class="container mt-4">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-4 text-center">{{ $post->rapat }}</h2>
                <p class="fs-5">Tanggal : {{ $post->tanggal }}</p>
                <p class="fs-5">Tempat : {{ $post->tempat }}</p>
                <p class="fs-5">Data : <br>
                <article>
                    {!! $post->data !!}
                </article>
                </p>
                <p class="fs-5">Link : <br>
                    <a href="{{ $post->link }}" class="text-decoration-none">{{ $post->link }} </a>
                </p>
                <a href="/data-rapat" class="d-block text-decoration-none my-5"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
    <!-- akhir detail data -->

    <!-- media sosial -->
    <nav class="navbar warna-medsos">
        <div class="container">
            <ul class="m-auto text-center">
                <li class="medsos-bottom">
                    <a class="text-white jarak" href="https://www.instagram.com/geologi_kelautan/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li class="medsos-bottom">
                    <a class="text-white jarak" href="https://www.facebook.com/profile.php?id=100015647079238" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="medsos-bottom">
                    <a class="text-white jarak" href="https://twitter.com/GeologiKelautan" target="_blank">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li class="medsos-bottom">
                    <a class="text-white jarak" href="https://www.youtube.com/channel/UCmfET9llvWQEZr01UpY7A7A" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- copyright -->
    <footer class="p-5 bg-dark text-white text-center position-relative ">
        <div class="container">
            <p class="lead">Hak Cipta © 2022 Balai Besar Survei dan Pemetaan Geologi Kelautan</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5 ">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
    <!-- akhir copyright -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>