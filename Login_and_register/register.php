<?php
include "core/koneksi.php";
$register_message = "";
session_start();

if (isset($_SESSION["is_login"])){
    header("location: dashboard.php");
}

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try{
        if ($username == null  || $password == null) {
            $register_message = "Username or password can't be empty";
        } 
        else {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

            if ($db->query($sql)) {
                $register_message = "Register berhasil, silahkan login!";
            } else {
                $register_message = "Register gagal, coba lagi";
            }
        }
    }
    catch(mysqli_sql_exception){
        $register_message = "Username sudah digunakan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>
</head>

<body>
    <?php include "layout/header.html" ?>
    <h3>DAFTAR AKUN ANDA UNTUK MENGGUNAKAN WEBSITE KAMI</h3>
    <i><?= $register_message ?></i>
    <form action="register.php" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">
        <button type="submit" name="register">Daftar</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>

</html>