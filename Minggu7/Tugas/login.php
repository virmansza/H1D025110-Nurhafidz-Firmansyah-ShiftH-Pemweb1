<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$error = '';

$data_users = [
    [
        "username" => "admin",
        "password" => "admin123"
    ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_input = $_POST['username'];
    $password_input = $_POST['password'];
    $login_berhasil = false;

    foreach ($data_users as $user) {
        if ($user['username'] === $username_input && $user['password'] === $password_input) {
            $login_berhasil = true;
            break; // Hentikan pencarian jika data ditemukan
        }
    }

    if ($login_berhasil) {
        $_SESSION['username'] = $username_input;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <br>
    <p><i>Akun Uji Coba: admin / admin123</i></p>
</body>
</html>