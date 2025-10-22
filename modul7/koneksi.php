<?php
// koneksi.php
$host = "localhost"; // Ganti jika berbeda
$user = "root";      // Ganti dengan username database Anda
$pass = "";          // Ganti dengan password database Anda
$db = "pens";        // Nama database Anda [cite: 157]

// Buat koneksi
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
//echo "Koneksi berhasil"; // Hapus setelah testing
?>