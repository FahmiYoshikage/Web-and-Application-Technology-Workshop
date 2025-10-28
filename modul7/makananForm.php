<?php
// login.php
session_start();
// Tambahkan header untuk mencegah caching sehingga tombol Back tidak menampilkan halaman yang di-cache
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies
// Jika sudah login, alihkan ke halaman utama
if (isset($_SESSION['logged_in_email'])) {
header('Location: proses_makanan.php'); // Langsung ke pemesanan
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login User</title>
</head>
<body>
<h1>PROSES LOGIN</h1>
 <form method="post" action="makananAuth.php">
Email: <input type="text" name="email" required><br> 
Password: <input type="password" name="password" required><br>
<input type="submit" value="Login">
</form>
<?php
if (isset($_SESSION['login_error'])) {
// Tampilkan pesan error 
echo "<p style='color:red;'>".$_SESSION['login_error']."</p>";
unset($_SESSION['login_error']); // Hapus pesan error setelah ditampilkan
}
?>
</body>
</html>