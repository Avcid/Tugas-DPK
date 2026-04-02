<!DOCTYPE html>
<html>
<head>
    <title>Cek Nilai Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cek Kelulusan</h2>
        <form action="proses.php" method="POST">
            <label>Nama Siswa: </label>
            <input type="text" name="nama" required>
            
            <label>Nilai Ujian (0-100):</label>
            <input type="number" name="nilai" min="0" max="100" required>
            
            <button type="submit">Cek Hasil</button>
        </form>
    </div>
</body>
</html>