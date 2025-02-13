@include('back.layout.stylesheet')
@include('back.layout.navbar')
<header class="custom-header" style="padding-top: 100px">
    <h1>Profil Pejabat</h1>
    <div class="custom-divider"></div>
</header>
<div class="profile-card-container">
    <div class="profile-card">
      <img src="profile1.jpg" alt="Profile 1">
      <h3>drg. Pembajun Setyaningastutie, M.Kes</h3>
      <p><strong>Kepala Dinas Kesehatan</strong></p>
      <a href="#" class="profile-btn">Lihat Profil</a>
    </div>
    
    <div class="profile-card">
      <img src="profile2.jpg" alt="Profile 2">
      <h3>Dra. Siti Badriyah, Apt., M.Kes.</h3>
      <p><strong>Sekretaris</strong></p>
      <a href="#" class="profile-btn">Lihat Profil</a>
    </div>
  
    <div class="profile-card">
      <img src="profile3.jpg" alt="Profile 3">
      <h3>dr. Gregorius Anung Trihadi, M.P.H.</h3>
      <p><strong>Kepala Bidang Pelayanan Kesehatan</strong></p>
      <a href="#" class="profile-btn">Lihat Profil</a>
    </div>
  
    <div class="profile-card">
      <img src="profile4.jpg" alt="Profile 4">
      <h3>M. Agus Priyanto, S.K.M., M.Kes.</h3>
      <p><strong>Kepala Bidang Sumber Daya Kesehatan</strong></p>
      <a href="#" class="profile-btn">Lihat Profil</a>
    </div>
  </div>  

@include('back.layout.footer')
@include('back.layout.scripts')