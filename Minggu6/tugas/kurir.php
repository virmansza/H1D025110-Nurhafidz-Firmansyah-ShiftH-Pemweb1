<?php
include("koneksi.php");
$read = mysqli_query($koneksi, "SELECT * FROM kurir ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kurir</title>
</head>
<body>
    <h1>Menampilkan data Kurir</h1>
    <a href="createKurir.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama kurir</th>
            <th>No. Hp</th>
            <th>Operasi</th>
        </tr>

        <?php 
        while($data_kurir = mysqli_fetch_array($read)){
            echo "<tr>";
            echo "<td>".$data_kurir['id'] ."</td>";
            echo "<td>".$data_kurir['nama'] ."</td>";
            echo "<td>".$data_kurir['nomor_hp'] ."</td>";
            echo "<td> <a href='updatekurir.php?id=$data_kurir[id]'>Edit</a> | <a href='deleteKurir.php?id=$data_kurir[id]'>Delete</a></td><tr>";
        }
        ?>
    </table>
    <br>
    <a style="text-decoration: none;" href="barang.php">Barang</a> | <a style="text-decoration: none;" href="pembeli.php">Pembeli</a> | <a style="text-decoration: none;" href="kurir.php">Kurir</a>

    <br>
    <p>Pergi ke <a style="text-decoration: none;" href="index.php">Index</a></p>
</body>
</html>