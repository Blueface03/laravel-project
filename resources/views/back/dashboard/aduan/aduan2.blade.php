@include('back.layout.stylesheet');
@include('back.layout.navbar')
<header class="header2" style="padding-top: 100px">
    <h1>Aduan</h1>
    <h2>Formulir Aduan</h2>
    <div class="divider2"></div>
</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aduan - Complaint System</title>
    <style>
        /* Container for both complaint list and details */
        .container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        /* Left Section: Complaint List */
        .complaint-list {
            width: 40%;
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

        /* Right Section: Form Aduan (Complaint Form) */
        .complaint-detail {
            width: 55%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none; /* Initially hidden */
        }

        .complaint-detail h2 {
            font-size: 24px;
            color: #000;
        }

        .complaint-card {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.6;
        }

        .response-card {
            margin-top: 20px;
            background: #f7f8fc;
            border-left: 4px solid #2979ff;
            padding: 15px;
            font-size: 16px;
        }

        .response-card p {
            font-size: 14px;
        }

        .complaint-header, .response-header {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #777;
        }

        .complaint-user, .response-user {
            font-weight: bold;
        }

        .complaint-date {
            color: #555;
        }

        /* Button styles */
        .submit-btn {
            padding: 12px;
            background-color: #d9534f;
            color: white;
            font-size: 16px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #c9302c;
        }

        /* Responsive design */
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .complaint-list, .complaint-detail {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Left Section: Complaint List -->
        <div class="complaint-list">
            <input type="text" placeholder="Cari berdasarkan subjek..." class="search-bar">
            <h3>Daftar Aduan</h3>
            <hr>
            <ul>
                <li onclick="window.location.href='complaintDetail.html?title=Penyelesaian%20Jual%20Beli%20Rumah&date=Selasa,%2021%20Januari%202025%20-%2010:14:54&user=Kalisal&content=Lore...%20riendiendis%'">
                    <a href="#">Penyelesaian Jual Beli Rumah</a>
                    <div class="date">📅 Selasa, 21 Januari 2025</div>
                    <div class="user">👤 Kalisal</div>
                </li>
                <li onclick="window.location.href='complaintDetail.html?title=Imunisasi%20Catin%20Wanita&date=Jum’at,%2015%20November%202024%20-%2014:29:46&user=Rio%20Handoko&content=Izin%20bertanya...%20dpt%20tindakan%'">
                    <a href="#">Imunisasi Catin Wanita</a>
                    <div class="date">📅 Jum’at, 15 November 2024</div>
                    <div class="user">👤 Rio Handoko</div>
                </li>
                <li onclick="window.location.href='complaintDetail.html?title=Bakar%20Sampah&date=Sabtu,%2014%20September%202024%20-%2008:04:22&user=NN&content=Mohon%20tindakan...%20segera%20ditindak%'">
                    <a href="#">Bakar Sampah</a>
                    <div class="date">📅 Sabtu, 14 September 2024</div>
                    <div class="user">👤 NN</div>
                </li>
            </ul>
        </div>

        <!-- Right Section: Form Aduan (Complaint Form) -->
        <div class="complaint-detail" id="complaintDetail">
            <h2 id="complaintTitle">Bakar Sampah</h2>
            <div class="complaint-card" id="complaintText">
                <div class="complaint-header">
                    <span class="complaint-user"><strong>NN</strong></span>
                    <span class="complaint-date">📅 Sabtu, 14 September 2024 - 08:04:22</span>
                </div>
                <p>Mohon tindakan nya karena tetangga kanan kiri bakar sampah setiap hari dan sangat berbahaya di musim kemarau yg kering seperti ini. Mohon segera ditindak</p>
            </div>

            <div class="response-card">
                <div class="response-header">
                    <span class="response-user"><strong>ADMINISTRATOR</strong></span>
                    <span class="complaint-date">📅 17 September 2024 - 11:20:38</span>
                </div>
                <p>Yth. Sdr NN, Terima kasih telah menghubungi Dinas Kesehatan DIY terkait aduan tentang pembakaran sampah di lingkungan tersebut. Aduan telah kami teruskan ke Dinas Kesehatan Kabupaten Sleman untuk ditindaklanjuti. Jika dirasa belum ada solusi, kami persilakan untuk menyampaikan ke Puskesmas terdekat atau kelurahan setempat. Demikian, terima kasih.</p>
            </div>

            <button class="submit-btn">Kirim</button>
        </div>
    </div>

    <script>
        // Function to dynamically load complaint details based on URL parameters
        function loadComplaintDetail() {
            const urlParams = new URLSearchParams(window.location.search);
            const title = urlParams.get('title');
            const date = urlParams.get('date');
            const user = urlParams.get('user');
            const content = urlParams.get('content');

            // Set the complaint detail data dynamically
            document.getElementById('complaintTitle').innerText = title;
            document.getElementById('complaintText').innerHTML = `
                <div class="complaint-header">
                    <span class="complaint-user"><strong>${user}</strong></span>
                    <span class="complaint-date">📅 ${date}</span>
                </div>
                <p>${content}</p>
            `;

            // Show the complaint detail section
            document.getElementById('complaintDetail').style.display = 'block';
        }

        // Call function on page load to show the correct complaint detail
        if (window.location.pathname === '/complaintDetail.html') {
            loadComplaintDetail();
        }
    </script>

</body>
</html>


@include('back.layout.footer')

@include('back.layout.scripts')
