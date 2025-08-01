<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan PHP</title>
</head>
<body>
    <h1>Daftar Angka 1 sampai 5</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>Ini adalah item ke-$i</li>";
        }
        ?>
    </ul>
</body>
</html>
