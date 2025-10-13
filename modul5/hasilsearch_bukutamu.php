<?php
$kolom=$_POST['kolom' ];
$cari=$_POST['cari' ];
$conn = mysqli_connect("localhost", "root", "", "library");
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
}
// **FIXED:** Added $, corrected 'were' to 'WHERE', used correct $cari, added wildcards (%)
$hasil = mysqli_query($conn, "SELECT * FROM bukutamu WHERE $kolom LIKE '%$cari%'");
$jumlah = mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while ($baris = mysqli_fetch_array($hasil)) { // **FIXED:** Added opening brace {
echo "Nama : ";
echo $baris[1];
echo "<br>";
echo "Email : ";
echo $baris[2];
echo "<br>";
echo "Komentar :";
echo $baris[3];
echo "<br>"; // Added a line break for better output separation
} // **FIXED:** Added closing brace }
?>
