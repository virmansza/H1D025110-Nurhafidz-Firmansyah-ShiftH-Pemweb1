<?php
include("koneksi.php");
$read = mysqli_query($koneksi, "SELECT * FROM posts ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini</title>
</head>
<body>
    <h1>Post News Ter-Update!</h1>
    <a href="create.php"><button>Tambah Post</button></a>
    <br><br>
    <table>
        <?php 
        while($user_data = mysqli_fetch_array($read)){
            echo "<h2>".$user_data['judul'] ."</h2>";
            echo "<p> <a href='update.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></p>";
            echo "<p>".nl2br($user_data['konten']) ."</p>";
        }
        ?>
    </table>
</body>
</html>