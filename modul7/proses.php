<?php
session_start();

// Ambil dan sanitasi input dengan fallback aman
$nama  = trim(filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING) ?? '');
$umur  = (int) filter_input(INPUT_POST, 'umur', FILTER_VALIDATE_INT, ['options' => ['default' => 0]]);
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');

// Simpan ke session
$_SESSION['nama']  = $nama;
$_SESSION['umur']  = $umur;
$_SESSION['email'] = $email;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hasil Form</title>
</head>
<body>
  <h1>Halo <?php echo htmlspecialchars($_SESSION['nama'], ENT_QUOTES, 'UTF-8'); ?></h1>

  <h2>Selamat Datang di Situs Kami</h2>

  <p>
    Umur Anda saat ini adalah <?php echo (int)$_SESSION['umur']; ?> tahun<br>
    Alamat email Anda adalah <?php echo htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8'); ?>
  </p>

  <p>
    <a href="next.php">Klik di sini</a> untuk menuju ke halaman berikut.
  </p>
</body>
</html>