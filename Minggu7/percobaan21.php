<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan 2</title>
</head>
<body>
    <?php 
    echo "Username session: ";
    echo $_SESSION['username'];
    echo "<br><br>"
    ?>
    <a href="percobaan22.php"><button>Set Session</button></a>
    <a href="percobaan23.php"><button>Destroy</button></a>
</body>
</html>