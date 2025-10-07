<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Buku Tamu</title>
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

        h1 {
            color: #333;
            font-size: 2.5rem;
            font-weight: 600;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .stats {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 15px 25px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
            margin-bottom: 20px;
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
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
            animation: slideUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .data-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
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

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f3f4;
        }

        .card-number {
            background: linear-gradient(45deg, #667eea, #764ba2);
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

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
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
            <h1>📚 Data Buku Tamu</h1>
            
            <?php
            $conn = mysqli_connect("localhost", "root", "", "library");
            if (!$conn) {
                echo '<div class="error-message">Koneksi Gagal: ' . mysqli_connect_error() . '</div>';
                exit;
            }
            
            $query = "SELECT * FROM bukutamu ORDER BY id_bukutamu DESC";
            $hasil = mysqli_query($conn, $query);
            $jumlah = mysqli_num_rows($hasil);
            
            echo '<div class="stats">';
            echo '<span class="emoji">📊</span>Total Data: ' . $jumlah . ' Entri';
            echo '</div>';
            ?>
        </div>

        <?php if ($jumlah > 0): ?>
            <div class="data-grid">
                <?php
                $a = 1;
                while ($data = mysqli_fetch_row($hasil)) {
                    echo '<div class="data-card" style="animation-delay: ' . ($a * 0.1) . 's;">';
                    echo '<div class="card-header">';
                    echo '<div class="card-number">' . $a . '</div>';
                    echo '<div class="card-title">ID: ' . $data[0] . '</div>';
                    echo '</div>';
                    
                    echo '<div class="data-item">';
                    echo '<div class="data-label"><span class="emoji">👤</span>Nama:</div>';
                    echo '<div class="data-value">' . htmlspecialchars($data[1]) . '</div>';
                    echo '</div>';
                    
                    echo '<div class="data-item">';
                    echo '<div class="data-label"><span class="emoji">📧</span>Email:</div>';
                    echo '<div class="data-value">' . htmlspecialchars($data[2]) . '</div>';
                    echo '</div>';
                    
                    echo '<div class="data-item">';
                    echo '<div class="data-label"><span class="emoji">💭</span>Komentar:</div>';
                    echo '<div class="data-value">' . htmlspecialchars($data[3]) . '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                    $a++;
                }
                mysqli_close($conn);
                ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <h3>📭 Belum Ada Data</h3>
                <p>Belum ada data buku tamu yang tersimpan.</p>
            </div>
        <?php endif; ?>

        <div class="navigation">
            <a href="bukutamu.html" class="btn">
                <span class="emoji">📝</span>Tambah Data Baru
            </a>
            <a href="search_bukutamu.php" class="btn btn-secondary">
                <span class="emoji">🔍</span>Cari Data
            </a>
        </div>
    </div>
</body>
</html>