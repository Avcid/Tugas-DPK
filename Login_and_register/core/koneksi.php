<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "belajar";
$db = mysqli_connect($hostname, $username, $password, $database_name);
if ($db->connect_error) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
