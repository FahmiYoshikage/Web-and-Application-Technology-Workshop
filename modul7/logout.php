<?php
// logout.php
session_start(); // Memulai session

// Hapus semua variabel session
session_unset();

// Hancurkan session [cite: 19, 64, 149]
session_destroy();

// Pastikan browser tidak menggunakan halaman yang di-cache setelah logout
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Alihkan kembali ke halaman login 
header('Location: makananForm.php');
exit;
?>