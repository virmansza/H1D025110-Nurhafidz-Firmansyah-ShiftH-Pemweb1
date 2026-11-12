<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    
    if (isset($_GET['tipe']) && $_GET['tipe'] === 'timeout') {
        header("Location: login.php?pesan=timeout");
    } else {
        header("Location: login.php?pesan=logout");
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    
    <!-- Meta tag ini akan me-refresh/mengalihkan halaman otomatis ke link logout setelah 10 detik -->
    <meta http-equiv="refresh" content="10; url=index.php?action=logout&tipe=timeout">
</head>
<body>
    <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>    
    <p style="color: red;"><b>Perhatian:</b> Otomatis keluar dari halaman ini dalam waktu 10 detik...</p>

    <hr>
    <a href="index.php?action=logout" onclick="return confirm('Yakin ingin keluar?')">
        <button>Logout</button>
    </a>
</body>
</html>