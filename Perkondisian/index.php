<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Hasil Studi</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background-color: #f4f4f4; }
        .card {
            background: white;
            width: 300px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            border-top: 8px solid #3498db;
        }
        .grade-box {
            font-size: 60px;
            font-weight: bold;
            margin: 10px 0;
        }
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            margin-top: 10px;
        }
        .nama { color: #7f8c8d; margin-bottom: 5px; }
        .skor { font-size: 1.2em; color: #333; }
    </style>
</head>
<body>

<?php 
    $nama = "Kioo";
    $nilai = 100;

    if ($nilai >= 85){
        $grade = "A";
        $warna = "#27ae60";
    }
    elseif ($nilai >= 75) {
        $grade = "B";
        $warna = "#2980b9";
    }
    elseif ($nilai >= 65) {
        $grade = "C";
        $warna = "#f39c12";
    }
    else {
        $grade = "D";
        $warna = "#e74c3c";
    }

    if ($nilai >= 80) {
        $status = "LULUS";
        $bg_status = "#27ae60";
    } else {
        $status = "TIDAK LULUS";
        $bg_status = "#e74c3c";
    }
?>

<div class="card" style="border-top-color: <?php echo $warna; ?>;">
    <p class="nama">Hasil Ujian: <?php echo $nama; ?></p>
    <div class="grade-box" style="color: <?php echo $warna; ?>;">
        <?php echo $grade; ?>
    </div>
    <p class="skor">Skor: <strong><?php echo $nilai; ?></strong></p>
    <div class="status-badge" style="background-color: <?php echo $bg_status; ?>;">
        <?php echo $status; ?>
    </div>
</div>

</body>
</html>