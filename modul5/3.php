<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        Akses Tabel Database menggunakan mysql_fetch_array()
    </h2>
    <?php
    $conn=mysqli_connect("localhost","root","") or die("Koneksi Gagal");
    $pilih_db=mysqli_select_db($conn,"library");
    $query="SELECT * FROM category";
    $hasil=mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($hasil)){
        echo "ID Kategori ". $data['category_id']." Dengan Nama Kategori ".$data[1]."<br>";
    }
    ?>
</body>
</html>