<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen dan Jadwal Mata Kuliah</title>
    <link rel="stylesheet" href="jadwal.css">
</head>
<body>
    <div class="container">
        <h1>Jadwal Mata Kuliah</h1>
        <table id="jadwalTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody id="jadwalBody"></tbody>
        </table>
        <div class="pagination">
            <button id="prevJadwalBtn" onclick="prevJadwalPage()">Previous</button>
            <button id="nextJadwalBtn" onclick="nextJadwalPage()">Next</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
