<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar</title>
</head>

<body>
    <?php
    $nama = "Agam Candra Pratama";
    $nilai = 80;
    $x = 5;
    var_dump($x);

    echo "Hasil ulangan" . $nama;

    if ($nilai >= 75) {
        echo "Status    : <b>LULUS</b><br>";
        echo "Pesan     : Selamat ya, Pertahankan!";
    } else {
        echo "Status    : <b>TIDAK LULUS</b><br>";
        echo "Pesan     : Jangan menyerah, ayo belajar lebih giat lagi!";
    }
    ?>
</body>

</html>