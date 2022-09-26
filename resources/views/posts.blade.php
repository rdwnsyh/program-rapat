@extends('layouts.main')

<!-- awal jumbotron -->
@section('jumbotron')
<div class="jumbotron jumbotron-fluid pt-5">
    <div class="container">
        <h1 class="display-4 text-light">SURVEI <br> & <span> PEMETAAN</span></h1>
        <a href="https://mgi.esdm.go.id/profil/" target="_blank" class="btn btn-light button">TENTANG SURVEI DAN PEMETAAN</a>
    </div>
</div>
@endsection
<!-- akhir jumbotron -->

<!-- awal info panel -->
@section('infopanel')
<div class="row justify-content-center">
    <div class="col-10 info-panel">
        <div class="row">
            <h3 class="text-center text-uppercase">artikel berita</h3>
            <div class="col-lg">
                <a href="https://mgi.esdm.go.id/arsip-berita/" target="_blank" class="text-decoration-none text-white">
                    <img src="images/map.png" alt="map" class="float-start">
                    <h4>
                        PEMETAAN GEOLOGI KELAUTAN
                    </h4>
                </a>
            </div>
            <div class="col-lg">
                <a href="https://mgi.esdm.go.id/arsip-berita/" target="_blank" class="text-decoration-none text-white">
                    <img src="images/energy.png" alt="energy" class="float-start">
                    <h4>
                        SUMBER DAYA ENERGI KELAUTAN
                    </h4>
                </a>
            </div>
            <div class="col-lg">
                <a href="https://mgi.esdm.go.id/arsip-berita/" target="_blank" class="text-decoration-none text-white">
                    <img src="images/mineral.png" alt="mineral" class="float-start">
                    <h4>
                        SUMBER DAYA MINERAL KELAUTAN
                    </h4>
                </a>
            </div>
            <div class="col-lg">
                <a href="https://mgi.esdm.go.id/arsip-berita/" target="_blank" class="text-decoration-none text-white">
                    <img src="images/laut.png" alt="laut" class="float-start">
                    <h4>
                        GEOLOGI LINGKUNGAN KEWILAYAHAN PANTAI DAN LAUT
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- akhir info panel -->

@section('container')
<h1 class="text-center mb-3 pt-5"> {{ $title }} </h1>

<!-- cari -->
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/data-rapat">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari data.." name="cari" value="{{ request('cari') }}">
                <button class="btn btn-warning" type="submit">cari</button>
            </div>
        </form>
    </div>
</div>
<!-- akhir cari -->


<!-- data rapat hero -->
<div class="container">
    @if($posts->count())
    <div class="card mb-3">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/data-rapat/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->rapat }}</a></h3>
            <p>
                <small class="text-muted">TANGGAL : {{ $posts[0]->tanggal }} | TEMPAT : {{ $posts[0]->tempat}} </small>
            </p>

            <p class="card-text"> {!! $posts[0]->excerpt !!} </p>

            <a href="/data-rapat/{{ $posts[0]->slug }}" class="btn btn-warning">Read More</a>
        </div>
    </div>
    <!-- akhir data rapat hero -->

    <!-- semua data rapat -->
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/data-rapat/{{ $post->slug }}" class=" text-decoration-none text-dark">{{$post->rapat}}</a></h5>
                        <p>
                            <small class="text-muted">TANGGAL : {{ $post->tanggal }} | TEMPAT : {{ $post->tempat}} </small>
                        </p>
                        <p class="card-text">
                            <small>
                                {!! $post->excerpt !!}
                            </small>
                        </p>
                        <a href="/data-rapat/{{ $post->slug }}" class="btn btn-warning">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found.</p>
@endif

{{$posts->links()}}
@endsection
<!-- akhir semua data rapat -->

<!-- copyright -->
@section('footer')
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Hak Cipta © 2022 Balai Besar Survei dan Pemetaan Geologi Kelautan</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>
@endsection
<!-- akhir copyright -->