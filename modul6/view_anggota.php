<?php
include ("koneksi_database.php");
$hasil = mysqli_query($conn, "select * from biodata");
echo "<b>DAFTAR ANGGOTA<br>";
echo "<table border=1 cellpadding=2 cellspacing=2>";
echo "<tr><td>Nama Anggota</td><td>Foto</td></tr>";
while ($baris = mysqli_fetch_array($hasil)){
    echo "<tr><td>" . $baris[1] . "</td><td><img src=\"" . $baris[2] . "\"></td></tr>";
}
echo "</table>";
mysqli_close ($conn);
?>