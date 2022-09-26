@extends('dashboard.layouts.main')

<!-- tampilan data rapat -->
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">lihat Data</h1>
</div>

<div class="table-responsive col-lg-10">

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
                    <a href="/dashboard/lihat-data/{{ $post->slug }}" class="badge bg-info text-decoration-none mb-1"><span data-feather="eye"></span> lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<!-- akhir tampilan data rapat -->