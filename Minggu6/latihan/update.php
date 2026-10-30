<?php
include("koneksi.php");
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $konten = mysqli_real_escape_string($koneksi, $_POST['konten']);

    $result = mysqli_query($koneksi, "UPDATE posts SET judul='$judul', konten='$konten' WHERE id=$id");

    header("Location:index.php");

}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM posts WHERE id=$id");
while($user_data = mysqli_fetch_array($result)){
    $judul = $user_data['judul'];
    $konten = $user_data['konten'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update berita</title>
</head>
<body>
    <h1>Edit Post Berita!</h1>
    <a href="index.php">Batal</a>
    <br><br>
    <form action="update.php" method="POST" >
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $judul ?>"></td>
            </tr>
            <tr>
                <td>Konten</td>
                <td><textarea name="konten" cols="40" rows="15"><?php echo $konten; ?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>