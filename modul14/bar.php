<?php
/*
 * File: batang.php
 * REVISI: Menggunakan mysqli
 */
include "koneksi.php"; // (File koneksi mysqli)
$menu = array();
$sql = "SELECT * FROM grafik";

// Menggunakan $koneksi->query()
$qry = $koneksi->query($sql);

// Menggunakan $qry->fetch_assoc()
while ($row = $qry->fetch_assoc()) {
    $menu[] = $row['jumlah'];
}
$aray = join(",", $menu);

$koneksi->close(); 
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Grafik Mahasiswa Telkom</title>
    
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
    <script type="text/javascript" src="js/exporting.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function() {
        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container', 
                zoomType: 'xy' 
            },
            title: {
                text: 'Grafik Jumlah Mahasiswa' 
            },
            subtitle: {
                text: 'by: lab dsp 007' 
            },
            xAxis: [{
                categories: ['2010', '2011', '2012', '2013', '2014'] 
            }],
            yAxis: { 
                title: {
                    text: 'Jumlah Mahasiswa' 
                }
            },
            series: [{
                name: 'Jumlah Mahasiswa',
                /* Tipe diubah menjadi 'column' untuk grafik batang */
                type: 'bar', 
                yAxis: 0,
                data: [<?php echo $aray ?>] 
            }]
        });
    });
    </script>
    
</head>
<body>
    <div id="container" style="width: 950px; height: 500px; margin: auto"></div>
    <br>
    <center>
        <a href="input_mhs.html">Kembali</a>
    </center>
</body>
</html>