<?php
include("koneksi.php");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];

    $result = mysqli_query($koneksi, "UPDATE pembeli SET nama='$nama', nomor_hp='$nomor_hp', alamat='$alamat' WHERE id=$id");

    header("Location:pembeli.php");

}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE id=$id");
while($data_pembeli = mysqli_fetch_array($result)){
    $nama = $data_pembeli['nama'];
    $nomor_hp = $data_pembeli['nomor_hp'];
    $alamat = $data_pembeli['alamat'];
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
    <a href="pembeli.php">Batal</a>
    <br><br>
    <form action="updatePembeli.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Nomor Hp</td>
                <td><input type="text" name="nomor_hp" value="<?php echo $nomor_hp; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="40" rows="15"><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>