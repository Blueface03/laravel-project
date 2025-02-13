@include('back.layout.stylesheet');
@include('back.layout.navbar')
<header class="header2" style="padding-top: 100px">
    <h1>Aduan</h1>
    <h2>Formulir Aduan</h2>
    <div class="divider2"></div>
</header>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Aduan</title>
    <style>
        /* Styling umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        /* Daftar Aduan */
        .complaint-list {
            width: 60%;
        }

        .search-bar {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 14px;
        }

        .complaint-list h3 {
            font-size: 22px;
            color: #000;
            margin-top: 20px;
        }

        .complaint-list hr {
            width: 50px;
            height: 3px;
            background-color: #2979ff;
            margin-bottom: 20px;
        }

        .complaint-list ul {
            list-style: none;
            padding: 0;
        }

        .complaint-list li {
            padding: 12px;
            background: #fff;
            margin-bottom: 15px;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .complaint-list a {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .complaint-list .date, .complaint-list .user {
            font-size: 12px;
            color: #777;
        }

        /* Formulir Aduan */
        .form-container {
            width: 35%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            font-size: 24px;
            color: #000;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .submit-btn {
            padding: 12px;
            background-color: #d9534f;
            color: white;
            font-size: 16px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #c9302c;
        }

        /* Responsif */
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .complaint-list, .form-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Left Section: Daftar Aduan -->
        <div class="complaint-list">
            <input type="text" placeholder="Cari berdasarkan subjek..." class="search-bar">
            <h3>Daftar Aduan</h3>
            <hr>
            <ul>
                <li onclick="window.location.href="{{ url('/detailAduan') }}"">
                    <a href="#">Penyelesaian Jual Beli Rumah</a>
                    <div class="date">📅 Selasa, 21 Januari 2025</div>
                    <div class="user">👤 Rima Fatmi Hastuti</div>
                </li>
                <li onclick="window.location.href='detailAduan.html?title=Imunisasi%20Catin%20Wanita&date=Jum’at,%2015%20November%202024%20-%2014:29:46&user=Rio%20Handoko&content=Izin%20bertanya...%20tindakan%'">
                    <a href="#">Imunisasi Catin Wanita</a>
                    <div class="date">📅 Jum’at, 15 November 2024</div>
                    <div class="user">👤 Rio Handoko</div>
                </li>
                <li onclick="window.location.href='detailAduan.html?title=Bakar%20Sampah&date=Sabtu,%2014%20September%202024%20-%2008:04:22&user=NN&content=Mohon%20tindakan...%20ditindak%'">
                    <a href="#">Bakar Sampah</a>
                    <div class="date">📅 Sabtu, 14 September 2024</div>
                    <div class="user">👤 NN</div>
                </li>
            </ul>
            <button onclick="window.location.href='otherComplaints.html'">Lihat Lainnya</button>
        </div>

        <!-- Right Section: Form Aduan (Complaint Form) -->
        <div class="form-container">
            <h2>Formulir Aduan</h2>
            <form action="#">
                <input type="text" placeholder="Nama">
                <input type="email" placeholder="Email">
                <input type="tel" placeholder="No. Telp">
                <textarea placeholder="Alamat"></textarea>
                <input type="text" placeholder="Topik Pembahasan Keluhan">
                <textarea placeholder="Isi Pesan/Keluhan Anda"></textarea>
                <input type="text" placeholder="Masukkan security code">
                <button type="submit" class="submit-btn">Kirim</button>
            </form>
        </div>
    </div>

</body>
</html>


@include('back.layout.footer')

@include('back.layout.scripts')
