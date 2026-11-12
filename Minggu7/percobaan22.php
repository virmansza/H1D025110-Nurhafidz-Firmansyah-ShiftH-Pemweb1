<?php
session_start();
$_SESSION['username'] = "user1";
header("Location:percobaan21.php");
?>