@include('back.layout.stylesheet')
@include('back.layout.navbar')
<header class="header2" style="padding-top: 100px">
    <h1>Profil</h1>
    <h2>Aset Dan Inventarisasi Barang</h2>
    <div class="divider2"></div>
</header>
<section class="page-section" id="services" style="padding-top: 0px">
    <div class="container">
        <div class="iframe-container">
            <!-- Gantilah tag iframe dengan tag img -->
            <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Deskripsi Gambar">
        </div>
    </div>
</section>

@include('back.layout.footer')
@include('back.layout.scripts')