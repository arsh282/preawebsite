<?php
include'connection.php';
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
$empty='';
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sname=$_POST['sname'];
    $gst  = $_POST['gst'];
    $saddress = $_POST['saddress'];
    $email = $_POST['email'];
    if(empty($username) && empty($password) && empty($sname) && empty($saddress))
    {
     $msg= '<b>Please fill out all fields.</b>';
    }
    else
    {
       echo  $check=mysqli_num_rows(mysqli_query($conn,"SELECT username FROM stores WHERE username ='$username'"));
        if($check>0)
        {
        $msg = "Username already exist";
        }else{
        print_r($_SESSION);
        echo $admin = $_SESSION['id'];
        echo $insert="INSERT INTO stores (username,password,name,email,address,gst_no,admin_id) VALUES ('$username','$password','$sname','$email','$saddress','$gst','$admin')";
            // $insert="INSERT INTO users (username,email,password,role_id) VALUES ('$username','$email','$password',SELECT role_id from roles WHERE role_id='$roles')";
        $result=mysqli_query($conn,$insert);
        
        }

    }
  
?>