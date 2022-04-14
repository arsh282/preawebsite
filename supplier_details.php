  <?php
   include ('connection.php');
   $selected=$_POST['data'];
   $sql="select * from supplier where supplier_id ='$selected' ";
   $query=mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ 
  ?>
    <div class="input-field col s6 ">
        <label for="address" class="p-2"></label>
        <input id="address" name="address" type="text"  data-error=".errorTxt1" value="<?= $row['address'] ?>" disabled required>
        <span class="helper-text" data-error="wrong" data-success="right">Address</span>
    </div>
    <div class="input-field col s3 ">
        <label for="gst_no" class="p-2"></label>
        <input id="gst_no" name="gst_no" type="text"     data-error=".errorTxt1" value="<?= $row['gst_no'] ?>" disabled required>
        <span class="helper-text" data-error="wrong" data-success="right">Gst no</span>
    </div>
<?php
   }
?>
   
