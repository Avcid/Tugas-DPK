<?php include 'core/koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Tambah User Baru</h2>
    <form action="simpan.php" method="POST">
        Nama: <input type="text" name="nama_user" required><br><br>
        Email: <input type="email" name="email_user" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <hr>

    <h2>Daftar User di Database</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>

        <?php
        $ambil_data = mysqli_query($koneksi, "SELECT * FROM user");
        $no = 1;
        
        while($display = mysqli_fetch_array($ambil_data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $display['nama']; ?></td>
            <td><?php echo $display['email']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>