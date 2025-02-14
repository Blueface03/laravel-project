<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1>
                @switch($title)
                    @case('ARTIKEL')
                        ARTIKEL
                        @break
                    @case('INFO KEGIATAN')
                        INFO KEGIATAN
                        @break
                    @default
                        BERITA
                @endswitch
            </h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>