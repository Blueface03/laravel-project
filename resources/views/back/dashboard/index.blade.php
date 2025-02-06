<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DINAS DUKCAPIL KOTA TEGAL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('back/assets/img/Tegal.svg.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('back/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('back/css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <img src="{{ asset('back/assets/img/DUKCAPIL KOTA TEGAL.png') }}" alt="Logo"
                    style="height: 40px;" />
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="{{ url('/index') }}" class="nav__link"><i class="fas fa-home"></i>Home</a></li>

                <!--=============== DROPDOWN 1: Profil ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <i class="fas fa-clipboard-list"></i> Profil <i
                            class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        @php
                            $profiles = [
                                1 => 'VISI & MISI DISDUK KOTA TEGAL',
                                2 => 'TUGAS DAN FUNGSI DINAS DUKCAPIL KOTA TEGAL',
                                3 => 'STRUKTUR ORGANISASI DINAS DUKCAPIL KOTA TEGAL',
                                4 => 'SEJARAH',
                                5 => 'PROFIL PEJABAT',
                                6 => 'LHKPN',
                                7 => 'KEPEGAWAIAN',
                                8 => 'ASET DAN INTERISASI BARANG',
                            ];
                        @endphp

                        @foreach ($profiles as $id => $title)
                            <li><a class="dropdown__link" href="{{ url('/profil/' . $id) }}">{{ $title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <!--=============== DROPDOWN 2: Program & Kegiatan ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <i class="fas fa-clipboard-list"></i> Program & Kegiatan <i
                            class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        @php
                            $programs = [
                                'RENSTRA' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'RENJA' => [['title' => 'Dokumen', 'url' => '#'], ['title' => 'Dokumen', 'url' => '#']],
                                'TAHUN ANGGARAN 2021' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'TAHUN ANGGARAN 2022' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'TAHUN ANGGARAN 2023' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'TAHUN ANGGARAN 2024' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'TAHUN ANGGARAN 2025' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                            ];
                        @endphp

                        @foreach ($programs as $programName => $documents)
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-bar-chart-line"></i> {{ $programName }} <i
                                        class="ri-add-line dropdown__add"></i>
                                </div>

                                <ul class="dropdown__submenu">
                                    @foreach ($documents as $document)
                                        <li>
                                            <a href="{{ $document['url'] }}" class="dropdown__sublink">
                                                <i class="ri-file-list-line"></i> {{ $document['title'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{ url('/inovasi') }}" class="nav__link"><i class="fas fa-lightbulb"></i>Inovasi</a></li>

                <!--=============== DROPDOWN 3: Info DisDuk ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <i class="fas fa-info-circle"></i> Info DisDuk<i
                            class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        @php
                            $infoDisduk = [
                                1 => 'BERITA',
                                2 => 'ARTIKEL',
                                3 => 'INFO KEGIATAN',
                                4 => 'PENGUMUMAN',
                            ];
                        @endphp

                        @foreach ($infoDisduk as $id => $title)
                            <li><a class="dropdown__link"
                                    href="{{ url('/infodisduk/' . $id) }}">{{ $title }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <!--=============== DROPDOWN 4: Informasi ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <i class="fas fa-clipboard-list"></i> Informasi <i
                            class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        @php
                            $informasi = [
                                'PPID/INFORMASI PUBLIK' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'ALUR LAYANAN' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                                'PRODUK HUKUM' => [
                                    ['title' => 'Dokumen', 'url' => '#'],
                                    ['title' => 'Dokumen', 'url' => '#'],
                                ],
                            ];
                        @endphp

                        @foreach ($informasi as $sectionName => $documents)
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-bar-chart-line"></i> {{ $sectionName }} <i
                                        class="ri-add-line dropdown__add"></i>
                                </div>

                                <ul class="dropdown__submenu">
                                    @foreach ($documents as $document)
                                        <li>
                                            <a href="{{ $document['url'] }}" class="dropdown__sublink">
                                                <i class="ri-file-list-line"></i> {{ $document['title'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                        <!-- Static Links -->
                        <li><a class="dropdown__link" href="#program1">PERMOHONAN INFORMASI</a></li>
                        <li><a class="dropdown__link" href="#program2">LAPORAN INFORMASI PUBLIK</a></li>
                        <li><a class="dropdown__link" href="#program2">PENGADAAN BARANG DAN JASA</a></li>
                        <li><a class="dropdown__link" href="#program1">AGENDA PIMPINAN</a></li>
                    </ul>
                </li>

                <!--=============== DROPDOWN 5: Aduan ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <i class="fas fa-info-circle"></i> ADUAN<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        @php
                            $aduan = [
                                1 => 'SALURAN PENGADUAN',
                                2 => 'FORMULIR ADUAN',
                                3 => 'FAQ',
                            ];
                        @endphp

                        @foreach ($aduan as $id => $title)
                            <li><a class="dropdown__link" href="{{ url('/aduan/' . $id) }}">{{ $title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{ url('/galeri') }}" class="nav__link"><i class="fas fa-images"></i>Galeri</a></li>
                <li><a href="{{ url('/kontak') }}" class="nav__link"><i class="fas fa-envelope"></i>Kontak</a></li>
                <li><a href="{{ url('/kebijakan') }}" class="nav__link"><i class="fas fa-shield-alt"></i>Kebijakan &
                        Privasi</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="search-wrapper" id="searchWrapper">
    <div class="container">
        <div class="search-container">
            <input type="text" placeholder="Cari sesuatu...">
            <button type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
</div>

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
            <div class="carousel-item active"
                style="background-image: url('{{ asset('back/assets/img/bg2.jpg') }}');">
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

<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Layanan Utama</h2>
            <h3 class="section-subheading text-muted">Layanan utama yang kami hadirkan untuk masyarakat sebagai bentuk
                komitmen dalam mewujudkan Tegal yang Mandiri dan Sejahtera.</h3>
        </div>

        <div class="btn-container">
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Informasi Kuota magang di Dinas DisDuk Kota Tegal</a>
                <a href="#" class="btn btn-primary">Samsung</a>
                <a href="#" class="btn btn-primary">Sony</a>
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Informasi Kuota magang di Dinas DisDuk Kota Tegal</a>
                <a href="#" class="btn btn-primary">Samsung</a>
                <a href="#" class="btn btn-primary">Sony</a>
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Informasi Kuota magang di Dinas DisDuk Kota Tegal</a>
                <a href="#" class="btn btn-primary">Samsung</a>
                <a href="#" class="btn btn-primary">Sony</a>
            </div>
        </div>

    </div>
</section>

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('back/assets/img/about/1.jpg') }}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('back/assets/img/about/2.jpg') }}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('back/assets/img/about/3.jpg') }}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2015</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('back/assets/img/about/4.jpg') }}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2020</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
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
<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('back/assets/img/logos/microsoft.svg') }}" alt="..."
                        aria-label="Microsoft Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('back/assets/img/logos/google.svg') }}" alt="..."
                        aria-label="Google Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('back/assets/img/logos/facebook.svg') }}" alt="..."
                        aria-label="Facebook Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('back/assets/img/logos/ibm.svg') }}" alt="..."
                        aria-label="IBM Logo" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; DINAS DUKCAPIL KOTA TEGAL</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('back/js/scripts.js') }}"></script>
<script src="{{ asset('back/js/navbar.js') }}"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html>
