@include('back.layout.stylesheet')
@include('back.layout.navbar')
@include('back.layout.headproduk',['title' => 'Kumpulan Produk Hukum'])
    <div class="container mt-5">
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
                <tr data-tahun="2023" data-judul="Judul">
                    <td>1</td>
                    <td>Judul</td>
                    <td class="button-group3">
                        <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i
                                class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"
                            onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fa fa-link"></i>
                            Link</a>
                    </td>
                </tr>
                <tr data-tahun="2022" data-judul="judul">
                    <td>2</td>
                    <td>judul</td>
                    <td class="button-group3">
                        <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i
                                class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"
                            onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fa fa-link"></i>
                            Link</a>
                    </td>
                </tr>
                <tr data-tahun="2021" data-judul="Judul">
                    <td>3</td>
                    <td>Judul</td>
                    <td class="button-group3">
                        <a data-bs-toggle="modal" href="#portfolioModal1" class="btn-custom btn-custom-read-2"><i
                                class="fa fa-book"></i> Baca</a>
                        <a href="#" class="btn-custom btn-custom-link-3"
                            onclick="copyLink('{{ asset('back/assets/pdf/' . 'cth.pdf') }}')"><i class="fa fa-link"></i>
                            Link</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@include('back.layout.footer')
@include('back.layout.scripts')