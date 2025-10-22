<?php
// proses_makanan.php
session_start(); // Memulai session

// Cek autentikasi [cite: 37]
if (!isset($_SESSION['logged_in_email'])) {
    header('Location: login.php');
    exit;
}

$login_email = $_SESSION['logged_in_email'];
$login_user = explode('@', $login_email)[0]; // Ambil username (misal 'fakhri')

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Makanan</title>
</head>
<body>
<table border="1" width="500">
    <tr>
        <td width="100"><a href="logout.php">logout</a> </td>
        <td>
            <h1>HOMEPAGE PEMESANAN</h1>
            Login anda: <?php echo htmlspecialchars($login_user); ?>
            <hr>
            <form method="post" action="proses_minuman.php">
                JENIS MAKANAN: 
                <br>
                <input type="checkbox" name="makanan[]" value="Soto Madura"> Soto Madura 
                <br>
                <input type="checkbox" name="makanan[]" value="Rawon Setan"> Rawon Setan 
                <br><br>
                <input type="submit" value="proses"> 
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">Created by Fahmi Ilham Bagaskara </td>
    </tr>
</table>
</body>
</html>