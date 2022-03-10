<?php
include'connection.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
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
    <title>Form Validation | Materialize - Material Design Admin Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/preawebsite/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!--data table-->
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
      <div class="row mb-5">
        <div class="col-sm-2 col-md-2 col-lg-2">
          <?php
            if($_SESSION['role_id'] == 2)
            {
            include '../preawebsite/slidebar_admin.php';
            }
          
            ?>
            <?php
            if($_SESSION['role_id'] == 1)
            {
              include'../preawebsite/slidebar_superadmin.php';
            }
          ?>
        </div>
        <!-- Button trigger modal -->
        <div class="col-sm-9 col-md-9 col-lg-9 mt-5">
          <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Stores
          </button>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px; width: 40%;">
              <div class="modal-dialog modal-xl modal-dialog-scrollable m-0">
                <div class="modal-content p-0">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Stores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col">
                        <div id="validations" class="card card-tabs shadow-none border-0">
                          <div class="card-content">
                            <div id="view-validations">
                              <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                  <div class="row">
                                    
                                    <div class="input-field col-sm-6  ">
                                      <label for="sname" class="p-2">Store Name *</label>
                                      <input id="name" type="text" name="sname" required>
                                      <small class="errorTxt1" style="color:#ff4081"></small>
                                    </div>
                                    <div class="input-field col-sm-6  ">
                                      <label for="email" class="p-2">Store Email *</label>
                                      <input id="email" type="email" name="email"  required>
                                      <small class="errorTxt2" style="color:#ff4081"></small>
                                      <small class="invalid" style="color:#ff4081"></small>
                                    </div>
                                    <div class="input-field col-sm-6  ">
                                      <label for="storeaddress" class="p-2">Store Address *</label>
                                      <input id="address" type="text" name="saddress"  required>
                                      <small class="errorTxt3" style="color:#ff4081"></small>
                                    </div>
                                    <div class="input-field col-sm-6  ">
                                      <label for="gst" class="p-2">Gst *</label>
                                      <input class="gst text-uppercase" type="text" name="gst"required>
                                      <small class="errorTxt4" style="color:#ff4081"></small>
                                      <small class=" error_gst" style="color:#ff4081"></small>
                                    </div>
                                    
                                    <div class="input-field col-sm-6 ">
                                      <label for="uname" class="p-2">Username*</label>
                                      <input id="username" name="username" type="text" data-error=".errorTxt1" required>
                                      <small class="errorTxt5" style="color:#ff4081"></small>
                                    </div>
                                    <div class="input-field col-sm-6 mb-5">
                                        <label for="lastName1">Password: <span class="red-text">*</span></label>
                                        <input type="password" id="pswd" class="validate" name=" password" required>
                                    </div>
                                    <div class="input-field col-sm-6 mb-5">
                                        <label for="lastName1">Confirm Password: <span class="red-text">*</span></label>
                                        <input type="password" id="cpswd" class="validate" name=" cpassword" required>
                                        <div class="registrationFormAlert mb-3" style="color:#ff4081;" id="CheckPasswordMatch"></div>
                                    </div>
                                    <small class=" form_error" style="color:#ff4081"></small>
                                    <div class="input-field col-12 ">
                                      <button class="btn waves-effect waves-light right submit" id="submit" type="submit" name="submit">Submit
                                        <i class="material-icons right">send</i>
                                      </button>
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

     
        <div class="col-sm-9 col-md-9 col-lg-9 " style="padding-left:310px;margin-top:50px;">
          <div class="container">
            <div class="card">
              <div class="card-content">
                <div class="section section-data-tables">
                          <table id="login_user" class="display">
                            <?php
                             $sql = "SELECT * FROM stores  ";
                            $result = mysqli_query($conn, $sql);
                          
                            if ($count = mysqli_num_rows($result) > 0){
                          
                            ?>
                            <thead>
                              <tr>
                                <th class="table_th">Sr No.</th>
                                <th class="table_th">Name</th>
                                <th class="table_th">Email</th>
                                <th class="table_th">Address</th>
                                <th class="table_th">Gst No.</th>
                                <th class="table_th">Username</th>
                                <th class="table_th">Password</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $count=1;
                              while($rows = mysqli_fetch_array($result)){
                              
                              ?>
                              <tr>
                                <td><?php echo $count ?></th>
                                <td><?php echo $rows['name'];?></td>
                                <td><?php echo $rows['email'];?></td>   
                                <td><?php echo $rows['address'];?></td>
                                <td><?php echo $rows['gst_no'];?></td>
                                <td><?php echo $rows['username'];?></td>
                                <td><?php echo $rows['password'];?></td>
                              </tr>
                            <?php
                            $count++;
                            }
                            ?>
                            
                            </tbody>
                          </table>
                           <?php
                            }
                            else{
                              echo"No data found";
                            }
                            ?>
                  </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/preawebsite/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="/preawebsite/js/vendors.min.js"></script>
    <script src="/preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/js/plugins.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
    <script src="/preawebsite/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="/preawebsite/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="/preawebsite/vendors/data-tables/js/dataTables.select.min.js"></script>
    <script src="/preawebsite/app-assets/js/scripts/form-validation.js"></script>
  <script type="text/javascript">
      // checkPasswordMatch
      function checkPasswordMatch() {
      var password = $("#pswd").val();
      var confirmPassword = $("#cpswd").val();
      if (password != confirmPassword)
          $("#CheckPasswordMatch").html("Passwords does not match!");
      else
          $("#CheckPasswordMatch").html("Passwords match.");
      };
    $(document).ready(function(){
      $('#login_user').DataTable();
    $('.role').click(function() 
    {
        $('.role').not(this).prop('checked', false);
    });
    // checkPasswordMatch
    $("#cpswd").keyup(checkPasswordMatch);
    // gst no. 
    $(".gst").keypress(function () {    
      var inputvalues = $(this).val();    
      var gstinformat = new RegExp('^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]1}[1-9A-Z]{1}Z[0-9A-Z]{1}$');    
      if (gstinformat.test(inputvalues)) {
        return true;  
      $('.error_gst').html('Valid GSTIN Number');    
       
      } else {    
        $('.error_gst').html('Please Enter Valid GSTIN Number');    
      $(".gst").focus();    
      }    
     });
  //  ajax
    $(".formValidate").on("submit", function(e){
      e.preventDefault();
      var formValues= $(this).serialize();
      $.post("submit_storedata.php",formValues,function(data, textStatus, jqXHR){
            console.log(formValues);
            $('.formValidate').trigger('reset');
            swal("Here's a message!");
    });
  });
 });
  </script>
  </body>
</html>