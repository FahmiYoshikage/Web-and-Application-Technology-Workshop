<?php
// auth.php
session_start(); // Memulai session [cite: 105, 136]
include 'koneksi.php'; // Sertakan file koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencocokkan email dan password [cite: 36]
    // PENTING: Untuk keamanan yang lebih baik, gunakan prepared statement
    $sql = "SELECT email FROM login WHERE email = '$email' AND password = '$password'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        // Login Berhasil [cite: 37]
        // Simpan email ke dalam session [cite: 166, 167]
        $_SESSION['logged_in_email'] = $email;
        
        // Alihkan ke halaman pemesanan (header) [cite: 165]
        header('Location: proses_makanan.php');
        exit;
    } else {
        // Login Gagal [cite: 38]
        $_SESSION['login_error'] = "Account anda belum terdaftar di web kami."; //[cite: 164]
        // Alihkan kembali ke halaman login (header)
        header('Location: makananAuth.php');
        exit;
    }
} else {
    // Jika diakses tanpa POST, alihkan ke login
    header('Location: makananAuth.php');
    exit;
}
?>