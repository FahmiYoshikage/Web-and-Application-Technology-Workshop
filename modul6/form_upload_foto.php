<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Registrasi</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="proses_upload_foto.php">
<input type="hidden" name="MAX_FILE_SIZE" value="10000">
<table>
<tr><td>Nama :</td><td><input type="text" name="nama" size="25" maxlength="50"></td></tr>
<tr><td>Pilih File :</td><td><input type="file" name="file" size="30"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Upload"></td></tr>
</table>
</form>
</body>
</html>