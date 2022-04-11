
  $(function () {
        $("#serial_no").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
            $("#error_serial").html("");
            //Regex for Valid Characters i.e. Alphabets and Numbers.
            var regex = /^[A-Za-z0-9]+$/;
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $(".error_serial").html("Only Alphabets and Numbers allowed.");
            }
 
            return isValid;
        });
    });
    $(function() {
    $('#part_code').click(function() {
    var txt = $('#part_code').val();
    var re = /^[ A-Za-z0-9_@./#&+-]*$/
    if (re.test(txt)) {
    $(".error_part").html("Part Code Valid");
    }
    else {
    $(".error_part").html("Please Enter Valid Part Code");
    return false;
    }
    })
    });
    $('#imei').keypress(function (e) {    
    var charCode = (e.which) ? e.which : event.keyCode    
    if (String.fromCharCode(charCode).match(/[^0-9]/g))    
        return false;                        

}); 
  <!-- <div class="input-field col s6  mb-4">
  <?php
                                                  $query="SELECT brand_name,id FROM add_brand order by brand_name";
                                                  $result = mysqli_query($conn,$query); 
                                                  $count=mysqli_num_rows($result);
                                                ?> 
                                                  <select class="select2 browser-default" name="brand_name">
                                                    <optgroup label="Brands">
                                                        <?php
                                                        for($i=1;$i<=$count;$i++){
                                                        $row=mysqli_fetch_array($result);
                                                        ?>
                                                        <option value="<?php echo $row["id"]?>"><?php echo $row["brand_name"]?></option>;
                                                        <?php
                                                        }
                                                        ?>
                                                    </optgroup>
                                                    
                                                  </select>
                                                </div>