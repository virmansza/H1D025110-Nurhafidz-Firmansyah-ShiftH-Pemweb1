<?php
session_start();
session_destroy();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
</head>
<body>
    <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['username']); ?>👋,</h2>
    <h3>Selamat Datang Di Halaman Latihan Belajar Session dan User Authentication!</h3>
    <p>Password anda adalah : <?= htmlspecialchars($_SESSION['password'] ?? ''); ?></p>
</body>
</html>