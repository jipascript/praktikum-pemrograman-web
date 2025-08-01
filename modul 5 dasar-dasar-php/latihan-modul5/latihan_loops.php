<?php
// Foreach untuk array teman
$teman_kelas = ["Alya", "Budi", "Cici", "Dian"];
foreach ($teman_kelas as $nama) {
    echo "Teman: $nama <br>";
}

echo "<br>";

// For loop
for ($i = 1; $i <= 3; $i++) {
    echo "Perulangan ke-$i<br>";
}

echo "<br>";

// While loop
$angka = 3;
while ($angka > 0) {
    echo "Hitung mundur: $angka<br>";
    $angka--;
}
?>
