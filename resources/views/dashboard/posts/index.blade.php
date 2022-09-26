@extends('dashboard.layouts.main')

<!-- tambah data rapat -->
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data</h1>
</div>

<!-- jika berhasil buat data -->
@if(session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">

    <a href="/dashboard/posts/create" class="btn btn-warning mb-3"><span data-feather="plus"></span> Tambah data baru</a>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Rapat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Tempat</th>
                <th scope="col">Dokumentasi</th>
                <th scope="col">Data</th>
                <th scope="col">Link</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td>{{ $post->rapat }}</td>
                <td>{{ $post->tanggal }}</td>
                <td>{{ $post->tempat }}</td>
                <td>notulen : <span data-feather="check">{{ $post->notulen }}</span> <br>foto : <span data-feather="check">{{ $post->foto }}</span> <br>vidio : <span data-feather="check">{{ $post->vidio }}</span> </td>
                <td>{!! $post->excerpt !!}</td>
                <td><a href="{{ $post->link }}" class="text-decoration-none">{{ $post->link }}</a></td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none mb-1"><span data-feather="eye"></span> lihat</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none mb-1"><span data-feather="edit"></span> edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah yakin akan menghapus data ini?')"><span data-feather="x-circle"></span> hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<!-- akhir tambah data rapat -->