<?php
include("koneksi.php");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];

    $result = mysqli_query($koneksi, "UPDATE kurir SET nama='$nama', nomor_hp='$nomor_hp' WHERE id=$id");

    header("Location:kurir.php");

}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM kurir WHERE id=$id");
while($data_kurir = mysqli_fetch_array($result)){
    $nama = $data_kurir['nama'];
    $nomor_hp = $data_kurir['nomor_hp'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kurir</title>
</head>
<body>
    <a href="kurir.php">Batal</a>
    <br><br>
    <form action="updateKurir.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>nomor_hp</td>
                <td><input type="text" name="nomor_hp" value="<?php echo $nomor_hp; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>