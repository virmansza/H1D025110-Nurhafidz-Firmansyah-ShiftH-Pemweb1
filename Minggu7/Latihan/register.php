<?php
require 'koneksi.php';

$error = '';
$sukses = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username            = trim($_POST['username'] ?? '');
    $password            = $_POST['password'] ?? '';
    $konfirmasi_password = $_POST['konfirmasi_password'] ?? '';

    if (!empty($username) && !empty($password) && !empty($konfirmasi_password)) {
        
        if ($password !== $konfirmasi_password) {
            $error = "Konfirmasi password tidak cocok dengan password!";
        } else {

            $stmt = mysqli_prepare($db, "INSERT INTO users (username, password) VALUES (?, ?)");
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);

            if (mysqli_stmt_execute($stmt)) {
                $sukses = "Registrasi berhasil! Silakan <a href='login.php'>Login di sini</a>.";
            } else {
                $error = "Username sudah terdaftar atau terjadi kesalahan.";
            }
        }
    } else {
        $error = "Semua kolom wajib diisi!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Halaman registrasi akun Mahasiswa</h2>
    <form action="" method="POST">
        <ul>
            <li>
              <label>Username</label><br>
              <input type="text" name="username" required>  
            </li>
            <li>
                <label>Password</label><br>
                <input type="password" name="password" required>
            </li>
            <li>
                <label>Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi_password" required>
            </li>
            <li>
                <button type="submit">Register!</button>
            </li>
        </ul>
    </form>

    <a href="login.php">Sudah memiliki akun?</a>
</body>
</html>