<?php
include('connection.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
if(isset($_GET['email']) && isset($_GET['token'])){
    $email = $_GET['email'];
    $Token = $_GET['token'];
    $q = "select * from  login_user where email = '$email' and token like '$Token' "; 
    $result = mysqli_query($conn,$q);
    if(mysqli_num_rows($result) > 0){  // select query result true  fetach the row data
     $row = current(mysqli_fetch_all($result, MYSQLI_ASSOC));
     if($row['status'] == 0){ 
            $updateQuery = "update login_user set status = 1 where email = '$email' and token = '$Token' ";
            $resultUpdate  = mysqli_query($conn,$updateQuery);
        }else{
              echo "Your token is already verified";
        }
    }else{  // no token found in database 
        echo "Your token is expired wrong tokens";
    }
}
if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$gst  = $_POST['gst'];
$storename = $_POST['storename'];
$saddress = $_POST['saddress'];
$semail = $_POST['semail'];
$scontact = $_POST['scontact'];
$roles = $_POST['roles'];
echo $sql = "update login_user set username='$username',password='$password' WHERE storename='$storename';INSERT INTO storedetail( `gst`, `storename`, `saddress`, `scontact`,`semail`) VALUES( '$gst', '$storename', '$saddress', '$scontact', '$semail');";
$result=mysqli_multi_query($conn,$sql);
if ($result) {
    echo "Registration successfull.";
  }
  else
  {
      echo 'hello';
  }
}
?>
  

        <!--$insert="INSERT INTO admin (ownername,storename,address,email,contact,gender,token) VALUES ('$ownername','$storename','$address','$email','$contact','$gender','$token')";-->

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
    <link rel="shortcut icon" type="image/x-icon" href="/preawebsite/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">
    
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <div style="width:70%; margin:0 auto;" class="row" >
      <div class="col shadow-lg p-3 mb-5 bg-white rounded mt-5">
        <div id="validations" class="card card-tabs shadow-none border-0">
          <div class="card-content">
              <h4 class="header text-center" style="font-weight: 900;font-size: 25px;text-transform:none">Personal Info</h4>
            <div id="view-validations">
              <form class="formValidate" id="formValidate" method="post">
                <div class="row">
                  <div class="input-field col-sm-6 ">
                    <label for="uname" class="p-2">Username*</label>
                    <input id="uname" name="username" type="text" data-error=".errorTxt1">
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="input-field col-sm-6 ">
                    <label for="password" class="p-2">Password*</label>
                    <input id="password" name="password" type="password" data-error=".errorTxt1">
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="input-field col-sm-6 ">
                    <label for="conpassword" class="p-2">Confirm Password*</label>
                    <input id="conpassword" name="conpassword" type="password" data-error=".errorTxt1">
                    <small class="errorTxt1"></small>
                  </div>
                   <div class="input-field col-sm-6  ">
                    <label for="gst" class="p-2">Gst No. *</label>
                    <input id="gst" type="number" name="gst" data-error=".errorTxt4">
                    <small class="errorTxt4"></small>
                  </div>
                  <div class="input-field col-sm-6 ">
                    <label for="uname" class="p-2">Store Name*</label>
                    <input id="uname" name="storename" type="text" data-error=".errorTxt1">
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="input-field col-sm-6 ">
                    <label for="uname" class="p-2">Store Adress*</label>
                    <input id="uname" name="saddress" type="text" data-error=".errorTxt1">
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="input-field col-sm-6  ">
                    <label for="semail" class="p-2">Store E-Mail *</label>
                    <input id="semail" type="email" name="semail" data-error=".errorTxt2">
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="input-field col-sm-6  ">
                    <label for="scontact" class="p-2">Store Contact *</label>
                    <input id="contact" type="tel" name="scontact" data-error=".errorTxt4">
                    <small class="errorTxt4"></small>
                  </div>
                
                  <div class="col-sm-12  ">
                    <p class="p-2"> Roles </p>
                    <p>
                      <label>
                        <input name="roles" type="radio" checked value="admin"/>
                        <span>admin</span>
                      </label>
                    </p>
                    <div class="input-field">
                      <small class="errorTxt8"></small>
                    </div>
                  </div>
                  
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
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/preawebsite/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="/preawebsite/js/vendors.min.js"></script>
    <script src="/preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/js/plugins.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
    <script src="/preawebsite/app-assets/js/scripts/form-validation.js"></script>
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