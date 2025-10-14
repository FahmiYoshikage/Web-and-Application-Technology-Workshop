<?php
    include("koneksi_database.php");

    $query = "SELECT * FROM bukutamu";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    echo '<table border="1" cellpadding="8" cellspacing="0">';
    echo '<thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
                <th>Aksi</th>
            </tr>
          </thead>';
    echo '<tbody>';

    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        // pastikan nama primary key kolom: id_bukutamu (sesuaikan jika berbeda)
        $id = isset($row['id_bukutamu']) ? urlencode($row['id_bukutamu']) : '';

        $nama = htmlspecialchars($row['nama'] ?? '', ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($row['email'] ?? '', ENT_QUOTES, 'UTF-8');
        $komentar = nl2br(htmlspecialchars($row['komentar'] ?? '', ENT_QUOTES, 'UTF-8'));

        echo '<tr>';
        echo "<td>{$no}</td>";
        echo "<td>{$nama}</td>";
        echo "<td>{$email}</td>";
        echo "<td>{$komentar}</td>";
        echo '<td>';
        echo "<a href=\"update_bukutamu.php?id_bukutamu={$id}\">Edit</a> | ";
        echo "<a href=\"delete_bukutamu.php?id_bukutamu={$id}\" onclick=\"return confirm('Hapus data ini?')\">Hapus</a>";
        echo '</td>';
        echo '</tr>';

        $no++;
    }

    echo '</tbody></table>';

    mysqli_free_result($result);
    mysqli_close($conn);
?>

