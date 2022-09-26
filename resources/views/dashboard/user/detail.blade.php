@extends('dashboard.layouts.main')

<!-- melihat detail data rapat -->
@section('container')
<div class="container my-4">
    <div class="rowr my-3">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">{{ $post->rapat }}</h2>

            <a href="/dashboard/lihat-data" class="btn btn-success m-1"><span data-feather="arrow-left"></span>Kembali Ke Semua Data</a>

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
        </div>
    </div>
</div>
@endsection
<!-- akhir melihat detail data rapat -->