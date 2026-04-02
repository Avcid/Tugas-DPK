<?php
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

if ($nilai >= 75) {
    $status = "LULUS";
    $warna = "green";
    $pesan = "Selamat, pertahankan prestasimu!";
} else {
    $status = "REMEDIAL";
    $warna = "red";
    $pesan = "Jangan menyerah, ayo belajar lebih giat lagi!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kelulusan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Ujian: <?php echo $nama; ?></h2>
        <hr>
        <p>Nilai Anda: <strong><?php echo $nilai; ?></strong></p>
        
        <h1 style="color: <?php echo $warna; ?>;">
            <?php echo $status; ?>
        </h1>
        
        <p><em>"<?php echo $pesan; ?>"</em></p>
        <br>
        <a href="index.php">
            <button style="background-color: #34495e; color: white;">Kembali</button>
        </a>
    </div>
</body>
</html>