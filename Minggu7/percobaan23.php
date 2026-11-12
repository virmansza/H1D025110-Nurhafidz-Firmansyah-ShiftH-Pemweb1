<?php
session_start();
session_unset();
session_destroy();
header("Location:percobaan21.php");
?>