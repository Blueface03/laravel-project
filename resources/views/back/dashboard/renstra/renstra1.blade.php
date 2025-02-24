@include('back.layout.stylesheet')
@include('back.layout.navbar')

@include('back.layout.headrenstra',['title' => 'Dokumen Renstra 2017-2022'])

<body>
    <!-- Container -->
    <div class="container2" style="padding-top: 0px">
        <section class="document-section2">
    
            <div class="document-item2">
                <h4>Judul</h4>
                <p>Judu;</p>
                <div class="button-group2">
                    <a data-bs-toggle="modal" href="#portfolioModal1"  class="btn-custom btn-custom-read-2"><i class="fas fa-book-open"></i> Lihat</a>
                    <a href="#" class="btn-custom btn-custom-link-3" onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fas fa-link"></i> Copy Link</a>
    
                </div>
            </div>
    
            <div class="document-item2">
                <h4>Judul</h4>
                <p>Judul</p>
                <div class="button-group2">
                    <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i class="fas fa-book-open"></i> Lihat</a>
                    <a href="#" class="btn-custom btn-custom-link-3" onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fas fa-link"></i> Copy Link</a>
    
                </div>
            </div>
        </section>
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
                                            <iframe type="application/pdf" src="https://laravel-project-self.vercel.app/back/assets/pdf/report.pdf" width="820" height="1200" allow="autoplay"></iframe>
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