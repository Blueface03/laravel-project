@include('back.layout.stylesheet')
@include('back.layout.navbar')

<body>
    <header class="header2" style="padding-top: 100px">
        <h1>Profil</h1>
        <h2>Kepegawaian</h2>
        <div class="divider2"></div>
    </header>


    <div class="container mt-5">
        <h2>DAFTAR KEPEGAWAIAN</h2>
        <div class="row mt-3">
            <div class="col-md-3">
                <select class="form-select" id="tahunSelect">
                    <option value="">Tahun</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari berdasarkan judul...">
            </div>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <tr data-tahun="2023" data-judul="Judul">
                    <td>1</td>
                    <td>Judul</td>
                    <td class="button-group3">
                        <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i
                                class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"
                            onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fa fa-link"></i>
                            Link</a>
                    </td>
                </tr>
                <tr data-tahun="2022" data-judul="judul">
                    <td>2</td>
                    <td>judul</td>
                    <td class="button-group3">
                        <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i
                                class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"
                            onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fa fa-link"></i>
                            Link</a>
                    </td>
                </tr>
                <tr data-tahun="2021" data-judul="Judul">
                    <td>3</td>
                    <td>Judul</td>
                    <td class="button-group3">
                        <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i
                                class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"
                            onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fa fa-link"></i>
                            Link</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <section class="page-section" id="services">
                                <div class="container">
                                    <div class="iframe-container">
                                        <iframe type="application/pdf"
                                            src="https://laravel-project-self.vercel.app/back/assets/pdf/report.pdf"
                                            width="820" height="1200" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </section>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Threads
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Illustration
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

@include('back.layout.footer')
@include('back.layout.scripts')
