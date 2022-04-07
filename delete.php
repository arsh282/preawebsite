<?php
include("connection.php");

           $id = $_GET['id'];
        
          echo $query = "DELETE from login_user WHERE id='$id'";
           $res = mysqli_query( $conn, $query );
           if($res){
            header('location:./add_admin.php');
          }else{
               echo  0;
           }
    ?>   
