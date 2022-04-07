<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 include 'connection.php';
 $msg="";
 $email = $_GET['email'];
 if (isset($_GET['token']))
    {
      $email = $_GET['email'];
      $token = $_GET['token'];
      // echo $query = mysqli_query($conn,"SELECT * FROM login_user where email = '$email'");
      $query = "select * from  login_user where email = '$email' and token like '$token' "; 
      $result = mysqli_query($conn,$query);
      # Check if result greater then 0
      if (mysqli_num_rows($result) > 0){
        while($row= mysqli_fetch_assoc($result)){
          // echo "10";
          // $status=$row['status'];
          // print_r($status);
          if($row['status'] == 0){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              echo "12";
              $username=$_POST["username"];
              $password = md5($_POST['password']);
              $email = $_POST['email'];
              $address = $_POST['address'];
              $uid = $_POST['uid'];
              $pancard = $_POST['pancard'];
             
              $update="update login_user set username='$username',password='$password',email='$email',address='$address',uid='$uid',pancard='$pancard',role_id='2',status='1' WHERE email ='$email' and token like '$token'";
              //  echo  mysqli_query($conn, "update login_user set username='$username',password='$password',email='$email',address='$address',uid='$uid',pancard='$pancard',role_id='2' WHERE email ='$email' and token like '$token'");
              $run_update=mysqli_query($conn,$update);
            }
          }
        }
      }  
  
    }
      else
      {
      $msg = "Danger! Your something goes to wrong.";
    }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Form Wizard | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="/preawebsite/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/preawebsite/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../preawebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../preawebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../preawebsite/vendors/materialize-stepper/materialize-stepper.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../preawebsite/app-assets/css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../preawebsite/app-assets/css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../preawebsite/app-assets/css/pages/form-wizard.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <form class="formValidate" id="formValidate" method="post">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-5" style=" width: 50%; margin: 50px auto;">

          <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="padding:50px">
            <div class="card-body mx-4 ">
              <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text text-center mb-5"><strong>Personal Details</strong></h3>
                </div>
                <div class="input-field col-12 m6 s12 ">
                  <label for="firstName12">Username: <span class="red-text">*</span></label>
                  <input type="text" id="firstName12" name="username" class="validate" required>
              </div>
                <div class="registrationFormAlert mb-3" style="color:green;" id="">
                <?php
                  echo $msg;
                  ?>
                </div>
                  
              <div class="input-field col-12 m6 s12 mb-5">
                  <label for="lastName1">Password: <span class="red-text">*</span></label>
                  <input type="password" id="pswd" class="validate" name="password" required>
              </div>
              <div class="input-field col-12 m6 s12 mb-5">
                  <label for="lastName1">Confirm Password: <span class="red-text">*</span></label>
                  <input type="password" id="cpswd" class="validate" name=" cpassword" required>
                  <div class="registrationFormAlert mb-3" style="color:green;" id="CheckPasswordMatch"></div>
              </div>
              <div class="input-field col-12 m6 s12 mb-5">
                <label for="Email2">Email: <span class="red-text">*</span></label>
                <input type="email" class="validate" name="email" id="Email2" value="<?php echo $email; ?>" required>
              </div>
              <div class="input-field col-12 m6 s12 mb-5">
                <label for="firstName12">Address: <span class="red-text">*</span></label>
                <input type="text" id="firstName12" name="address" class="validate" required>
              </div>
              <div class="input-field col-12 m6 s12 mb-5">
                  <label for="firstName12">Pan Card: <span class="red-text">*</span></label>
                  <input type="text"  name="pancard" class="validate pan text-uppercase" maxlength="10" onchange="validatePanNumber(this)"required>
                  <div class="registrationFormAlert mb-3" style="color:green;" id="pancheck"></div>
              </div>
              <div class="input-field col-12 m6 s12 mb-5">
                  <label for="contactNum2">Uid: <span class="red-text">*</span></label>
                  <!-- <input type="number" class="validate" name=" uid" id="uid" maxlength="12" required> -->
                  <input type="text" class="validate adhaar_number  adhaar_number_check" id="adhaar_number" name="uid" value="" onkeyup="this.value=this.value.replace(/[^\d ]/,'')" required="" maxlength="14">
              </div>
              <div class="col-12 m6 s12 mb-5">
                  <button class="waves-effect waves-dark btn btn-primary" type="submit" name="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- END: Footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="../preawebsite/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../preawebsite/vendors/materialize-stepper/materialize-stepper.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../preawebsite/js/plugins.min.js"></script>
    <script src="../preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/app-assets/js/custom/custom-script.min.js"></script>
    <script src="/preawebsite/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../preawebsite/js/scripts/form-wizard.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
      // checkPasswordMatch
      function checkPasswordMatch() {
        var password = $("#pswd").val();
        var confirmPassword = $("#cpswd").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    };
    // pancard
    function validatePanNumber(pan){
      let pannumber = $(pan).val();
      var regex = /[a-zA-z]{5}\d{4}[a-zA-Z]{1}/;
      if (pannumber.match(regex)) {
        $("#pancheck").html(" Valid PAN number");}
      else {
        $("#pancheck").html(" Invalid PAN number");
          $(pan).val("");
      }};
    $(document).ready(function (){
    //   $( ".formValidate" ).submit(function( event ){
    //   // alert( "Handler for .submit() called." );
    //   event.preventDefault();
    //   var formValues= $(this).serialize();
    //   $.post("verify_form.php",formValues,function(data){
    //         console.log(formValues);
    //         $('.formValidate').trigger('reset');
            
    //   });
    // });
       $("#cpswd").keyup(checkPasswordMatch);
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
  });
 </script>
  </body>
</html>
