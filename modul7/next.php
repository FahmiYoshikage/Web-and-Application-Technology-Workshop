<?php
session_start();
?>
<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Halaman Kedua</title>
</head>
<body>
	<h2>Anda memasuki halaman kedua</h2>
	<?php
	// Tampilkan session dengan sanitasi
	$nama = isset($_SESSION['nama']) ? htmlspecialchars($_SESSION['nama'], ENT_QUOTES, 'UTF-8') : '(tidak tersedia)';
	$umur = isset($_SESSION['umur']) ? (int)$_SESSION['umur'] : 0;
	$email = isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8') : '(tidak tersedia)';

	echo "Nama anda: " . $nama . "<br>";
	echo "Umur Anda saat ini adalah: " . $umur . " tahun<br>";
	echo "Alamat email Anda adalah: " . $email . "<br>";
	?>

	<p><a href="data.php">Klik disini</a> untuk menuju ke halaman awal.</p>

	<?php
	// Hanya hentikan session jika memang ingin logout. Jangan panggil session_destroy() di sini
	// session_destroy();
	?>
</body>
</html>