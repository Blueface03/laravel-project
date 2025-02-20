<!-- Header -->
<header class="header2" style="padding-top: 100px">
    <h2>INFORMASI</h2>
    <h3> @switch($title)
            @case('Laporan Infromasi Publik')
                Laporan Infromasi Publik
            @break
            @case('Pengadaan Barang Dan Jasa')
                Pengadaan Barang Dan Jasa
            @break
            @default
                Agenda Pimpinan
        @endswitch
    </h3>
    <div class="divider2"></div>
</header>

<div class="container mt-5">
        <h3> @switch($title)
            @case('Laporan Infromasi Publik')
                Daftar Laporan Infromasi Publik
            @break
            @case('Pengadaan Barang Dan Jasa')
                Daftar Pengadaan Barang Dan Jasa
            @break
            @default
                Daftar Agenda Pimpinan
        @endswitch</h3>
</div>


