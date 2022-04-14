<?php
include('connection.php');
$msg='';

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
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>app-assets/css/pages/form-select2.min.css">
    <link rel="stylesheet" href="<?=base_url;?>vendors/select2/select2-materialize.css" type="text/css">
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
                      <div id="validations">
                        <div class="card-content">
                          <!-- <div class="title" style="padding: 20px 0 20px 0px;font-size: 29px;">Add Product</div> -->
                            <div id="view-validations">
                            <div class="row float-right">23/2/2021</div>
                            <div class="clear"></div>
                              <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                  <div class="product_block" >
                                    
                                    <div class="row outer_div ">
                                      <div class="input-field col s3 ">
                                        <select class="select2 browser-default country" name="data">
                                        
                                        <?php
                                        $sql="select supplier_id,name from supplier";
                                        $query=mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){ 
                                        ?>
                                            <option value="<?php echo $row["supplier_id"];?>"><?php echo $row["name"];?></option>  
                                        <?php
                                          }
                                        ?>
                                        </select>
                                      </div>
                                      <div id="confirmation"></div>
                                    </div>
                                    <div class="row outer_div ">
                                      <div class="input-field col s3 mt-3">
                                        <input type="text" id="doj" class="datepicker" name="doj">
                                        <label for="dob">Invoice Date</label>
                                      </div>
                                      <div class="input-field col s3 mt-3">
                                        <label for="invoice_no" class="p-2">Invoice no*</label>
                                        <input id="invoice_no" name="invoice_no" type="text" data-error=".errorTxt1" required>
                                        <small class="errorTxt1"></small>
                                      </div>
                                      <div class="input-field col s3 mt-3">
                                        <label for="freight" class="p-2">Freight*</label>
                                        <input id="freight" name="freight" class="only_numeric" type="number" maxlength="6"  data-error=".errorTxt1"   required>
                                        <small class="errorTxt1"></small>
                                      </div>
                                      <div class="input-field col s3 mt-3">
                                        <label for="invoice_amount" class="p-2">Invoice Amount*</label>
                                        <input id="invoice_amount" name="invoice_amount" type="number" data-error=".errorTxt1" required>
                                        <small class="errorTxt1"></small>
                                      </div>
                                      <div class="col m3 s3 file-field input-field">
                                        <div class="btn float-right">
                                          <span>File</span>
                                          <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                          <input class="file-path validate valid" type="text">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </form>
                            </div>
                        </div>
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
    <script src="<?=base_url;?>vendors/select2/select2.full.min.js"></script>
    <script src="<?=base_url;?>app-assets/js/scripts/form-select2.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
    <script>
        $(document).ready(function(){
          $(".country").change(function(){
        var selected = $(this).children("option:selected").val();
        // alert("You have selected the country - " + selected);
        $.post('supplier_details.php', {data:selected}, function(response){ 
          // alert();
          $('#confirmation').html(response);
        });
      });

    });
    </script>
  </body>
</html>