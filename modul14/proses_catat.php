<?php
/*
 * File: proses_catat.php
 * REVISI: Menggunakan mysqli dan Prepared Statements (Aman)
 */
 
// 1. Sertakan koneksi mysqli baru
include "koneksi.php"; 

// 2. Ambil data dari form
$jumlah = $_POST['jumlah'];
$tahun = $_POST['tahun'];

// 3. Siapkan kueri (gunakan ? sebagai placeholder)
$stmt = $koneksi->prepare("INSERT INTO grafik (tahun, jumlah) VALUES (?, ?)");

// 4. Bind parameter ke placeholder
// "ii" berarti kedua variabel adalah Integer (integer, integer)
$stmt->bind_param("ii", $tahun, $jumlah);

// 5. Eksekusi kueri
if ($stmt->execute()) {
    print '<script>alert("Data berhasil Tersimpan");</script>';
    print '<meta http-equiv="refresh" content="0;url=input_mhs.html" />';
} else {
    // Tampilkan error jika gagal
    print '<script>alert("Data Gagal Tersimpan: ' . $koneksi->error . '");</script>';
    print '<meta http-equiv="refresh" content="0;url=input_mhs.html" />';
}

// 6. Tutup statement dan koneksi
$stmt->close();
$koneksi->close();
?>