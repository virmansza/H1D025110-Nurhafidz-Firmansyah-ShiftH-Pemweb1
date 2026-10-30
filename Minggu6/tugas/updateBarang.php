<?php
include("koneksi.php");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $result = mysqli_query($koneksi, "UPDATE barang SET nama='$nama', harga='$harga' WHERE id=$id");

    header("Location:barang.php");

}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM barang WHERE id=$id");
while($data_barang = mysqli_fetch_array($result)){
    $nama = $data_barang['nama'];
    $harga = $data_barang['harga'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
    <a href="Barang.php">Batal</a>
    <br><br>
    <form action="updateBarang.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</body>
</html>