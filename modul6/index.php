<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Modul 6 - Link Penting</title>
    <style>
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial;margin:24px;background:#fff;color:#111}
        h1{font-size:1.25rem;margin-bottom:12px}
        ul{padding-left:18px}
        a{color:#0b66c3;text-decoration:none}
        a:hover{text-decoration:underline}
        .note{color:#555;font-size:0. nine rem;margin-top:8px}
    </style>
</head>
<body>
    <h1>Modul 6 — Link Penting</h1>
    <p>Gunakan link berikut untuk mengakses endpoint / halaman di modul6:</p>
    <ul>
        <li><a href="panggil_koneksi.php">panggil_koneksi.php</a> — cek koneksi DB</li>
        <li><a href="koneksi_database.php">koneksi_database.php</a> — file koneksi (include)</li>
        <li><a href="data_bukutamu.php">data_bukutamu.php</a> — daftar buku tamu</li>
        <li><a href="view_anggota.php">view_anggota.php</a> — view anggota</li>
        <li><a href="update_bukutamu.php?id_bukutamu=1">update_bukutamu.php?id_bukutamu=...</a> — form update (tambahkan id_bukutamu)</li>
        <li><a href="prosesupdate_bukutamu.php">prosesupdate_bukutamu.php</a> — proses update (POST)</li>
        <li><a href="delete_bukutamu.php?id_bukutamu=1">delete_bukutamu.php?id_bukutamu=...</a> — hapus data (tambahkan id_bukutamu)</li>
        <li><a href="form_upload_foto.php">form_upload_foto.php</a> — form upload foto</li>
        <li><a href="prose_upload_foto.php">prose_upload_foto.php</a> — (handler upload, sesuai nama file)</li>
    </ul>

    <p class="note">Catatan: untuk endpoint yang membutuhkan id, tambahkan parameter GET seperti ?id_bukutamu=1. Pastikan Apache + MySQL berjalan (XAMPP).</p>
</body>
</html>