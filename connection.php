<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pos";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
//connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected Successfully.";
?>
