<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Buku Tamu</title>
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
            max-width: 500px;
            width: 100%;
            animation: slideUp 0.6s ease-out;
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
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 600;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 1.1rem;
        }

        select, input[type="text"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
            font-family: inherit;
        }

        select:focus, input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        select {
            cursor: pointer;
        }

        .search-instruction {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #1565c0;
            font-weight: 500;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 15px 25px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: #f8f9fa;
            color: #666;
            border: 2px solid #e1e5e9;
        }

        .btn-secondary:hover {
            background: #e9ecef;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            color: #666;
            text-decoration: none;
        }

        .emoji {
            margin-right: 8px;
        }

        .navigation {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 25px;
                margin: 10px;
            }

            h1 {
                font-size: 2rem;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Cari Data Buku Tamu</h1>
        
        <form action="hasilsearch_bukutamu.php" method="post">
            <div class="form-group">
                <label for="kolom">📂 Pilih Kategori Pencarian</label>
                <select name="kolom" id="kolom" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="nama">👤 Nama</option>
                    <option value="email">📧 Email</option>
                    <option value="komentar">💭 Komentar</option>
                </select>
            </div>

            <div class="search-instruction">
                <span class="emoji">💡</span>
                <strong>Tips:</strong> Masukkan kata kunci yang ingin dicari. Pencarian tidak case-sensitive dan akan mencari kata yang mengandung teks yang Anda masukkan.
            </div>

            <div class="form-group">
                <label for="cari">🔎 Kata Kunci Pencarian</label>
                <input 
                    type="text" 
                    name="cari" 
                    id="cari"
                    placeholder="Masukkan kata kunci..."
                    required
                />
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-primary">
                    <span class="emoji">🔍</span>Cari Sekarang
                </button>
                <button type="reset" class="btn btn-secondary">
                    <span class="emoji">🔄</span>Reset
                </button>
            </div>
        </form>

        <div class="navigation">
            <a href="bukutamu.html" class="btn btn-secondary" style="margin: 5px;">
                <span class="emoji">📝</span>Tambah Data
            </a>
            <a href="view_bukutamu.php" class="btn btn-secondary" style="margin: 5px;">
                <span class="emoji">👁️</span>Lihat Semua
            </a>
        </div>
    </div>
</body>
</html>