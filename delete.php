<?php

include("connection.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($conn, $id);

}
function delete_data($conn, $id){
   
    $query="DELETE from login_user WHERE id=$id";
    $exec= mysqli_query($conn,$query);
    if($exec){
      header('location:/preawebsite/add_admin.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
      echo $msg;
    }
}
?>