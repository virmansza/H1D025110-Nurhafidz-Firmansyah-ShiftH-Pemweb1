<?php
if(isset($_POST['Submit'])) {
    include("koneksi.php");
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $result = mysqli_query($koneksi, "INSERT INTO barang(nama, harga) VALUES ('$nama','$harga')");

    header("Location:barang.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <a href="barang.php">Batal</a>
    <br><br>
    <form action="createBarang.php" method="POST" >
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>