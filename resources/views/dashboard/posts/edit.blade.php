@extends('dashboard.layouts.main')

@section('container')
<!-- edit data -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit data</h1>
</div>

<div class="col-lg-9">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="rapat" class="form-label">Rapat</label>
            <input type="text" class="form-control @error('rapat') is-invalid @enderror" id="rapat" name="rapat" required autofocus value="{{ old('rapat', $post->rapat) }}">
            @error('rapat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal', $post->tanggal) }}">
            @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" required value="{{ old('tempat', $post->tempat) }}">
            @error('tempat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <label for="notulen" class="">Notulen</label>
        <div class="form-check">
            <input class="form-check-input @error('notulen') is-invalid @enderror" type="checkbox" name="notulen" value="notulen" id="notulen" required>
            @error('notulen')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label class="form-check-label" for="notulen">
                notulen
            </label>
        </div>
        <label for="foto" class="">Foto</label>
        <div class="form-check">
            <input class="form-check-input @error('foto') is-invalid @enderror" type="checkbox" name="foto" value="foto" id="foto" required>
            @error('foto')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label class="form-check-label" for="foto">
                foto
            </label>
        </div>
        <label for="vidio" class="">Vidio</label>
        <div class="form-check">
            <input class="form-check-input @error('vidio') is-invalid @enderror" type="checkbox" name="vidio" value="vidio" id="vidio" required>
            @error('vidio')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label class="form-check-label" for="vidio">
                vidio
            </label>
        </div>

        <div class="my-3">
            <label for="link" class="form-label">Masukan link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" required value="{{ old('link', $post->link) }}">
            @error('link')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            @error('data')
            <p class="text-danger"> {{$message}} </p>
            @enderror
            <input id="data" type="hidden" name="data" required value="{{ old('data', $post->data) }}">
            <trix-editor input="data"></trix-editor>
        </div>
        <button type="submit" class="btn btn-warning">Edit data</button>
    </form>
</div>
<!-- akhir edit data -->

<!-- trix editor -->
<script>
    const judul = document.querySelector('#rapat');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?rapat=' + rapat.value)
            .then(Response => Response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
<!-- akhir trix editor -->
@endsection