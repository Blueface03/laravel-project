@include('back.layout.stylesheet')
@include('back.layout.navbar')
<header class="custom-header" style="padding-top: 100px">
    <h1>Profil Pejabat</h1>
    <div class="custom-divider"></div>
</header>
<div class="profile-card-container">
    <div class="profile-card">
      <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 1">
      <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
      <a href="#profil1" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
    </div>
    
    <div class="profile-card">
      <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 2">
      <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
      <a href="#profil2" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
    </div>
  
    <div class="profile-card">
      <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 3">
      <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
      <a href="#profil3" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
    </div>
  
    <div class="profile-card">
      <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 4">
      <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
      <a href="#profil4" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
    </div>
    <div class="profile-card">
        <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 4">
        <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
        <a href="#profil5" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
      </div>
      <div class="profile-card">
        <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 4">
        <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
        <a href="#profil6" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
      </div>
      <div class="profile-card">
        <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 4">
        <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
        <a href="#profil7" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
      </div>
      <div class="profile-card">
        <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 4">
        <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
        <a href="#profil8" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
      </div>
      <div class="profile-card">
        <img src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="Profile 4">
        <h3>Nama</h3>
      <p><strong>Jabatan</strong></p>
        <a href="#profil9" data-bs-toggle="modal" class="profile-btn">Lihat Profil</a>
      </div>    
  </div>  
@include('back.layout.footer')
<!--- profil1 --->
<div class="portfolio-modal modal fade" id="profil1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil2 --->
<div class="portfolio-modal modal fade" id="profil2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil3 --->
<div class="portfolio-modal modal fade" id="profil3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil4 --->
<div class="portfolio-modal modal fade" id="profil4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil5 --->
<div class="portfolio-modal modal fade" id="profil5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil6 --->
<div class="portfolio-modal modal fade" id="profil6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil7 --->
<div class="portfolio-modal modal fade" id="profil7" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil8 --->
<div class="portfolio-modal modal fade" id="profil8" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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

<!--- profil9 --->
<div class="portfolio-modal modal fade" id="profil9" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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
<!--- profil10 --->
<div class="portfolio-modal modal fade" id="profil10" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img
                  src="{{ asset('back/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <h2 class="text-uppercase">Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto"
                              src="{{ asset('back/assets/img/portfolio/1.jpg') }}" alt="..." />
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                              repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                              nostrum, reiciendis facere nemo!</p>
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
@include('back.layout.scripts')