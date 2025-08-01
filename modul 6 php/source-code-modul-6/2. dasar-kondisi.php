<!DOCTYPE html>
<html>
<head>
    <title>Latihan Kondisi PHP</title>
</head>
<body>
    <h1>Cek Nilai</h1>
    <?php
    $nilai = 85;
    echo "<p>Nilai Anda: $nilai</p>";

    if ($nilai >= 75) {
        echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
    } else {
        echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>";
    }
    ?>
</body>
</html>
