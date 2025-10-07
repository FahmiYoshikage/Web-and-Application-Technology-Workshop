<html>
    <head>
        <title>Modul 5</title>
    </head>
    <body>
        <h2>
            Koneksi Database MySQL dengan PHP   
        </h2>
        <?php
            $conn=mysqli_connect("localhost","root","","library");
            $pilih_db=mysqli_select_db($conn,"library");
            if($pilih_db){
                echo "OK Connected to Database";
            } else {
                echo "Database Not Connected";
            }
        ?>
    </body>
</html>
