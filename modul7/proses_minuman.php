<?php
// proses_minuman.php
session_start();

// Cek autentikasi
if (!isset($_SESSION['logged_in_email'])) {
    header('Location: login.php');
    exit;
}

$login_email = $_SESSION['logged_in_email'];
$login_user = explode('@', $login_email)[0];

// Hanya simpan makanan jika data dikirim dari form sebelumnya
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['makanan'])) {
    // Ambil array makanan yang dipilih dan simpan di session [cite: 166, 168]
    $_SESSION['makanan_dipilih'] = implode(', ', $_POST['makanan']);
} 
// Jika halaman ini diakses untuk proses minuman
else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['minuman'])) {
    // Simpan minuman yang dipilih
    $_SESSION['minuman_dipilih'] = $_POST['minuman'];
    
    // Alihkan ke halaman konfirmasi
    header('Location: konfirmasi.php');
    exit;
}

// Data makanan yang dipesan untuk ditampilkan
$makanan_dipilih = $_SESSION['makanan_dipilih'] ?? 'Belum memilih makanan';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Minuman</title>
</head>
<body>
<table border="1" width="500">
    <tr>
        <td width="100"><a href="logout.php">logout</a></td>
        <td>
            <h1>HOMEPAGE FARUQ</h1>
            Login anda: <?php echo htmlspecialchars($login_user); ?> 
            Makanan yang dipesan: <?php echo htmlspecialchars($makanan_dipilih); ?>
            <hr>
            <form method="post" action="proses_minuman.php">
                JENIS MINUMAN: 
                <br>
                <input type="radio" name="minuman" value="Jus Apukat" required> Jus Apukat 
                <br>
                <input type="radio" name="minuman" value="Es Teler" required> Es Teler 
                <br><br>
                <input type="submit" value="proses"> 
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">Created by Fahmi </td>
    </tr>
</table>
</body>
</html>