<?php
include'connection.php';
print_r($_POST);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $roles  = $_POST['roles'];
      if(empty($username) && empty($email) && empty($password) && empty($cpassword))
      {
       $msg= '<b>Please fill out all fields.</b>';
      }
      else
      {
      $check=mysqli_num_rows(mysqli_query($conn,"SELECT username FROM users WHERE username ='$username'"));
      if($check>0)
      {
        $msg = "Username already exist";
      }else{
      $insert="INSERT INTO users (username,email,password,role_id) VALUES ('$username','$email','$password','$roles')";
      // $insert="INSERT INTO users (username,email,password,role_id) VALUES ('$username','$email','$password',SELECT role_id from roles WHERE role_id='$roles')";
      $result=mysqli_query($conn,$insert);
    
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
    <title>User Register | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/cs/register.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/cs/login.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- END: Custom CSS-->
    <Style>
      
      .roles{  
      font-size: 18px; 
     display: inline-block;
     }
     .icon{
    font-size: 2rem;
    top: 0.5rem;
    width: 3rem;
    -webkit-transition: color .2s;
    transition: color .2s;
    padding-top: 20px !important;

     }
    </Style>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column register-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container">
          <div id="register-page" class="row">
            <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
              <form class="login-form" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <h5 class="ml-4">Register</h5>
                    <p class="ml-4">Join to our community now !</p>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                    <input id="username" type="text" name="username">
                    <label for="username" class="center-align">Username</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">mail_outline</i>
                    <input id="email" type="email" name="email">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">lock_outline</i>
                    <input id="password" type="password">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">lock_outline</i>
                    <input id="password-again" type="password" name="password">
                    <label for="password-again">Password again</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="col s12 m12 l12 ml-2 mt-1">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <span class="roles">Roles</span>
                </div>
                <div class="col s12 m12 l12 ml-2 mt-1">
                 <label>
                      <input type="checkbox" name="roles" value="1">
                      <span>Wholesaler</span>
                    </label><br><br>
                    <label>
                      <input type="checkbox" name="roles" value="2">
                      <span>Retailer</span>
                    </label>
                </div>
                </div>
                <div class="row">
                  <div class="registrationFormAlert" style="color:gray;" id="CheckPasswordMatch"></div>
                <?php
                echo $msg;
                ?>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <button  name="submit"  type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</button> 
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <p class="margin medium-small"><a href="/preawebsite/login.php">Already have an account? Login</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <script src="/preawebsite/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="/preawebsite/js/plugins.min.js"></script>
    <script src="/preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });
});
    </script>

  </body>
</html>