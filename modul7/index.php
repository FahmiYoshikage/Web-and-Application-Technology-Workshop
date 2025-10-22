<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 7 - Halaman Utama</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
            background: #f5f7fb;
            padding: 20px;
            color: #111827;
            line-height: 1.6;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px;
        }
        
        h1 {
            font-size: 2rem;
            margin-bottom: 8px;
            color: #111827;
            font-weight: 600;
        }
        
        .subtitle {
            color: #6b7280;
            margin-bottom: 32px;
            font-size: 0.95rem;
        }
        
        .section {
            margin-bottom: 32px;
        }
        
        .section h2 {
            font-size: 1.25rem;
            margin-bottom: 16px;
            color: #374151;
            font-weight: 600;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 8px;
        }
        
        .link-list {
            list-style: none;
            display: grid;
            gap: 12px;
        }
        
        .link-item {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            transition: all 0.2s;
        }
        
        .link-item:hover {
            background: #f3f4f6;
            border-color: #d1d5db;
            transform: translateX(4px);
        }
        
        .link-item a {
            display: flex;
            align-items: center;
            padding: 14px 16px;
            text-decoration: none;
            color: #111827;
        }
        
        .link-icon {
            margin-right: 12px;
            font-size: 1.2rem;
        }
        
        .link-title {
            font-weight: 500;
            margin-bottom: 2px;
        }
        
        .link-desc {
            font-size: 0.85rem;
            color: #6b7280;
        }
        
        .note {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 16px;
            border-radius: 6px;
            margin-top: 24px;
            font-size: 0.9rem;
            color: #78350f;
        }
        
        .note strong {
            display: block;
            margin-bottom: 4px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Modul 7 - Session Management</h1>
        <p class="subtitle">Kumpulan halaman untuk mempelajari PHP Session</p>
        
        <!-- Section: Session Demos -->
        <div class="section">
            <h2>🔐 Session Demo Pages</h2>
            <ul class="link-list">
                <li class="link-item">
                    <a href="session1.php">
                        <span class="link-icon">📊</span>
                        <div>
                            <div class="link-title">session1.php</div>
                            <div class="link-desc">Demo dasar session counter - menghitung jumlah kunjungan</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="secondSession.php">
                        <span class="link-icon">🗑️</span>
                        <div>
                            <div class="link-title">secondSession.php</div>
                            <div class="link-desc">Demo session destroy - menghapus session</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Section: Form & Data Processing -->
        <div class="section">
            <h2>📝 Form & Data Processing</h2>
            <ul class="link-list">
                <li class="link-item">
                    <a href="data.php">
                        <span class="link-icon">📄</span>
                        <div>
                            <div class="link-title">data.php</div>
                            <div class="link-desc">Form input data (nama, umur, email)</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="proses.php">
                        <span class="link-icon">⚙️</span>
                        <div>
                            <div class="link-title">proses.php</div>
                            <div class="link-desc">Memproses form dan menyimpan ke session</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="next.php">
                        <span class="link-icon">➡️</span>
                        <div>
                            <div class="link-title">next.php</div>
                            <div class="link-desc">Halaman kedua - menampilkan data dari session</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Section: Authentication & Security -->
        <div class="section">
            <h2>🔒 Authentication & Login</h2>
            <ul class="link-list">
                <li class="link-item">
                    <a href="koneksi.php">
                        <span class="link-icon">🔌</span>
                        <div>
                            <div class="link-title">koneksi.php</div>
                            <div class="link-desc">File koneksi database (include file)</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="konfirmasi.php">
                        <span class="link-icon">✅</span>
                        <div>
                            <div class="link-title">konfirmasi.php</div>
                            <div class="link-desc">Halaman konfirmasi login/autentikasi</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="logout.php">
                        <span class="link-icon">🚪</span>
                        <div>
                            <div class="link-title">logout.php</div>
                            <div class="link-desc">Logout dan hapus session</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Section: Form Examples -->
        <div class="section">
            <h2>🍔 Form Examples (Makanan & Minuman)</h2>
            <ul class="link-list">
                <li class="link-item">
                    <a href="makananForm.php">
                        <span class="link-icon">🍕</span>
                        <div>
                            <div class="link-title">makananForm.php</div>
                            <div class="link-desc">Form pemesanan makanan</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="proses_makanan.php">
                        <span class="link-icon">🔄</span>
                        <div>
                            <div class="link-title">proses_makanan.php</div>
                            <div class="link-desc">Proses data makanan</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="proses_minuman.php">
                        <span class="link-icon">🥤</span>
                        <div>
                            <div class="link-title">proses_minuman.php</div>
                            <div class="link-desc">Proses data minuman</div>
                        </div>
                    </a>
                </li>
                <li class="link-item">
                    <a href="makananAuth.php">
                        <span class="link-icon">🔐</span>
                        <div>
                            <div class="link-title">makananAuth.php</div>
                            <div class="link-desc">Autentikasi untuk akses makanan</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Note Section -->
        <div class="note">
            <strong>💡 Catatan Penting:</strong>
            <ul style="margin-left: 20px; margin-top: 8px;">
                <li>Pastikan XAMPP (Apache & MySQL) sudah berjalan</li>
                <li>Beberapa halaman memerlukan database (library) yang sudah dibuat</li>
                <li>File proses.php dan next.php memerlukan form data.php diisi terlebih dahulu</li>
                <li>Session akan tersimpan selama browser tidak ditutup atau logout</li>
            </ul>
        </div>
    </div>
</body>
</html>
