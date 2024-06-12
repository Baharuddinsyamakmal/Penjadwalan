
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal</title>
    <link rel="stylesheet" href="tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Jadwal</h1>
        <form action="tambah_data.php" method="post">
            <div class="form-group">
                <label for="nama">No:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Matakuliah:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Dosen:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="hari">Hari</label>
                <select id="hari" name="hari" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <input type="time" id="jam" name="jam" required>
            </div>
            <div class="form-group">
                <label for="Ruangan">Ruangan:</label>
                <input type="text" id="Ruangan" name="Ruangan" required>
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <input type="text" id="Semester" name="Semester" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="jadwal.php">Kembali</a>
        </div>
    </div>
</body>
</html>