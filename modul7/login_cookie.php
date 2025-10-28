<?php
// login_cookie.php

// Logika untuk menampilkan pesan error
$error_msg = '';
if (isset($_COOKIE['login_error'])) {
    $error_msg = $_COOKIE['login_error'];
    // Hapus cookie error agar tidak muncul lagi setelah di-refresh
    setcookie('login_error', '', time() - 3600, "/");
}

// Jika sudah login (cookie-nya ada), alihkan ke halaman utama
if (isset($_COOKIE['logged_in_email'])) {
    header('Location: makanan_cookie.php'); // Langsung ke pemesanan
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login User (Cookie Version)</title>
</head>
<body>
    <h1>PROSES LOGIN</h1>
    <form method="post" action="auth_cookie.php">
        Email: <input type="text" name="email" required><br> 
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <?php
    // Tampilkan pesan error jika ada
    if (!empty($error_msg)) {
        echo "<p style='color:red;'>".$error_msg."</p>";
    }
    ?>
</body>
</html>