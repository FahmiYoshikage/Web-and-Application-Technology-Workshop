<html>
    <head>
        <title>Modul 5</title>
    </head>
    <body>
        <h2>
            Koneksi Gagal Database MySQL dengan PHP
        </h2>
        <?php
            $conn = mysqli_connect("localhost", "root", "");
            if (!$conn) {
                echo "Connection failed: " . mysqli_connect_error();
            } else {
                if (mysqli_select_db($conn, "hello")) {
                    echo "OK Connected to Database";
                } else {
                    echo "Database Not Connected: " . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>
