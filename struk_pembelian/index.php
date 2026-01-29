<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Struk Pembayaran Toko</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .struk {
            background: #fff;
            padding: 20px;
            width: 300px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .total {
            border-top: 1px dashed #000;
            margin-top: 10px;
            padding-top: 10px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            font-style: italic;
        }
    </style>
</head>

<body>

    <?php
    function hitungDiskon($total)
    {
        if ($total >= 1000000) {
            return 0.50; 
        } elseif ($total >= 500000) {
            return 0.20;
        } else {
            return 0;
        }
    }

    $namaPelanggan = "Andi Wijaya";
    $totalBelanja = 1250000;
    $persen = hitungDiskon($totalBelanja);
    $nominalDiskon = $totalBelanja * $persen;
    $totalAkhir = $totalBelanja - $nominalDiskon;
    ?>

    <div class="struk">
        <div class="header">
            <strong>TOKO SEDERHANA</strong><br>
            Jl. Coding No. 101
        </div>

        <div class="item">
            <span>Pelanggan:</span>
            <span><?php echo $namaPelanggan; ?></span>
        </div>

        <div class="item">
            <span>Total Awal:</span>
            <span>Rp <?php echo number_format($totalBelanja, 0, ',', '.'); ?></span>
        </div>

        <div class="item">
            <span>Diskon (<?php echo ($persen * 100); ?>%):</span>
            <span>- Rp <?php echo number_format($nominalDiskon, 0, ',', '.'); ?></span>
        </div>

        <div class="item total">
            <span>TOTAL BAYAR:</span>
            <span>Rp <?php echo number_format($totalAkhir, 0, ',', '.'); ?></span>
        </div>

        <div class="footer">
            Terima Kasih Atas Kunjungan Anda<br>
            --- LUNAS ---
        </div>
    </div>

</body>

</html>