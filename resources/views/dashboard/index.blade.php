@extends('dashboard.layouts.main')

<!-- tampilan awal dashboard -->
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat datang, {{ auth()->user()->name }}</h1>
</div>

<img src="images/hallo.svg" alt="hallo" class="img-fluid py-5">
@endsection
<!-- akhir tampilan awal dashboard-->