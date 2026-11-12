<?php
session_start();
require 'koneksi.php';

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $stmt = mysqli_prepare($db, "SELECT password FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if ($password === $row['password']) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("Location: index.php");
                exit();
            } else {
                $error = "Username atau password salah!";
            }
        } else {
            $error = "Username atau password salah!";
        }
    } else {
        $error = "Harap isi username dan password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h2>Halaman login User yang terdaftar!</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form method="POST">
        <ul>
            <li>
                <label>Username</label>
                <input type="text" name="username" required>
            </li>
            
            <li>
                <label>Password</label>
                <input type="password" name="password" required>
            </li>
            <li>
                 <button type="submit">Login</button>
            </li>
        </ul>
                
        
       
    </form>
    <a href="register.php">Buat akun baru!</a>
</body>
</html>