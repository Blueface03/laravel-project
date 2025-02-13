@include('back.layout.stylesheet');
@include('back.layout.navbar')
<header class="header2" style="padding-top: 100px">
    <h1>Aduan</h1>
    <h2>Formulir Aduan</h2>
    <div class="divider2"></div>
</header>
<div class="aduan-container">
    <!-- Left Side: Daftar Aduan -->
    <div class="aduan-list">
        <h2>Daftar Aduan</h2>

        <div class="aduan-card">
            <div class="aduan-header">
                <span class="aduan-user">👤 Kalisal</span>
                <span class="aduan-date">📅 Selasa, 21 Januari 2025 - 10:14:54</span>
            </div>
            <h3>Penyelesaian <strong>Jual Beli Rumah</strong></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, architecto aperiam perspiciatis tempore deserunt, illum nostrum dicta illo delectus dolor ad quae unde assumenda reiciendis? Voluptates fuga rem reiciendis debitis!</p>
        </div>

        <div class="aduan-card">
            <div class="aduan-header">
                <span class="aduan-user">👤 Rio Handoko</span>
                <span class="aduan-date">📅 Jum’at, 15 November 2024 - 14:29:46</span>
            </div>
            <h3>Imunisasi Catin Wanita</h3>
            <p>Izin bertanya bisa kah calon saya perempuan mendapatkan pelayanan imunisasi catin di wilayah Yogyakarta soalnya dy bertugas sebagai perawat di RS UII ...</p>
        </div>

        <div class="aduan-card">
            <div class="aduan-header">
                <span class="aduan-user">👤 NN</span>
                <span class="aduan-date">📅 Sabtu, 14 September 2024 - 08:04:22</span>
            </div>
            <h3>Bakar Sampah</h3>
            <p>Mohon tindakan nya karena tetangga kanan kiri bakar sampah setiap hari dan sangat berbahaya di musim kemarau yang kering seperti ini. Mohon segera ...</p>
        </div>
    </div>

    <!-- Right Side: Form Aduan -->
    <div class="aduan-form">
        <h2>Form Aduan</h2>
        <form>
            <input type="text" placeholder="Nama">
            <input type="email" placeholder="Email">
            <input type="tel" placeholder="No. Telp">
            <textarea placeholder="Alamat"></textarea>
            <input type="text" placeholder="Topik Pembahasan Keluhan">
            <textarea placeholder="Isi Pesan/Keluhan Anda"></textarea>

            <div class="captcha-container">
                <span class="captcha-text">penuba</span>
                <button type="button" class="recaptcha-btn">🔄 Recaptcha</button>
            </div>

            <input type="text" placeholder="Masukkan security code">
            <button type="submit" class="submit-btn">✈ KIRIM</button>
        </form>
    </div>
</div>


@include('back.layout.footer')
<div class="complaint-container">
    <!-- Left Side: Complaint Detail -->
    <div class="complaint-detail">
        <h2>Bakar Sampah</h2>

        <div class="complaint-card">
            <div class="complaint-header">
                <span class="complaint-user"><strong>NN</strong></span>
                <span class="complaint-date">📅 Sabtu, 14 September 2024 - 08:04:22</span>
            </div>
            <p>Mohon tindakan nya karena tetangga kanan kiri bakar sampah setiap hari dan sangat berbahaya di musim kemarau yg kering seperti ini. Mohon segera ditindak</p>
        </div>

        <div class="response-card">
            <div class="response-header">
                <span class="response-user"><strong>ADMINISTRATOR</strong></span>
                <span class="response-date">📅 17 September 2024 - 11:20:38</span>
            </div>
            <p>Yth. Sdr NN, Terima kasih telah menghubungi Dinas Kesehatan DIY terkait aduan tentang pembakaran sampah di lingkungan tersebut. 
               Aduan telah kami teruskan ke Dinas Kesehatan Kabupaten Sleman untuk ditindaklanjuti. Jika dirasa belum ada solusi, kami persilakan untuk 
               menyampaikan ke Puskesmas terdekat atau kelurahan setempat. Demikian, terima kasih.</p>
        </div>
    </div>

    <!-- Right Side: Complaint List -->
    <div class="complaint-list">
        <input type="text" placeholder="Cari berdasarkan subjek..." class="search-bar">
        
        <h3>DAFTAR ADUAN</h3>
        <hr class="blue-line">

        <ul>
            <li><a href="#">Penyelesaian Jual Beli Rumah</a>
                <span class="date">📅 21 Januari 2025</span>
                <span class="user">👤 Rima Fatmi Hastuti</span>
            </li>
            <li><a href="#">Imunisasi Catin Wanita</a>
                <span class="date">📅 15 November 2024</span>
                <span class="user">👤 Rio Handoko</span>
            </li>
            <li><a href="#">Ambulance Puskesmas</a>
                <span class="date">📅 18 Juli 2024</span>
                <span class="user">👤 anonim</span>
            </li>
            <li><a href="#">Sertifikat Vaksin</a>
                <span class="date">📅 03 Juli 2024</span>
                <span class="user">👤 Ody Liba Laksana</span>
            </li>
        </ul>
    </div>
</div>

@include('back.layout.scripts')
