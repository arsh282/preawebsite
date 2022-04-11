var html = "<div class='row outer_div' style='padding:1rem;'>
 <div class='input-field col s12 '>
   <label for='upc' class='p-2'>UPC*</label>
   <input id='upc' name='part_product[" + index + "][upc]' type='text'  data-error='.errorTxt1' required>
  </div>
  <div class='input-field col s6  '>
    <label for='part_code' class='p-2'>Part-Code*</label>
    <input id='part_code' type='text' name='part_product[" + index + "][part_code]' data-error='.errorTxt2' required><small class='error_part'></small>
  </div>
  <div class='input-field col s6 '>
    <label for='description' class='p-2'>Description*</label>
    <input id='' name='part_product[" + index + "][description]' type='text'  data-error='.errorTxt1' required>
  </div>
  <div class='input-field col s6  mb-4'>
    <label for='hsn' class='p-2'>HSN Code*</label>
    <input id='hsn' name='part_product[" + index + "][hsn]' type='text'  data-error='.errorTxt1' required>
  </div>
  <div class='input-field col s6 mb-4'>
    <button id='removeRow' type='button' class='btn btn-danger'>Remove</button>
  </div>
</div>";
<div class="input-field col s6  mb-4">
  <select class="select2 browser-default" name="brand_name[]">
    <optgroup label="Brands">
        <?php
                $sql="select id,brand_name from add_brand";
                $query=mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ 
        ?>
               <option value="<?php echo $row["id"];?>"><?php echo $row["brand_name"]; ?></option>
        <?php
        }
        ?>
    </optgroup>
  </select>
</div>
<select class="form-control"  name="catid" required>
    <option value="">select</option>
       <?php 
        $sql="select cat_id,cat_name from tbl_categories";
        $query=mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ ?>
       <option value="<?php echo $row['cat_id'];?>"><?php echo ($row['cat_name']); ?></option>
       <?php 
         }
         if(isset($_POST['catid'])){
          $cid=$_POST['catid'];
         }
        ?>
</select>




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
    if(empty($username) && empty($password) && empty($sname) && empty($saddress))
    {
     $msg= '<b>Please fill out all fields.</b>';
    }
    else
    {
        $check=mysqli_num_rows(mysqli_query($conn,"SELECT username FROM login_user where username='man' UNION SELECT username FROM stores WHERE username ='$username'"));
        if($check>0)
        {
        echo('username exist');
        }else{
        print_r($_SESSION);
         $role_id = $_SESSION['id'];
         $insert="INSERT INTO stores (username,password,name,address,gst_no,role_id) VALUES ('$username','$password','$sname','$saddress','$gst','$role_id')";
            // $insert="INSERT INTO users (username,email,password,role_id) VALUES ('$username','$email','$password',SELECT role_id from roles WHERE role_id='$roles')";
        $result=mysqli_query($conn,$insert);
        if ($result) 
        {   
            echo ('success');
        }
        else
        {
        echo ('fails');
        
        }    
    }

    }
  
?>
