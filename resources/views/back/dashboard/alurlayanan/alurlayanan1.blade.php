@include('back.layout.stylesheet')
@include('back.layout.navbar')
@include('back.layout.headalur',['title' => 'Alur Permohonan Infromasi'])
<section class="page-section" id="services">
    <div class="container">
        <div class="iframe-container">
            <!-- Gantilah tag iframe dengan tag img -->
            <img src="{{ asset('back/assets/img/portfolio/2.jpg') }}" alt="Deskripsi Gambar">
        </div>
    </div>
</section>

@include('back.layout.footer')
@include('back.layout.scripts')