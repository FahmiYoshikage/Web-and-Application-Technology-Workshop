<?php
include 'koneksi_database.php';
$id_bukutamu = $_GET['id_bukutamu']; // get the no which will updated
$query = "SELECT * FROM bukutamu WHERE id_bukutamu = '$id_bukutamu'"; // get the data that will be updated
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>

<form method="post" action="prosesupdate_bukutamu.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
<tr>
<td height="21" colspan="3"><strong>Form Update</strong></td>
</tr>

<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
</tr>

<tr>
<td>Email</td>
<td>:</td>
<td><textarea name="email"><?php echo $data['email']; ?></textarea></td>
</tr>

<tr>
<td>Komentar</td>
<td>:</td>
<td><textarea name="komentar"><?php echo $data['komentar']; ?></textarea></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="hidden" name="id_bukutamu" value="<?php echo $data['id_bukutamu']; ?>">
<input type="SUBMIT" name="SUBMIT" value="Update"></td>
</tr>
</table>
</form>