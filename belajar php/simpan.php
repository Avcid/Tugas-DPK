<?php
include 'core/koneksi.php';

if (isset($_POST['submit'])) {
    $nama  = $_POST['nama_user'];
    $email = $_POST['email_user'];

    $query = "INSERT INTO user (nama, email) VALUES ('$nama', '$email')";
    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
        echo "<h3>Yess! Data berhasil masuk ke database.</h3>";
        echo "<a href='index.php'>Kembali ke Form</a>";
    } else {
        echo "Gagal simpan data: " . mysqli_error($koneksi);
    }
}
?>