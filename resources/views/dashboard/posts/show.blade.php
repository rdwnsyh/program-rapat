@extends('dashboard.layouts.main')

<!-- detail data rapat -->
@section('container')
<div class="container py-4">
    <div class="rowr my-3">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">{{ $post->rapat }}</h2>

            <a href="/dashboard/posts" class="btn btn-success m-1"><span data-feather="arrow-left"></span>Kembali Ke Semua Data</a>

            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><span data-feather="edit"></span> edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mx-1" onclick="return confirm('Apakah yakin akan menghapus data ini?')"><span data-feather="x-circle"></span> hapus</button>
            </form>


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
<!-- akhir detail data rapat -->