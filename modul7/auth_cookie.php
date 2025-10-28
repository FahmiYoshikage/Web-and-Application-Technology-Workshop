<?php
// auth_cookie.php
include 'koneksi.php'; // Sertakan file koneksi

// Set expiration time (misal: 1 jam dari sekarang)
$expiry = time() + 3600; // 3600 detik = 1 jam

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email FROM login WHERE email = '$email' AND password = '$password'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        // Login Berhasil
        // Simpan email ke dalam cookie
        setcookie('logged_in_email', $email, $expiry, "/");
        
        // Alihkan ke halaman pemesanan
        header('Location: makanan_cookie.php');
        exit;
    } else {
        // Login Gagal
        // Buat cookie yang berisi pesan error
        setcookie('login_error', "Account anda belum terdaftar di web kami.", $expiry, "/");
        
        // Alihkan kembali ke halaman login
        header('Location: login_cookie.php');
        exit;
    }
} else {
    // Jika diakses tanpa POST, alihkan ke login
    header('Location: login_cookie.php');
    exit;
}
?>