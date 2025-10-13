<?php
// Koneksi ke database menggunakan MySQLi
$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan jika Anda punya password
$dbname = "library";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Eksekusi query
$query = "SELECT * FROM bukutamu";
$hasil = mysqli_query($conn, $query);

// Hitung jumlah baris
$jumlah = mysqli_num_rows($hasil);

echo "Daftar Pengunjung";
echo "<br>";
echo "Jumlah pengunjung : " . $jumlah;

$a = 1;
// Ambil data baris per baris
while($baris = mysqli_fetch_array($hasil, MYSQLI_NUM))
{
    echo "<br>";
    echo "No : ";
    echo $a;
    echo "<br>";
    echo "Nama : ";
    echo $baris[1]; // Mengakses berdasarkan indeks numerik
    echo "<br>";
    echo "Email : ";
    echo $baris[2];
    echo "<br>";
    echo "Komentar : ";
    echo $baris[3];
    $a++;
}

// Tutup koneksi
mysqli_close($conn);
?>