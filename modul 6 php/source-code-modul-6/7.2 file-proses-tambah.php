<?php
include 'koneksi.php';

// Mengambil data dari form
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];

// Query untuk menyisipkan data
$sql = "INSERT INTO karyawan (nama, jabatan, email) VALUES ('$nama', '$jabatan', '$email')";

if ($conn->query($sql) === TRUE) {
    // Arahkan kembali ke halaman utama jika berhasil
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
