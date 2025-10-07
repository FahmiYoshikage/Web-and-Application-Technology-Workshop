<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Buku Tamu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            text-align: center;
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #333;
            font-size: 2.5rem;
            font-weight: 600;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
        }

        .search-info {
            background: linear-gradient(45deg, #17a2b8, #007bff);
            color: white;
            padding: 15px 25px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(23, 162, 184, 0.3);
            margin-bottom: 10px;
        }

        .result-count {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            display: inline-block;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }

        .data-grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        }

        .data-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #17a2b8;
            transition: all 0.3s ease;
            animation: slideUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .data-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f3f4;
        }

        .card-number {
            background: linear-gradient(45deg, #17a2b8, #007bff);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            font-size: 1.1rem;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
        }

        .data-item {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .data-label {
            font-weight: 600;
            color: #495057;
            min-width: 100px;
            margin-right: 15px;
            font-size: 1rem;
        }

        .data-value {
            flex: 1;
            color: #212529;
            word-wrap: break-word;
            line-height: 1.5;
        }

        .highlight {
            background: yellow;
            padding: 2px 4px;
            border-radius: 3px;
            font-weight: bold;
        }

        .emoji {
            margin-right: 8px;
        }

        .navigation {
            text-align: center;
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin: 10px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-secondary {
            background: linear-gradient(45deg, #6c757d, #495057);
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
        }

        .btn-secondary:hover {
            box-shadow: 0 8px 25px rgba(108, 117, 125, 0.4);
        }

        .btn-info {
            background: linear-gradient(45deg, #17a2b8, #007bff);
            box-shadow: 0 4px 15px rgba(23, 162, 184, 0.3);
        }

        .btn-info:hover {
            box-shadow: 0 8px 25px rgba(23, 162, 184, 0.4);
        }

        .empty-state {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 60px 20px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.6s ease-out;
        }

        .empty-state h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #6c757d;
        }

        .empty-state p {
            color: #868e96;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .data-grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 10px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .data-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔍 Hasil Pencarian</h1>
            
            <?php
            $kolom = $_POST['kolom'];
            $cari = $_POST['cari'];
            
            // Sanitize input
            $kolom = htmlspecialchars($kolom);
            $cari_display = htmlspecialchars($cari);
            
            echo '<div class="search-info">';
            echo '<span class="emoji">📂</span>Pencarian di: <strong>' . ucfirst($kolom) . '</strong>';
            echo '</div><br>';
            echo '<div class="search-info">';
            echo '<span class="emoji">🔎</span>Kata kunci: <strong>"' . $cari_display . '"</strong>';
            echo '</div>';
            
            $conn = mysqli_connect("localhost", "root", "", "library");
            if (!$conn) {
                echo '<div style="background: #dc3545; color: white; padding: 20px; border-radius: 12px; margin: 20px 0;">';
                echo '<span class="emoji">❌</span>Connection failed: ' . mysqli_connect_error();
                echo '</div>';
                exit;
            }
            
            // Escape the search term for SQL
            $cari_escaped = mysqli_real_escape_string($conn, $cari);
            
            $hasil = mysqli_query($conn, "SELECT * FROM bukutamu WHERE $kolom LIKE '%$cari_escaped%'");
            $jumlah = mysqli_num_rows($hasil);
            
            echo '<br><div class="result-count">';
            echo '<span class="emoji">📊</span>Ditemukan: ' . $jumlah . ' data';
            echo '</div>';
            ?>
        </div>

        <?php if ($jumlah > 0): ?>
            <div class="data-grid">
                <?php
                $counter = 1;
                while ($baris = mysqli_fetch_array($hasil)) {
                    echo '<div class="data-card" style="animation-delay: ' . ($counter * 0.1) . 's;">';
                    echo '<div class="card-header">';
                    echo '<div class="card-number">' . $counter . '</div>';
                    echo '<div class="card-title">Hasil #' . $counter . '</div>';
                    echo '</div>';
                    
                    // Function to highlight search terms
                    function highlightText($text, $search) {
                        if (empty($search)) return htmlspecialchars($text);
                        $highlighted = str_ireplace($search, '<span class="highlight">' . $search . '</span>', htmlspecialchars($text));
                        return $highlighted;
                    }
                    
                    echo '<div class="data-item">';
                    echo '<div class="data-label"><span class="emoji">👤</span>Nama:</div>';
                    echo '<div class="data-value">' . highlightText($baris[1], $cari) . '</div>';
                    echo '</div>';
                    
                    echo '<div class="data-item">';
                    echo '<div class="data-label"><span class="emoji">📧</span>Email:</div>';
                    echo '<div class="data-value">' . highlightText($baris[2], $cari) . '</div>';
                    echo '</div>';
                    
                    echo '<div class="data-item">';
                    echo '<div class="data-label"><span class="emoji">💭</span>Komentar:</div>';
                    echo '<div class="data-value">' . highlightText($baris[3], $cari) . '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                    $counter++;
                }
                mysqli_close($conn);
                ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <h3>🔍 Tidak Ditemukan</h3>
                <p>Tidak ada data yang sesuai dengan pencarian "<strong><?php echo $cari_display; ?></strong>" di kolom <strong><?php echo ucfirst($kolom); ?></strong>.</p>
                <p>Silakan coba dengan kata kunci yang berbeda.</p>
            </div>
        <?php endif; ?>

        <div class="navigation">
            <a href="search_bukutamu.php" class="btn btn-info">
                <span class="emoji">🔍</span>Cari Lagi
            </a>
            <a href="view_bukutamu.php" class="btn btn-secondary">
                <span class="emoji">👁️</span>Lihat Semua
            </a>
            <a href="bukutamu.html" class="btn">
                <span class="emoji">📝</span>Tambah Data
            </a>
        </div>
    </div>
</body>
</html>