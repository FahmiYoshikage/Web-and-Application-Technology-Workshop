<?php
/*
 * File: ling.php
 * REVISI: Menggunakan mysqli
 */
include "koneksi.php"; // (File koneksi mysqli)
$menu_pie = array();
$sql = "SELECT * FROM grafik";

// Menggunakan $koneksi->query()
$qry = $koneksi->query($sql);

// Menggunakan $qry->fetch_assoc()
while ($row = $qry->fetch_assoc()) {
    // Format untuk pie chart: ['Nama Kategori', Nilai]
    $menu_pie[] = "['Tahun " . $row['tahun'] . "', " . $row['jumlah'] . "]";
}
$aray_pie = join(",", $menu_pie);

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
                renderTo: 'container'
            },
            title: {
                text: 'Grafik Persentase Mahasiswa'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                /* Tipe diubah menjadi 'pie' */
                type: 'pie', 
                name: 'Persentase',
                data: [<?php echo $aray_pie ?>]
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