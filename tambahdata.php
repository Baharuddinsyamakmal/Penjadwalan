<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <link rel="stylesheet" href="tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Dosen</h1>
        <form action="tambah_data.php" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Title:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nama">Pengampu:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telepon">No. Telepon:</label>
                <input type="text" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="index.php">Kembali</a>
        </div>
    </div>
</body>
</html>