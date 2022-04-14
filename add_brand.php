<?php
include('connection.php');
// $msg='';
// if (isset($_POST['submit'])) {
//   $values=$_POST['brand_name'];
//   foreach ($values as $value ) {
//   $insert="INSERT INTO brands(brand_name) VALUES ('$value')";
//   $result=mysqli_query($conn,$insert);
//   if($result){
//     echo "success";
//       }
//     }
// }



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
 
    
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
      <div class="row mb-5">
        <div>
        <?php
          if($_SESSION['role_id'] == 2)
          {
          include '../preawebsite/slidebar_admin.php';
          }

          elseif($_SESSION['role_id'] == 1)
          {
            include'../preawebsite/slidebar_superadmin.php';
          }
          else{
            include'../preawebsite/slidebar_accountant.php';

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
                            <div class="collapsible-header" tabindex="0" style="font-size: 20px;"><i class="material-icons">blur_circular</i> Add Brands</div>
                            <div class="collapsible-body" >
                              <h5 class="page-title center-align" style="color: #6b6f82;padding-bottom:15px">Add Brands</h5>
                              <div id="validations">
                                <div class="card-content">
                                  <!-- <div class="title" style="padding: 20px 0 20px 0px;font-size: 29px;">Add Product</div> -->
                                    <div id="view-validations">
                                      <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                          <div class="product_block" >
                                            <div class="row outer_div">
                                              <div class="input-field col s6 mb-4">
                                                  <label for="brand_name" class="p-2">Brand Name*</label>
                                                  <input id="brand_name" name="brand_name[]" type="text"  data-error=".errorTxt1" required>
                                                  <small class="errorTxt1"></small>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form_action">
                                            <div class="row">
                                                <div class="input-field col s12 center-align" >
                                                    <button class="add_more btn btn-success "  type="button">Add more</button>
                                                </div>
                                                <div class="input-field col s12">
                                                    <button class="btn waves-effect waves-light right toast-basic submit mb-4" type="submit" name="submit">Add Brands                                                        <i class="material-icons right">send</i>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=base_url;?>vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=base_url;?>js/vendors.min.js"></script>
    <script src="<?=base_url;?>js/search.min.js"></script>
    <script src="<?=base_url;?>js/plugins.min.js"></script>
    <script src="<?=base_url;?>js/custom/custom-script.min.js"></script>
    <script src="<?=base_url;?>js/scripts/form-validation.js"></script>
    <script src="<?=base_url;?>js/scripts/advance-ui-toasts.min.js"></script>
    <script src="<?=base_url;?>js/scripts/customizer.min.js"></script>
    <script src="<?=base_url;?>js/scripts/advance-ui-modals.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
  <script type="text/javascript">

$(document).ready(function() {
  $('.formValidate').submit(function(e){
      event.preventDefault();
      var formvalue = $(this).serialize();
      $.post('submit_brand.php',formvalue,function(data){
        console.log(data);
        var data = JSON.parse(response);
        if(data.status == 'success'){
         
        }
      });
    }); 
    var index = 1;
    $(document).on('click', '.add_more', function() {
  
        var html = "<div class='row outer_div'><div class='input-field col s6 mb-4'><label for='brand_name' class='p-2'>Brand Name*</label><input id='brand_name' name='brand_name[]' type='text'  data-error='.errorTxt1' required><small class='errorTxt1'></small> <div class='input-field col s6 mb-4'><button id='removeRow' type='button' class='btn btn-danger'>Remove</button></div></div>";

        $('.product_block').append(html);
        // index++;
    });
    $(document).on('click', '#removeRow', function () {
            $(this).closest('.outer_div').remove();
        });
});
  </script>
  </body>
</html>