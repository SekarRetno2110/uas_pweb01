<?php
$host = "localhost"; // Sesuaikan dengan host database Anda
$user = "root"; // Sesuaikan dengan username database Anda
$pass = ""; // Sesuaikan dengan password database Anda
$dbname = "tokosepatu"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
