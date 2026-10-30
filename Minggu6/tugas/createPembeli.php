<?php
if(isset($_POST['Submit'])) {
    include("koneksi.php");
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];


    $result = mysqli_query($koneksi, "INSERT INTO pembeli(nama, nomor_hp, alamat) VALUES ('$nama','$nomor_hp','$alamat')");

    header("Location:pembeli.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
</head>
<body>
    <h1>Tambah Data Pembeli</h1>
    <a href="pembeli.php">Batal</a>
    <br><br>
    <form action="createPembeli.php" method="POST" >
        <table>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="text" name="nomor_hp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="40" rows="15"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>