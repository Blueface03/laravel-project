@include('back.layout.stylesheet');
@include('back.layout.navbar')
<header class="header2" style="padding-top: 100px">
    <h1>Aduan</h1>
    <h2>Formulir Aduan</h2>
    <div class="divider2"></div>
</header>
<div class="aduan-container">
    <!-- Left Side: Daftar Aduan -->
    @foreach ($aduans as $aduan)
        <div class="aduan-card">
            <div class="aduan-header">
                <span class="aduan-user">👤 {{ $aduan->nama }}</span>
                <span class="aduan-date">📅 {{ $aduan->created_at->format('l, d F Y - H:i:s') }}</span>
            </div>
            <h3><a href="#">{{ $aduan->topik }}</a></h3>
            <p>{{ $aduan->pesan }}</p>
        </div>
    @endforeach


    <!-- Right Side: Form Aduan -->
    <div class="aduan-form">
        <h2>Form Aduan</h2>
        <form action="{{ url('/submit-aduan') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="noTelp" placeholder="No. Telp" required>
            <textarea name="alamat" placeholder="Alamat" required></textarea>
            <input type="text" name="topik" placeholder="Topik Pembahasan Keluhan" required>
            <textarea name="pesan" placeholder="Isi Pesan/Keluhan Anda" required></textarea>

            <div class="captcha-container">
                <span class="captcha-text">penuba</span>
                <button type="button" class="recaptcha-btn">🔄 Recaptcha</button>
            </div>

            <input type="text" name="security_code" placeholder="Masukkan security code" required>
            <button type="submit" class="submit-btn">✈ KIRIM</button>
        </form>

    </div>
</div>


@include('back.layout.footer')
@include('back.layout.scripts')
