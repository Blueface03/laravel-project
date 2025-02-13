<header class="header2" style="padding-top: 100px">
    <h1>Aduan</h1>
    <h2>Saluran Pengaduan</h2>
    <div class="divider2"></div>
</header>

<body>
    <div class="container mt-5">
        <h2>DAFTAR ASET DAN INVENTARISASI BARANG</h2>
        <div class="row mt-3">
            <div class="col-md-3">
                <select class="form-select" id="tahunSelect">
                    <option value="">Tahun</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari berdasarkan judul...">
            </div>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <tr data-tahun="2023" data-judul="Aset dan Inventarisasi Barang Tahun 2023">
                    <td>1</td>
                    <td>Aset dan Inventarisasi Barang Tahun 2023</td>
                    <td class="button-group3">
                        <a href="#" class="btn-custom btn-custom-download-1"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn-custom btn-custom-read-2"><i class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"><i class="fa fa-link"></i> Link</a>
                    </td>
                </tr>
                <tr data-tahun="2022" data-judul="Aset dan Inventarisasi Barang Tahun 2022">
                    <td>2</td>
                    <td>Aset dan Inventarisasi Barang Tahun 2022</td>
                    <td class="button-group3">
                        <a href="#" class="btn-custom btn-custom-download-1"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn-custom btn-custom-read-2"><i class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"><i class="fa fa-link"></i> Link</a>
                    </td>
                </tr>
                <tr data-tahun="2021" data-judul="Aset dan Inventarisasi Barang Tahun 2021">
                    <td>3</td>
                    <td>Aset dan Inventarisasi Barang Tahun 2021</td>
                    <td class="button-group3">
                        <a href="#" class="btn-custom btn-custom-download-1"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn-custom btn-custom-read-2"><i class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"><i class="fa fa-link"></i> Link</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById('tahunSelect').addEventListener('change', filterTable);
        document.getElementById('searchInput').addEventListener('keyup', filterTable);

        function filterTable() {
            var searchValue = document.getElementById('searchInput').value.toLowerCase();
            var selectedTahun = document.getElementById('tahunSelect').value;
            var tableRows = document.querySelectorAll('#tableBody tr');

            tableRows.forEach(function(row) {
                var judul = row.getAttribute('data-judul').toLowerCase();
                var tahun = row.getAttribute('data-tahun');

                // Filter berdasarkan judul dan tahun
                var isTitleMatch = judul.includes(searchValue);
                var isTahunMatch = !selectedTahun || tahun === selectedTahun;

                if (isTitleMatch && isTahunMatch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
</body>
