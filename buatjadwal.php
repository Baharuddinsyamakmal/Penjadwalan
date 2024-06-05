<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buat Jadwal</title>
    <link rel="stylesheet" href="buatjadwal.css">
</head>
<body>
    <div class="form-container">
        <h2>Buat Jadwal</h2>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="no-matakuliah">No. Matakuliah</label>
                <input type="text" id="no-matakuliah" name="no_matakuliah" required>
            </div>
            <div class="form-group">
                <label for="nama-matakuliah">Nama Matakuliah</label>
                <input type="text" id="nama-matakuliah" name="nama_matakuliah" required>
            </div>
            <div class="form-group">
                <label for="dosen">Dosen</label>
                <input type="text" id="dosen" name="dosen" required>
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
                <label for="ruangan">Ruangan</label>
                <input type="text" id="ruangan" name="ruangan" required>
            </div>
            <div class="form-group">
                <button type="submit">Buat Jadwal</button>
            </div>
            <div class="back">
            <a href="jadwal.php">Kembali</a>
        </div>
        </form>
    </div>
</body>
</html>
