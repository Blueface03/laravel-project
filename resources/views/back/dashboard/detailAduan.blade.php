<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aduan</title>
    <style>
        /* Styling umum untuk detail aduan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            color: #333;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .complaint-detail {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>

    <div class="container">
        <div class="complaint-detail">
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
        </div>
    </div>

    <script>
        // Get the URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const title = urlParams.get('title');
        const date = urlParams.get('date');
        const user = urlParams.get('user');
        const content = urlParams.get('content');

        // Set the complaint details dynamically
        document.getElementById('complaintTitle').innerText = title;
        document.getElementById('complaintText').innerHTML = `
            <div class="complaint-header">
                <span class="complaint-user"><strong>${user}</strong></span>
                <span class="complaint-date">📅 ${date}</span>
            </div>
            <p>${content}</p>
        `;
    </script>

</body>
</html>
