@include('back.layout.assets')
@include('back.layout.navbar')
<div class="aduan-container">
    <!-- Left Side: Daftar Aduan -->
    <div class="aduan-list">
        <h2>Daftar Aduan</h2>

        <div class="aduan-card">
            <div class="aduan-header">
                <span class="aduan-user">👤 Rima Fatmi Hastuti</span>
                <span class="aduan-date">📅 Selasa, 21 Januari 2025 - 10:14:54</span>
            </div>
            <h3>Penyelesaian <strong>Jual Beli Rumah</strong></h3>
            <p>Pegawai Dinas Kesehatan Provinsi DIY a.n. Rima Fatmi Hastuti telah mengembalikan uang DP pembelian rumah sesuai kesepakatan. Kami ucapkan terima ...</p>
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
@yield('content')
@yield('content')
@yield('content')
