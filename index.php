


<div class='input-field col s6  mb-4'><select class='select2 browser-default' name='brand_name[]'><optgroup label='Brands'><?php $sql='select id,brand_name from add_brand'; $query=mysqli_query($conn,$sql); while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ ?> <option value='<?php echo $row['id'];?>'><?php echo $row['brand_name']; ?></option> <?php } ?> </optgroup> </select> </div>