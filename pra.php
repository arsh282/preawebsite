<?php
include('connection.php');

$select=$_POST['data'];
echo $select;
?>
<html>
    <body>
    <form method="post">
        <div class="input-field col s6 ">
            <select class=""  name="data" onchange="this.form.submit();">
                <?php
                        $sql="select supplier_id,name from supplier";
                        $query=mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ 
                ?>
                <option value="<?php echo $row["supplier_id"];?>"><?php echo $row["name"]; ?></option>
                <?php
                
                }
                ?>
            
            </select>
        </div>
        
    </form>
    </body>
 </html>
