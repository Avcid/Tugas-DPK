<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "belajar_db";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
    die("Aduh, koneksi gagal :" . mysqli_connect_error());
}

?>