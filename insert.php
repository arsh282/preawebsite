<?php
include'connection.php';
print_r($_POST);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=md5($_POST['email']);
    $roles  = $_POST['roles'];
    $gender = $_POST['gender'];
      if(empty($username) && empty($email) && empty($password) && empty($cpassword))
      {
       $msg= '<b>Please fill out all fields.</b>';
      }
     else{
      echo $insert="INSERT INTO users (username,email,password,role_id,gender) VALUES ('$name','$email','$password','$roles','$gender')";
      $result=mysqli_query($conn,$insert);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="apple-touch-icon" href="/preawebsite/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/Awebsite/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/Awebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/Awebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/Awebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/Awebsite/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">
    
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <form class="formValidate" id="formValidate" method="post">
        <div class="row">
          <div class="input-field col-sm-6 ">
            <label for="uname" class="p-2">Name*</label>
            <input id="uname" name="name" type="text" data-error=".errorTxt1">
            <small class="errorTxt1"></small>
          </div>
          <div class="input-field col-sm-6  ">
            <label for="password" class="p-2">Password *</label>
            <input id="password" type="password" name="password" data-error=".errorTxt3">
            <small class="errorTxt3"></small>
          </div>
          <div class="input-field col-sm-6  ">
            <label for="cemail" class="p-2">E-Mail *</label>
            <input id="cemail" type="email" name="email" data-error=".errorTxt2">
            <small class="errorTxt2"></small>
          </div>
          <div class="input-field col-sm-6  ">
            <label for="cpassword" class="p-2">Confirm Password *</label>
            <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
            <small class="errorTxt4"></small>
          </div>
          <div class="col s12 m12 l12 ml-2 mt-1">
            <label>
            <input type="checkbox" name="roles" value="1" class="role">
            <span>Wholesaler</span>
            </label><br><br>
            <label>
              <input type="checkbox" name="roles" value="2" class="role">
              <span>Retailer</span>
            </label>
          </div>
          <div class="col-sm-12  ">
            <p class="p-2"> Gender </p>
            <p>
              <label>
                <input name="gender" type="radio" checked value="Male"/>
                <span>Male</span>
              </label>
            </p>
    
            <label>
              <input name="gender" type="radio" value="Female"/>
              <span>Female</span>
            </label>
            <div class="input-field">
              <small class="errorTxt8"></small>
            </div>
          </div>
          <div class="col s12">
            <label for="tnc_select" class="p-2">T&C *</label>
            <p>
              <label>
                <input type="checkbox" id="tnc_select" />
                <span>Please agree to our policies</span>
              </label>
            </p>
            <div class="input-field">
              <small class="errorTxt6"></small>
            </div>
          </div>
          <div class="input-field col-12 ">
            <button class="btn waves-effect waves-light right submit" type="submit" name="submit">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
  </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/Awebsite/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="/Awebsite/js/vendors.min.js"></script>
    <script src="/Awebsite/js/search.min.js"></script>
    <script src="/Awebsite/js/plugins.min.js"></script>
    <script src="/Awebsite/js/custom/custom-script.min.js"></script>
    <script src="/Awebsite/app-assets/js/scripts/form-validation.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.role').click(function() 
    {
        $('.role').not(this).prop('checked', false);
      });
    });
  </script>
  </body>
</html>