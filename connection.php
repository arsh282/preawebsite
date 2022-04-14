<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include 'constent.php';
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
else{
  // echo "Connected Successfully.";
}
?>