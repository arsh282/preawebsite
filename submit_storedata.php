<?php
include'connection.php';
// session_start();
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// $msg='';
// $empty='';
//     $username=$_POST['username'];
//     $password=md5($_POST['password']);
//     $sname=$_POST['sname'];
//     $gst  = $_POST['gst'];
//     $saddress = $_POST['saddress'];
//     if(empty($username) && empty($password) && empty($sname) && empty($saddress))
//     {
//      $msg= '<b>Please fill out all fields.</b>';
//     }
//     else
//     {
//         $check=mysqli_num_rows(mysqli_query($conn,"SELECT username FROM login_user where username='man' UNION SELECT username FROM stores WHERE username ='$username'"));
//         if($check>0)
//         {
//         echo('username exist');
//         }else{
//         print_r($_SESSION);
//          $role_id = $_SESSION['id'];
//          $insert="INSERT INTO stores (username,password,name,address,gst_no,role_id) VALUES ('$username','$password','$sname','$saddress','$gst','$role_id')";
//             // $insert="INSERT INTO users (username,email,password,role_id) VALUES ('$username','$email','$password',SELECT role_id from roles WHERE role_id='$roles')";
//         $result=mysqli_query($conn,$insert);
//         if ($result) 
//         {   
//             echo ('success');
//         }
//         else
//         {
//         echo ('fails');
        
//         }    
//     }

//     }
  
?>