<?php
// logout.php
session_start(); // Memulai session

// Hapus semua variabel session
session_unset();

// Hancurkan session [cite: 19, 64, 149]
session_destroy();

// Alihkan kembali ke halaman login 
header('Location: makananForm.php');
exit;
?>