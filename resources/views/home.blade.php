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

<!-- kapal survei -->
@section('container')
<h1 class="mb-3 text-center pt-5">KAPAL SURVEI</h1>
<div class="mb-3 row pb-5">
    <div class="col-lg-6">
        <img src="images/geomarin3.jpg" class="img-fluid rounded shadow p-2 mb-3 bg-body rounded" alt="kapal geomarin3">
    </div>
    <div class="col-lg-5">
        <h3>GEOMARIN III</h3>
        <p>Geomarin III merupakan multipurpose vessel yang dapat dimanfaatkan untuk pemetaan hidrografi, oseanografi, geologi, maupun geofisika. Kapal dilengkapi dengan fasilitas DPS/DP-1 (Dynamic Positioning System), yaitu sistem manuver pergerakan relatif terhadap gerakan sensor bawah laut saat pengoperasian Remotely Operated Vehicle (ROV), dan posisi diam absolut saat pengambilan contoh dasar laut, pengukuran arus dan gelombang laut). Kapal ini mulai beroperasi sejak tahun 2009, menggunakan sertifikasi ClassNK (Jepang) dan BKI, dengan waktu jelajah 30 hari. Kapal ini memiliki back deck layout, kapasitas airgun dan sistim navigasi dalam mendukung 2D Seismic High Resolution, serta peningkatan kemampuan pengambilan data geologi dan oseanografi.</p>
        <a href="https://mgi.esdm.go.id/kapal-survei/" target="_blank" class="btn btn-warning text-light rounded-pill shadow-sm">Kapal Survei</a>
    </div>
</div>
@endsection
<!-- akhir kapal survei -->

<!-- peralatan -->
@section('peralatan')
<h1 class="mb-3 text-center pt-4">PERALATAN SURVEI</h1>
<div class="mb-3 row pb-5">
    <div class="col-lg-6">
        <p>Peralatan survei geologi kelautan kami memungkinkan perolehan informasi geoteknik yang cepat dan akurat yang kemudian dapat digunakan untuk membuat keputusan tentang tindakan terbaik dalam proyek-proyek seperti membangun fondasi, menentukan kesesuaian lokasi, merancang fondasi, dan menilai risiko.</p>
        <a href="https://mgi.esdm.go.id/peralatan-survei/" target="_blank" class="btn btn-warning text-light rounded-pill shadow-sm">Peralatan Survei</a>
    </div>
    <div class="col-lg-5">
        <img src="images/peralatansurvei.jpeg" class="img-fluid rounded shadow p-2 mb-5 bg-body rounded" alt="peralatansurvei">
    </div>
</div>
@endsection
<!-- akhir peralatan -->

<!-- informasi -->
@section('informasi')
<h1 class="mb-3 text-center pt-4">INFORMASI PUBLIK</h1>
<div class="mb-3 row pb-5">
    <div class="col-lg-6">
        <img src="images/peta.png" class="img-fluid rounded shadow p-3 mb-3 bg-body rounded" alt="peta">
    </div>
    <div class="col-lg-5">
        <p>Balai Besar Survei dan Pemetaan Geologi Kelautan memiliki berbagai macam aset koleksi dan informasi yang dapat diakses secara publik yang mencakup akses ke Perpustakaan Digital, Buletin, E-Jurnal dan lain sebagainya</p>
        <a href="https://mgi.esdm.go.id/publikasi/" target="_blank" class="btn btn-warning text-light rounded-pill shadow-sm">Informasi Publik</a>
    </div>
</div>
@endsection
<!-- akhir infomasi -->

<!-- kontak -->
@section('kontak')
<section class="mt-5">
    <div class="row">
        <h1 class="mb-3 text-center pt-4">Mulailah Bekerja sama dengan kami.</h1>
        <div class="col-md">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="bi bi-geo-alt"></i> <span class="fw-bold">Lokasi : <br>
                        Kantor Pusat - Jl. Dr. Djunjunan No.236 Pasteur, Bandung</span></li>
                <li class="list-group-item"><i class="bi bi-telephone"></i> <span class="fw-bold">Mobile Phone : <br>
                        +62-022-6032020, +62-022-6032201</span></li>
                <li class="list-group-item"><i class="bi bi-envelope"></i> <span class="fw-bold">E-mail : <br>
                        sekretariat.p3gl@esdm.go.id</span></li>
                <li class="list-group-item"><i class="bi bi-map"></i> <span class="fw-bold">cari tahu alamat : <br>
                        <a href="https://mgi.esdm.go.id/kontak-kami/" target="_blank" class=" text-decoration-none">kunjungi alamat lebih lengkap</a></span>
                </li>
            </ul>
        </div>

        <div class="col-md">
            <img src="images/kontak.svg" class="img-fluid d-none d-sm-block" alt="header">
        </div>
    </div>
    </div>
</section>
@endsection
<!-- akhir kontak -->

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