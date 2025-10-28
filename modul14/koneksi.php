<?php
/*
 * File: koneksi.php
 * REVISI: Menggunakan ekstensi mysqli (Modern)
 */
$host = 'localhost';
$user = 'root';
$pass = ''; // Kosongkan jika tidak ada password
$db   = 'mahasiswa'; // Nama database Anda

// Membuat koneksi menggunakan Object-Oriented style
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
}
?>