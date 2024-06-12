
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ruangan</title>
    <link rel="stylesheet" href="tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Ruangan</h1>
        <form action="tambah_data.php" method="post">
            <div class="form-group">
                <label for="nama">No:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Ruangan:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="Kampus">Kampus</label>
                <select id="Kampus" name="Kampus" required>
                    <option value="">Pilih Kampus</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Kapasitas">Kapasitas</label>
                <input type="number" id="capacity" name="capacity" min="1" max="100" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="ruangan.php">Kembali</a>
        </div>
    </div>
</body>
</html>