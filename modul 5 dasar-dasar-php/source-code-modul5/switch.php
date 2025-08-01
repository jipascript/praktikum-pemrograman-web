<?php
$level_user = "admin";

switch ($level_user) {
    case "admin":
        echo "Selamat datang, Administrator!";
        break;
    case "editor":
        echo "Selamat datang, Editor!";
        break;
    default:
        echo "Selamat datang, Pengguna!";
}
?>
