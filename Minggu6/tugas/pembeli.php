<?php
include("koneksi.php");
$read = mysqli_query($koneksi, "SELECT * FROM pembeli ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pembeli</title>
</head>
<body>
    <h1>Menampilkan data pembeli</h1>
    <a href="createPembeli.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama pembeli</th>
            <th>Nomor Hp</th>
            <th>Alamat</th>
            <th>Operasi</th>
        </tr>

        <?php 
        while($data_pembeli = mysqli_fetch_array($read)){
            echo "<tr>";
            echo "<td>".$data_pembeli['id'] ."</td>";
            echo "<td>".$data_pembeli['nama'] ."</td>";
            echo "<td>".$data_pembeli['nomor_hp'] ."</td>";
            echo "<td>".$data_pembeli['alamat'] ."</td>";
            echo "<td> <a href='updatePembeli.php?id=$data_pembeli[id]'>Edit</a> | <a href='deletePembeli.php?id=$data_pembeli[id]'>Delete</a></td><tr>";
        }
        ?>
    </table>
    <br>
    <a style="text-decoration: none;" href="barang.php">Barang</a> | <a style="text-decoration: none;" href="pembeli.php">Pembeli</a> | <a style="text-decoration: none;" href="kurir.php">Kurir</a>

    <br>
    <p>Pergi ke <a style="text-decoration: none;" href="index.php">Index</a></p>
</body>
</html>