<?php
// konfirmasi.php
session_start();

// Cek autentikasi
if (!isset($_SESSION['logged_in_email'])) {
    header('Location: login.php');
    exit;
}

$login_email = $_SESSION['logged_in_email'];
$login_user = explode('@', $login_email)[0];
$makanan = $_SESSION['makanan_dipilih'] ?? 'Tidak ada';
$minuman = $_SESSION['minuman_dipilih'] ?? 'Tidak ada';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pesanan</title>
</head>
<body>
<table border="1" width="500">
    <tr>
        <td width="100"><a href="logout.php">logout</a> </td>
        <td>
            <h1>HOMEPAGE PEMESANAN</h1>
            Login anda: <?php echo htmlspecialchars($login_user); ?> <br>
            Makanan yang dipesan: <?php echo htmlspecialchars($makanan); ?>  <br>
            Minuman yang dipesan: <?php echo htmlspecialchars($minuman); ?> 
            <hr>
            Terima kasih atas kunjungan anda 
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">Created by Fahmi Ilham Bagaskara</td>
    </tr>
</table>
</body>
</html>