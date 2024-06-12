<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
    <link rel="stylesheet" href="tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Matakuliah</h1>
        <form action="tambah_data.php" method="post">
            <div class="form-group">
                <label for="id">No:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nama">Jurusan:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Matakuliah:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Dosen:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <input type="semester" id="semester" name="Semester" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="dosentess.php">Kembali</a>
        </div>
    </div>
</body>
</html>