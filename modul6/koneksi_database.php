<?php
    $conn = mysqli_connect("localhost", "root", "",) or die("Koneksi ke database gagal: " . mysqli_connect_error());
    mysqli_select_db($conn, "library") or die("Database tidak ditemukan: " . mysqli_error($conn));
?>