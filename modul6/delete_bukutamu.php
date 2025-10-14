<?php
include "koneksi_database.php";
 //ges the value from Form update
$id_bukutamu = $_GET['id_bukutamu'];
 //quezy for delete data in database
$query = "delete from bukutamu where id_bukutamu = '$id_bukutamu'";
$hasil = mysqli_query($conn, $query);
 //see the result
if ($hasil) {
    include "data_bukutamu.php";
    echo "<h4> Delete data berhasil</h4>";
}
?>