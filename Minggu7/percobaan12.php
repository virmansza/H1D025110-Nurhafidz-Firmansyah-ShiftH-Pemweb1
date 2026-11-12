<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan 1</title>
</head>
<body>
    <h1>Hasil Kirim data session ke halaman 1</h1>
    <?php 
    echo "<h2>Username session di Halaman 1</h2>";
    echo $_SESSION['username'];
    echo "<br><br>"
    ?>
    <a href="percobaan11.php">Ke Halaman 1</a>
</body>
</html>