<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Searching</title>
</head>
<body>
    <header>
        <h2>Searching buku Tamu Untuk Database MySQL</h2>
    </header>

    <main>
        <form action="hasilsearch_bukutamu.php" method="post" autocomplete="off" novalidate>
            <div>
                <label for="kolom">Kolom</label>
                <select name="kolom" id="kolom">
                    <option value="nama">nama</option>
                    <option value="email">email</option>
                </select>
            </div>

            <div>
                <label for="cari">Masukkan Kata Yang Anda Cari</label>
                <input type="text" name="cari" id="cari" />
            </div>

            <div>
                <input type="submit" value="Cari" />
            </div>
        </form>
    </main>
</body>
</html>