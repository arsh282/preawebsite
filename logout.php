<?php
session_start();
print_r($_SESSION);
session_destroy();
header('location:../preawebsite/login.php');
?>
