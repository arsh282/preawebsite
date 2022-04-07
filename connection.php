<?php
include './constent.php';
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "pos";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname,3306);
//connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected Successfully.";
?>
