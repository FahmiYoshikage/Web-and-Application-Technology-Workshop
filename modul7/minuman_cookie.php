<?php
// minuman_cookie.php

// Cek autentikasi
if (!isset($_COOKIE['logged_in_email'])) {
    header('Location: login_cookie.php');
    exit;
}

$login_email = $_COOKIE['logged_in_email'];
$login_user = explode('@', $login_email)[0];
$expiry = time() + 3600; // 1 jam

$makanan_dipilih_display = '';

// Jika data makanan dikirim dari form sebelumnya
if (isset($_POST['makanan'])) {
    $makanan_string = implode(', ', $_POST['makanan']);
    // Simpan makanan ke cookie
    setcookie('makanan_dipilih', $makanan_string, $expiry, "/");
    // Siapkan variabel untuk ditampilkan langsung di halaman ini
    $makanan_dipilih_display = $makanan_string;
} 
// Jika halaman ini diakses untuk proses minuman
else if (isset($_POST['minuman'])) {
    // Simpan minuman yang dipilih ke cookie
    setcookie('minuman_dipilih', $_POST['minuman'], $expiry, "/");
    
    // Alihkan ke halaman konfirmasi
    header('Location: konfirmasi_cookie.php');
    exit;
}

// Jika $makanan_dipilih_display masih kosong (krn tdk submit makanan),
// coba baca dari cookie yang sudah ada
if (empty($makanan_dipilih_display)) {
     $makanan_dipilih_display = $_COOKIE['makanan_dipilih'] ?? 'Belum memilih makanan';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Minuman (Cookie)</title>
</head>
<body>
<table border="1" width="500">
    <tr>
        <td width="100"><a href="logout_cookie.php">logout</a></td>
        <td>
            <h1>HOMEPAGE Fahmi</h1>
            Login anda: <?php echo htmlspecialchars($login_user); ?> 
            <br>
            Makanan yang dipesan: <?php echo htmlspecialchars($makanan_dipilih_display); ?>
            <hr>
            <form method="post" action="minuman_cookie.php">
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