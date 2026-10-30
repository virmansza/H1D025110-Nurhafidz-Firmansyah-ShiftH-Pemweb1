<?php
include("koneksi.php");
$read = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Menampilkan data Barang</h1>
    <a href="createBarang.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Operasi</th>
        </tr>

        <?php 
        while($data_barang = mysqli_fetch_array($read)){
            echo "<tr>";
            echo "<td>".$data_barang['id'] ."</td>";
            echo "<td>".$data_barang['nama'] ."</td>";
            echo "<td>".$data_barang['harga'] ."</td>";
            echo "<td> <a href='updateBarang.php?id=$data_barang[id]'>Edit</a> | <a href='deleteBarang.php?id=$data_barang[id]'>Delete</a></td><tr>";
        }
        ?>
    </table>
    <br>
    <a style="text-decoration: none;" href="barang.php">Barang</a> | <a style="text-decoration: none;" href="pembeli.php">Pembeli</a> | <a style="text-decoration: none;" href="kurir.php">Kurir</a>

    <br>
    <p>Pergi ke <a style="text-decoration: none;" href="index.php">Index</a></p>

</body>
</html>