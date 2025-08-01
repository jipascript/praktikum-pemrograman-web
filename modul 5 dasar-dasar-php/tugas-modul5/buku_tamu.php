<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        /* Nana, ini adalah CSS internal sederhana untuk mempercantik tampilan.
           Kamu bisa kembangkan lebih lanjut dengan Bootstrap atau CSS eksternal
           sesuai keinginanmu agar lebih menarik! */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 20px); /* Mengurangi padding */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Penting agar padding tidak menambah lebar */
        }
        textarea {
            resize: vertical; /* Memungkinkan pengguna mengubah ukuran tinggi textarea */
            min-height: 100px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: #dc3545;
            margin-top: 10px;
            font-weight: bold;
        }
        .success-message {
            color: #28a745;
            margin-top: 10px;
            font-weight: bold;
        }
        .data-display {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            border: 1px solid #ced4da;
        }
        .data-display p {
            margin: 5px 0;
            color: #333;
        }
        .data-display strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header: Judul Website -->
        <h1>Buku Tamu Digital STITEK Bontang</h1>

        <?php
        // Nana, di sini kita akan mulai dengan logika PHP-nya.
        // Kita akan menggunakan variabel untuk menyimpan pesan kesalahan atau sukses.
        $nama_lengkap = $email = $pesan = "";
        $error_message = "";
        $success_message = "";
        $display_data = false; // Flag untuk menentukan apakah data harus ditampilkan

        // Fungsionalitas 1 & 2: Halaman ini memproses formnya sendiri (self-processing form)
        // dan menggunakan metode POST.
        // Kita cek apakah form sudah disubmit (yaitu, apakah ada data POST yang dikirim).
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Fungsionalitas 3: Validasi sederhana di sisi server.
            // Pastikan tidak ada kolom input yang kosong.

            // Mengambil data dari form dan membersihkannya dengan htmlspecialchars()
            // Ini penting untuk mencegah serangan XSS (Cross-Site Scripting) sederhana.
            // htmlspecialchars() akan mengubah karakter khusus HTML menjadi entitas HTML.
            $nama_lengkap = htmlspecialchars(trim($_POST["nama_lengkap"] ?? '')); // Menggunakan ?? untuk PHP 7+
            $email = htmlspecialchars(trim($_POST["email"] ?? ''));
            $pesan = htmlspecialchars(trim($_POST["pesan"] ?? ''));

            // Validasi: Cek apakah ada kolom yang kosong
            if (empty($nama_lengkap)) {
                $error_message = "Nama Lengkap tidak boleh kosong.";
            } elseif (empty($email)) {
                $error_message = "Alamat Email tidak boleh kosong.";
            } elseif (empty($pesan)) {
                $error_message = "Pesan/Komentar tidak boleh kosong.";
            } else {
                // Jika semua data valid, tampilkan pesan sukses dan set flag untuk menampilkan data.
                $success_message = "Terima kasih, pesan Anda telah terkirim!";
                $display_data = true;
            }
        }
        ?>

        <!-- Form Input -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- Nana, perhatikan penggunaan htmlspecialchars($_SERVER["PHP_SELF"]) di action.
                 Ini memastikan form akan disubmit kembali ke halaman yang sama,
                 dan juga aman dari potensi serangan XSS. -->

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" placeholder="Masukkan nama lengkap Anda">
                <!-- Nana, value="<?php echo $nama_lengkap; ?>" ini berguna agar input tidak hilang
                     saat ada error validasi. Pengguna tidak perlu mengetik ulang. -->
            </div>

            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Masukkan alamat email Anda">
            </div>

            <div class="form-group">
                <label for="pesan">Pesan/Komentar:</label>
                <textarea id="pesan" name="pesan" placeholder="Tulis pesan atau komentar Anda"><?php echo $pesan; ?></textarea>
            </div>

            <button type="submit">Kirim Pesan</button>
        </form>

        <?php
        // Menampilkan pesan kesalahan jika ada
        if (!empty($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }

        // Area Tampilan Data: Menampilkan pesan konfirmasi dan data yang baru saja dikirim
        // Fungsionalitas 4: Jika semua data valid, tampilkan data yang dikirim dengan format yang rapi.
        if ($display_data) {
            echo '<p class="success-message">' . $success_message . '</p>';
            echo '<div class="data-display">';
            echo '<h2>Data Pesan Anda:</h2>';
            echo '<p><strong>Nama Lengkap:</strong> ' . $nama_lengkap . '</p>';
            echo '<p><strong>Alamat Email:</strong> ' . $email . '</p>';
            echo '<p><strong>Pesan/Komentar:</strong> ' . nl2br($pesan) . '</p>'; // nl2br untuk menjaga baris baru di textarea
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
