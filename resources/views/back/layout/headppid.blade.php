<!-- Header -->
<header class="header2" style="padding-top: 100px">
    <h2>PPID/INFORMASI PUBLIK</h2>
    <h3> @switch($title)
            @case('Infromasi Berkala')
                Infromasi Berkala
            @break
            @case('Infromasi Setiap Saat')
                Infromasi Setiap Saat
            @break
            @case('Infromasi Serta Merta')
                Infromasi Serta Merta
            @break
            @case('Infromasi Publik')
                Infromasi Publik
            @break
            @default
                Infromasi Publik Yang Dikecualikan
        @endswitch
    </h3>
    <div class="divider2"></div>
</header>

<div class="container mt-5">
        <h3> @switch($title)
            @case('Infromasi Berkala')
                Daftar Infromasi Berkala
            @break
            @case('Infromasi Setiap Saat')
                Daftar Infromasi Setiap Saat
            @break
            @case('Daftar Infromasi Serta Merta')
                Daftar Infromasi Serta Merta
            @break
            @case('Daftar Infromasi Publik')
                Daftar Infromasi Publik
            @break
            @default
                Daftar Infromasi Publik Yang DIkecualikan
        @endswitch</h3>
</div>


