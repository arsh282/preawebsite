<?php
include'connection.php';
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $uid=$_POST['uid'];
    $pancard  = $_POST['pancard'];
    $dob = $_POST['dob'];
    $doj=$_POST['doj'];
    $role=$_POST['role'];
    $sname=$_POST['sname'];
    $contact=$_POST['contact'];
    if(empty($name) && empty($address) && empty($uid) && empty($pancard))
    {
     $msg= '<b>Please fill out all fields.</b>';
    }
     else{
    echo $insert="INSERT INTO users (name,address,uid,pancard,dob,doj,contact,gender,role_id,store_id) VALUES ('$name','$address','$uid','$pancard','$dob','$doj','$contact','$role','$sname')";
      $result=mysqli_query($conn,$insert);
      if($result){
        echo "success";
      }
    }
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
    <title>Form Validation | Materialize - Material Design Admin Template</title>
    <!-- CSS only -->

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
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/sweetalert">
    <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">
    <!--data table -->
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
      .datepicker-modal{
         z-index: 1600 !important;
      }
    </style>
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
              Add User
            </button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px; width: 40%;">
              <div class="modal-dialog modal-xl modal-dialog-scrollable m-0">
                <div class="modal-content p-0">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Storeowner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col">
                        <div id="validations" class="card card-tabs shadow-none border-0">
                          <div class="card-content">
                            <div id="view-validations">
                              <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                  <div class="input-field col-sm-6 ">
                                    <label for="name" class="p-2">Name*</label>
                                    <input id="name" name="name" type="text" data-error=".errorTxt1" required>
                                    <small class="errorTxt1"></small>
                                  </div>
                                  <div class="input-field col-sm-6 ">
                                    <label for="address" class="p-2">Address*</label>
                                    <input id="address" name="address" type="text" data-error=".errorTxt1" required>
                                    <small class="errorTxt1"></small>
                                  </div>
                                  <div class="input-field col-sm-6">
                                    <label for="contactNum2">Uid: <span class="red-text">*</span></label>
                                    <input type="text" class="validate adhaar_number  adhaar_number_check" id="adhaar_number" name="uid" value="" onkeyup="this.value=this.value.replace(/[^\d ]/,'')" required="" maxlength="14">
                                 </div>
                                  <div class="input-field col-sm-6">
                                    <label for="pancard">Pan Card: <span class="red-text">*</span></label>
                                    <input type="text"  name="pancard" class="validate pan text-uppercase" maxlength="10" onchange="validatePanNumber(this)"required>
                                    <div class="registrationFormAlert mb-3" style="color:green;" id="pancheck"></div>
                                  </div>
                                  <div class="input-field col-sm-6">
                                    <input type="text" id="doj" class="datepicker" name="doj">
                                    <label for="dob">Date Of Joining</label>
                                  </div>
                                  <div class="input-field col-sm-6">
                                      <input type="text" class="datepicker" id="dob" name="dob">
                                    <label for="dob">Date Of Birth</label>
                                  </div>
                                  <div class="input-field col-sm-6  ">
                                      <label for="cpassword" class="p-2">Contact*</label>
                                      <input id="contact" type="tel" name="contact" data-error=".errorTxt4" maxlength="10" required>
                                      <small class="errorTxt4"></small>
                                    </div>
                                  
                                <div class="input-field col-12">
                                  <?php
                                    $query="SELECT name,id FROM stores order by name";
                                    $result = mysqli_query($conn,$query); 
                                    $count=mysqli_num_rows($result);
                                  ?> 
                                  <option value="" disabled selected>Choose Store Name</option>
                                  <select name="store_name" id="sname">
                                    <?php
                                    for($i=1;$i<=$count;$i++){
                                      $row=mysqli_fetch_array($result);
                                    
                                    ?>
                                    
                                    
                                    <option value="<?php $row["id"]?>"><?php echo $row["name"]?></option>";
                                  <?php
                                  }
                                  ?>
                                  </select>
                                  <label>Select Store</label>
                                  </php
                                  }
                                  ?>
                                </div>
                                <div class="error" style="color: #ff5a92;"></div>
                                <div class="input-field col-12 ">
                                <button class="btn waves-effect waves-light right submit" type="submit" name="submit">Submit
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
    <script src="/preawebsite/vendors/sweetalert"></script>
  <script type="text/javascript">
   // checkPasswordMatch
   function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    };
    // pancard
  function validatePanNumber(pan) {
      let pannumber = $(pan).val();
      var regex = /[a-zA-z]{5}\d{4}[a-zA-Z]{1}/;
      if (pannumber.match(regex)) {
        $("#pancheck").html(" Valid PAN number");}
      else {
        $("#pancheck").html(" Invalid PAN number");
          $(pan).val("");
      }};
    $(document).ready(function () {
      $('.role').click(function() 
      {
        $('.role').not(this).prop('checked', false);
      });
      
      $('.datepicker').datepicker();
      $("#cpassword").keyup(checkPasswordMatch);
      $('#adhaar_number').keypress( function(e) {
          var val = $(this).val();
          var newval = '';
          val = val.replace(/\s/g, '');
          for (var i = 0; i < val.length; i++) {
            if (i % 4 == 0 && i > 0) newval = newval.concat(' ');
            newval = newval.concat(val[i]);
          }
          $(this).val(newval);
        });
      $('.submit').click(function(){
        $('#uname, #password, #cpassword, #name,#address, #uid, #pancard, #doj,#dob, .role, #sname').each(function() {
        if ($(this).val() == '') {
          $('.error').html('All field required');
        }
      });
      });
      });
  </script>
  </body>
</html>