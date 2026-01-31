<?php
include "core/koneksi.php";
session_start();

if (!isset($_SESSION["is_login"])) {
    header("location: login.php");
    exit;
}

$sql = "SELECT id, username, password FROM users";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data User</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php include "layout/header.html" ?>

    <div style="padding: 20px;">
        <h2>Daftar Pengguna Terdaftar</h2>
        
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Password (Plain)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Untuk penomoran tabel
                if ($result->num_rows > 0) {
                    // Looping data dari database
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data user.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        
        <p>Total User: <?= $result->num_rows ?></p>
    </div>

    <?php include "layout/footer.html" ?>
</body>
</html>