<?php
// logout_cookie.php

// Hapus semua cookie dengan mengatur waktu kedaluwarsa di masa lalu
$past = time() - 3600; // 1 jam di masa lalu

setcookie('logged_in_email', '', $past, "/");
setcookie('makanan_dipilih', '', $past, "/");
setcookie('minuman_dipilih', '', $past, "/");
setcookie('login_error', '', $past, "/"); // Hapus cookie error jika ada

// Alihkan kembali ke halaman login 
header('Location: login_cookie.php');
exit;
?>