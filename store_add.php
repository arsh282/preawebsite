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
   <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/preawebsite/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

  
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
          
            ?>
            <?php
            if($_SESSION['role_id'] == 1)
            {
              include'../preawebsite/slidebar_superadmin.php';
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
                      <div class="col l12 mt-5" >
                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal ">
                          <div class="modal-content p-0">
                            <div id="validations" class="card card-tabs shadow-none border-0 m-0">
                              <div class="card-content" style="width: 100%;height: 100%;">
                                <div class="title" style="padding: 20px 0 20px 0px;font-size: 29px;">Add Store </div>
                                  <div id="view-validations">
                                  <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                    <div class="row">
                                      <div class="input-field col s6  ">
                                        <label for="sname" class="p-2">Store Name *</label>
                                        <input id="name" type="text" name="sname" required>
                                        <small class="errorTxt1" style="color:#ff4081"></small>
                                      </div>
                                      <div class="input-field col s6  ">
                                        <label for="storeaddress" class="p-2">Store Address *</label>
                                        <input id="address" type="text" name="saddress"  required>
                                        <small class="errorTxt3" style="color:#ff4081"></small>
                                      </div>
                                      <div class="input-field col s6  ">
                                        <label for="gst" class="p-2">Gst *</label>
                                        <input class="gst text-uppercase" type="text" name="gst"required>
                                        <small class="errorTxt4" style="color:#ff4081"></small>
                                        <small class=" error_gst" style="color:#ff4081"></small>
                                      </div>
                                      
                                      <div class="input-field col s6 ">
                                        <label for="uname" class="p-2">Username*</label>
                                        <input id="username" name="username" type="text" data-error=".errorTxt1" required>
                                        <small class="errorTxt5" style="color:#ff4081"></small>
                                      </div>
                                      <div class="input-field col s6 mb-5">
                                          <label for="lastName1">Password: <span class="red-text">*</span></label>
                                          <input type="password" id="pswd" class="validate" name=" password" required>
                                      </div>
                                      <div class="input-field col s6 mb-5">
                                          <label for="lastName1">Confirm Password: <span class="red-text">*</span></label>
                                          <input type="password" id="cpswd" class="validate" name=" cpassword" required>
                                          <div class="registrationFormAlert mb-3" style="color:#ff4081;" id="CheckPasswordMatch"></div>
                                      </div>
                                      <small class=" form_error" style="color:#ff4081"></small>
                                      <div class="input-field col-12 ">
                                        <button class="btn waves-effect waves-light right submit" id="submit" type="submit" name="submit">Submit
                                          <i class="material-icons right">send</i>
                                        </button>
                                        <button type="button" class="btn waves-effect waves-light mr-3 float-right modal-close form_reset" id="" data-bs-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </form>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col  l12  mt-5">
                        <table id="table_id" class="display">
                          <thead>
                              <tr>
                              <th>Id</th>
                              <th >Name</th>
                              <th >Address</th>
                              <th>Gst No</th>
                              <th>Username</th>
                              <th>Data Of Joining</th>
                              <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                              </tr>
                          </tbody>
                        </table>                  
 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/preawebsite/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="/preawebsite/js/vendors.min.js"></script>
    <script src="/preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/js/plugins.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
    <script src="/preawebsite/js/scripts/form-validation.js"></script>
    <script src="/preawebsite/js/scripts/advance-ui-toasts.min.js"></script>
    <script src="/preawebsite/js/scripts/customizer.min.js"></script>
    <script src="/preawebsite/js/scripts/advance-ui-modals.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#table_id').DataTable({
        "ajax": "/preawebsite/fetch_admin.php"
    });
    $(document).on("click",".user_delete",function() {
      alert("click");
      $('#modal2').modal('open');
      var data = $(this).attr('data-id');
      $('#modal2 .modal-content').load('/preawebsite/model.php'
        );
    });
    //   $('.formValidate').submit(function(e){
    //     event.preventDefault();
    //     var formvalue = $(this).serialize();
    //     $.post('submit_storedata.php',formvalue,function(data){
          
    //       M.toast({
    //       html: 'Please wait data has been send!'
    //       });
    //       console.log(data);
    //       if(data == "username exist")
    //       { 
            
    //       M.toast({
    //       html: 'Username Exist!'
    //       }); 
    //       }
    //       else if(data == "success"){
    //         console.log('success');
    //         M.toast({
    //         html: 'Store has been registered.'
    //         });
    //         $('.formValidate').trigger('reset'); 
    //       }
    //       else if(data == "fails"){
          
    //         M.toast({
    //           html: 'Registration has been failed'
    //           }); 
    //       }; 

    //     });
    // });
    // $('#modal1').modal();
    //   $('#modal1').modal('open');
    //   $('#modal1').modal('close');
    //   $('#login_user').DataTable();
    // $('.role').click(function() 
    // {
    //     $('.role').not(this).prop('checked', false);
    // });
   

 });
  </script>
  </body>
</html>