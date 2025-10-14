<?php
include 'koneksi_database.php';

$id = $_POST['id_bukutamu'] ?? '';
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$komentar = $_POST['komentar'] ?? '';

if (empty($id)) {
    die('ID tidak ditemukan.');
}

// prepared statement untuk keamanan
$stmt = mysqli_prepare($conn, "UPDATE bukutamu SET nama = ?, email = ?, komentar = ? WHERE id_bukutamu = ?");
if (!$stmt) {
    die("Prepare failed: " . mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "sssi", $nama, $email, $komentar, $id);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) >= 0) {
    // redirect kembali ke daftar
    header("Location: data_bukutamu.php");
    exit;
} else {
    echo "Update gagal: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>