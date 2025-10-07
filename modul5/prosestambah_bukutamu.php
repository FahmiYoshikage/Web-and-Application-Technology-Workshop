<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Simpan Buku Tamu</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            animation: slideUp 0.6s ease-out;
            text-align: center;
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

        .success-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            animation: bounce 1s ease-in-out infinite alternate;
        }

        @keyframes bounce {
            from {
                transform: translateY(0px);
            }
            to {
                transform: translateY(-10px);
            }
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2.2rem;
            font-weight: 600;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .result-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #667eea;
        }

        .data-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .data-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .data-label {
            font-weight: 600;
            color: #495057;
            min-width: 120px;
            text-align: left;
            font-size: 1.1rem;
        }

        .data-value {
            flex: 1;
            text-align: left;
            color: #212529;
            font-size: 1rem;
            word-wrap: break-word;
        }

        .status-message {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin: 25px 0;
            font-size: 1.2rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }

        .error-message {
            background: linear-gradient(45deg, #dc3545, #fd7e14);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin: 25px 0;
            font-size: 1.2rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
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
            margin: 20px 10px;
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

        .emoji {
            margin-right: 8px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 25px;
                margin: 10px;
            }

            h1 {
                font-size: 1.8rem;
            }

            .data-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .data-label {
                min-width: auto;
                margin-bottom: 5px;
            }

            .btn {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Ganti mysql_connect dengan mysqli_connect
        $conn = mysqli_connect("localhost", "root", "", "library");
        if (!$conn) {
            echo '<div class="error-message">';
            echo '<span class="emoji">❌</span>Koneksi gagal: ' . mysqli_connect_error();
            echo '</div>';
        } else {
            // Escape input untuk keamanan
            $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $komentar = mysqli_real_escape_string($conn, $_POST["komentar"]);

            // Query insert
            $sqlstr = "INSERT INTO bukutamu(nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
            $hasil = mysqli_query($conn, $sqlstr);

            if ($hasil) {
                echo '<div class="success-icon">✅</div>';
                echo '<h1>Data Berhasil Disimpan!</h1>';
                
                echo '<div class="result-card">';
                echo '<div class="data-item">';
                echo '<div class="data-label"><span class="emoji">👤</span>Nama:</div>';
                echo '<div class="data-value">' . htmlspecialchars($nama) . '</div>';
                echo '</div>';
                
                echo '<div class="data-item">';
                echo '<div class="data-label"><span class="emoji">📧</span>Email:</div>';
                echo '<div class="data-value">' . htmlspecialchars($email) . '</div>';
                echo '</div>';
                
                echo '<div class="data-item">';
                echo '<div class="data-label"><span class="emoji">💭</span>Komentar:</div>';
                echo '<div class="data-value">' . htmlspecialchars($komentar) . '</div>';
                echo '</div>';
                echo '</div>';
                
                echo '<div class="status-message">';
                echo '<span class="emoji">🎉</span>Terima kasih! Data buku tamu Anda telah berhasil disimpan.';
                echo '</div>';
            } else {
                echo '<div class="success-icon">❌</div>';
                echo '<h1>Terjadi Kesalahan!</h1>';
                echo '<div class="error-message">';
                echo '<span class="emoji">⚠️</span>Error: ' . mysqli_error($conn);
                echo '</div>';
            }

            mysqli_close($conn);
        }
        ?>
        
        <div style="margin-top: 30px;">
            <a href="bukutamu.html" class="btn">
                <span class="emoji">📝</span>Isi Buku Tamu Lagi
            </a>
            <a href="view_bukutamu.php" class="btn btn-secondary">
                <span class="emoji">👁️</span>Lihat Semua Data
            </a>
        </div>
    </div>
</body>
</html>