<?php
// Ganti mysql_connect dengan mysqli_connect
$conn = mysqli_connect("localhost", "root", "", "library");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Escape input untuk keamanan
$nama = mysqli_real_escape_string($conn, $_POST["nama"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$komentar = mysqli_real_escape_string($conn, $_POST["komentar"]);

// Query insert
$sqlstr = "INSERT INTO bukutamu(nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
$hasil = mysqli_query($conn, $sqlstr);

if ($hasil) {
    echo $nama;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $komentar;
    echo "<br>";
    echo "Simpan buku tamu berhasil dilakukan";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
