
@include('back.layout.stylesheet')
@include('back.layout.navbar')


<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('back/assets/img/bg2.jpg') }}');">
                <div class="carousel-caption">
                    <h5>Selamat Datang</h5>
                    <p>DINAS DUKCAPIL Kota Tegal</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('back/assets/img/bg1.jpg') }}');">
                <div class="carousel-caption">
                    <h5>Selamat Datang</h5>
                    <p>DINAS DUKCAPIL Kota Tegal</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('back/assets/img/Capil.png') }}');">
                <div class="carousel-caption">
                    <h5>Selamat Datang</h5>
                    <p>DINAS DUKCAPIL Kota Tegal</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>

<section class="page-section" id="services" style="padding-bottom: 50px">
    <div class="container">
        <div class="text-center"  style="padding-top: 50px">
            <h2 class="section-heading text-uppercase" >Layanan Utama</h2>
            <h3 class="section-subheading text-muted">Layanan utama yang kami hadirkan untuk masyarakat sebagai bentuk
                komitmen dalam mewujudkan Tegal yang Mandiri dan Sejahtera.</h3>
        </div>

        <div class="btn-container">
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Pencatatan Sipil</a>
                <a href="#" class="btn btn-primary">Pendaftaran Penduduk</a>
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Pengelolaan SIAK</a>
                <a href="#" class="btn btn-primary">Pemanfaatan Data</a>
            </div>
        </div>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center"  style="padding-top: 50px">
            <h2 class="section-heading text-uppercase">kepala </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('back/assets/img/team/1.jpg') }}"
                        alt="..." />
                    <h4>Parveen Anand</h4>
                    <p class="text-muted">Lead Designer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('back/assets/img/team/2.jpg') }}"
                        alt="..." />
                    <h4>Diana Petersen</h4>
                    <p class="text-muted">Lead Marketer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('back/assets/img/team/3.jpg') }}"
                        alt="..." />
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Developer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"
                        aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                    laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>
<header class="header2" style="padding-top: 100px">
    <h1>Sistem Informasi</h1>
    <div class="divider2"></div>
</header>
<div class="system-card-container">
    <div class="system-card">
        <h3>JAMU LAN PIJAT, AGAWE AWET URIP, TINEBIH ING RUBEDO</h3>
        <img src="jampi-ati.png" alt="Jampi Ati">
        <p>Jamu lan Pijat, Agawe awet urip, Tinebih ing rubedo</p>
        <div class="system-card-buttons">
            <a href="#" class="btn-system">Kunjungi Sistem</a>
            <a href="#" class="btn-system-outline">Selengkapnya</a>
        </div>
    </div>

    <div class="system-card">
        <h3>SISTEM INFORMASI KOMUNIKASI DATA KESEHATAN KELUARGA</h3>
        <img src="icon-database.png" alt="Database Icon">
        <p>Sistem Informasi Komunikasi Data Kesehatan Keluarga</p>
        <div class="system-card-buttons">
            <a href="#" class="btn-system">Kunjungi Sistem</a>
            <a href="#" class="btn-system-outline">Selengkapnya</a>
        </div>
    </div>

    <div class="system-card system-card-highlight">
        <h3>SISTEM INFORMASI IMUNISASI TERPADU</h3>
        <img src="icon-imunisasi.png" alt="Imunisasi Icon">
        <p>Sistem pengolah data dan pelaporan terkait imunisasi di Puskesmas.</p>
        <div class="system-card-buttons">
            <a href="#" class="btn-system">Kunjungi Sistem</a>
            <a href="#" class="btn-system-outline">Selengkapnya</a>
        </div>
    </div>

    <div class="system-card">
        <h3>SISTEM PENANGGULANGAN GAWAT DARURAT TERPADU</h3>
        <img src="icon-ambulance.png" alt="Ambulance Icon">
        <div class="system-card-buttons">
            <a href="#" class="btn-system">Kunjungi Sistem</a>
            <a href="#" class="btn-system-outline">Selengkapnya</a>
        </div>
    </div>
</div>
@include('back.layout.footer')
@include('back.layout.scripts')
@yield('content')
