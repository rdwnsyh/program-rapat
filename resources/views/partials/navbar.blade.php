<!-- navbar -->

<!-- media sosial -->
<nav class="navbar warna-medsos">
    <div class="container float-start">
        <ul class="text-white medsos">
            <li class="medsos-top">
                <a class="text-white jarak" href="https://www.instagram.com/geologi_kelautan/" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
            </li>
            <li class="medsos-top">
                <a class="text-white jarak" href="https://www.facebook.com/profile.php?id=100015647079238" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
            </li>
            <li class="medsos-top">
                <a class="text-white jarak" href="https://twitter.com/GeologiKelautan" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
            </li>
            <li class="medsos-top">
                <a class="text-white jarak" href="https://www.youtube.com/channel/UCmfET9llvWQEZr01UpY7A7A" target="_blank">
                    <i class="bi bi-youtube"></i>
                </a>
            </li>
            <ul class="text-white marine">
                Your Partner in Marine Surveys
            </ul>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/logo.png" alt="bbspgl" width="37" class="d-inline-block align-text-top">
            BBSPGL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link hoper {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hoper {{ Request::is('data-rapat') ? 'active' : '' }}" href="/data-rapat">Data Rapat</a>
                </li>
            </ul>

            <!-- berhasil login ke dashboard -->
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/profile.png" alt="profile" width="30">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Ke Dashboard</a>
                        </li>
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
                <a class="nav-item btn btn-warning tombol {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- akhir navbar -->