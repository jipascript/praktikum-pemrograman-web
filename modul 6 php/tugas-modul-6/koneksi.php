<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_toko";

// Membuat koneksi ke database
$conn = new mysqli($server, $user, $password, $database);

// Cek koneksi berhasil atau gagal
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
