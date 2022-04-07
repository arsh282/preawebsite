
<?php
include 'connection.php';
if(isset($_POST['submit'])){
      echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // die();
    // $upc = $_POST['upc'];
    // $part_code =  $_POST['part_code'];
    // $description = $_POST['description'];
    // $hsn =$_POST['hsn'];
    // print_r($upc);
    foreach($_POST['upc'] as $upc)
    foreach ( $_POST['part_code'] as  $part_code) // set variable for array 
    foreach ($_POST['description'] as $description)
    foreach ($_POST['hsn'] as $hsn)  
    foreach ($_POST['brand_name'] as $brand_name) 

  

      $insert="INSERT INTO add_product(upc,part_code,description,hsn,brand_name) VALUES ('$upc','$part_code','$description','$hsn','$brand_name')";
      $result=mysqli_query($conn,$insert);
}
?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Toasts | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="<?=base_url;?>/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url;?>/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/app-assets/css/pages/form-select2.min.css">
    <link rel="stylesheet" href="<?=base_url;?>/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url;?>/vendors/select2/select2-materialize.css" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/app-assets/css/custom/custom.css">

    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
      <div class="row mb-5">
        <div>
        <?php
          if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2)
          {
          include 'slidebar_admin.php';
          }

          elseif(isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2)
          {
            include 'slidebar_superadmin.php';
          }
          else{
            include 'slidebar_accountant.php';

          }
        ?>
        </div>
        <div id="main">
          <div class="row">
            <div class="content-wrapper-before"></div>
              <div class="col s12">
                <div class="container">
                  <div class="section">
                    <!-- Current balance & total transactions cards-->
                    <div class="row vertical-modern-dashboard">
                    <div class="col s12">
                      <ul class="collapsible collapsible-accordion">
                          <li>
                            <div class="collapsible-header" tabindex="0" style="font-size: 20px;"><i class="material-icons">blur_circular</i> Add Product</div>
                            <div class="collapsible-body" >
                              <h5 class="page-title center-align" style="color: #6b6f82;padding-bottom:15px">Add Product</h5>
                              <div id="validations">
                                <div class="card-content">
                                  <!-- <div class="title" style="padding: 20px 0 20px 0px;font-size: 29px;">Add Product</div> -->
                                    <div id="view-validations">
                                    <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                        <div class="product_block" >
                                            <div class="row outer_div">
                                            <div class="input-field col s6  ">
                                                  <select class="select2 browser-default" name="data[brand_name]">
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
                                                <div class="input-field col s6 ">
                                                    <label for="upc" class="p-2">UPC*</label>
                                                    <input id="upc" name="data[upc]" type="text"  data-error=".errorTxt1" required>
                                                </div>
                                                <div class="input-field col s6  ">
                                                    <label for="part_code" class="p-2">Part-Code*</label>
                                                    <input id="part_code" type="text" name="data[part_code]" data-error=".errorTxt2" required>
                                                    <small class="error_part"></small>
                                                </div>
                                                <div class="input-field col s6 ">
                                                    <label for="description" class="p-2">Description*</label>
                                                    <input id="" name="data[description]" type="text"  data-error=".errorTxt1" required>
                                                </div>
                                                <div class="input-field col s6  mb-4">
                                                    <label for="hsn" class="p-2">HSN Code*</label>
                                                    <input id="hsn" name="data[hsn]" type="text"  data-error=".errorTxt1" required>
                                                </div>
                                                
                                            </div>
                                        </div>  
                                        <div class="form_action">
                                            <div class="row">
                                                <div class="input-field col s12 center-align" >
                                                    <button class="add_more btn btn-success "  type="button">Add more</button>
                                                </div>
                                                <div class="input-field col s12">
                                                    <button class="btn waves-effect waves-light right toast-basic submit mb-4" type="submit" name="submit">Submit
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form> 
                                    </div>
                                </div>
                              </div>
                            </div>
                          </li>
                      </ul>
                    </div>
                  
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div> 
      <?php
      $optionsHtml = '';
      $sql='select id,brand_name from add_brand'; 
      $query=mysqli_query($conn,$sql); 
      while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ 
        $optionsHtml .="<option value='".$row['id']."'>".$row['brand_name']."</option>";

       }
      ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=base_url;?>vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=base_url;?>js/vendors.min.js"></script>
    <script src="<?=base_url;?>js/search.min.js"></script>
    <script src="<?=base_url;?>js/plugins.min.js"></script>
    <script src="<?=base_url;?>js/custom/custom-script.min.js"></script>
    <script src="<?=base_url;?>js/scripts/form-validation.js"></script>
    <script src="<?=base_url;?>js/scripts/advance-ui-toasts.min.js"></script>
    <script src="<?=base_url;?>js/scripts/customizer.min.js"></script>
    <script src="<?=base_url;?>vendors/select2/select2.full.min.js"></script>
    <script src="<?=base_url;?>app-assets/js/scripts/form-select2.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
    <script>
    
    let html =`<div class="row outer_div" style="padding:1rem;">
                    <div class="input-field col s6 ">
                        <select class="select2 browser-default" name="data[brand_name]">
                            <optgroup label="Brands">
                            <option>sdfòdssd</option>
                            </optgroup>
                        </select> 
                    </div>
                    <div class="input-field col s6 ">
                        <label for="upc" class="p-2">UPC*</label>
                        <input name="data[upc]" type="text"  required>
                    </div>
                    <div class="input-field col s6 ">
                        <label for="part_code" class="p-2">Part-Code*</label>
                        <input  type="text" name="data[part_code]" required>
                    </div>
                    <div class="input-field col s6 ">
                        <label for="description" class="p-2">Description*</label>
                        <input id=""  name="description[]" type="text" required>
                    </div>
                    <div class="input-field col s6  mb-4">
                        <label for="hsn" class="p-2">HSN Code*</label>
                        <input id="hsn" name="hsn[]" type="text" required>
                    </div>
                    <div class="input-field col s6 mb-4">
                        <button type="button" class="btn btn-danger removeRow">Remove</button>
                    </div>
                </div>`;  
                $('body').append(html);
      </script> 
  </body>
</html>