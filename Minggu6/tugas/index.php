<?php
include("koneksi.php");
$read = mysqli_query($koneksi, "SELECT 
                                    barang.id, 
                                    barang.nama AS nama_barang, 
                                    pembeli.nama AS nama_pembeli, 
                                    kurir.nama AS nama_kurir
                                FROM barang
                                JOIN pembeli ON barang.id = pembeli.id
                                JOIN kurir ON barang.id = kurir.id;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data dari Database!</title>
</head>
<body>
    <h1>Menampilkan Data dari Database!</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Nama Kurir</th>
        </tr>
        <?php if(mysqli_num_rows($read) > 0 ): ?>
            <?php while($row = mysqli_fetch_assoc($read)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['nama_barang']) ?></td>
                    <td><?= htmlspecialchars($row['nama_pembeli']) ?></td>
                    <td><?= htmlspecialchars($row['nama_kurir']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td>Belum Ada Data</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>