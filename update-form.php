<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 include 'connection.php';
 $msg="";
 if (isset($_POST['update'])) 
 {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $uid = $_POST['uid'];
   $pancard = $_POST['pancard'];
   $contact = $_POST['contact'];
   $id = $_POST['id'];
   $sql="UPDATE admin_user SET `name`='$name',`email`='$email',`address`='$address',`uid`='$uid',`pancard`='$pancard' ,`contact`='$contact' WHERE `id`='$id'";
    $result = $conn->query($sql); 
        if ($result == TRUE) {
            $msg = "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
 }
$id= $_SESSION['id'];
 $result = mysqli_query($conn,"SELECT * FROM admin_user WHERE id='$id'");
 $row= mysqli_fetch_array($result);
?>
<html class="loading" lang="en" data-textdirection="ltr">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!--data table -->
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!--validate jquery-->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
  </head>

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
          <div class="col-sm-9 col-md-9 col-lg-9 mt-5">
            <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <div class="card d-flex justify-content-center" style="margin: 50 auto;padding-bottom: 30px;box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
             <h3 class="card-title" style="background-color: #ff4081;padding: 20px;font-size: 22px;font-weight: 900;color:white">UPDATE FORM</h3>
            <div class="row" style="margin: 0 auto;padding: 50px 0;">
              <form class="formValidate" id="formValidate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="input-field col-sm-6  ">
                  <label for="name" class="p-2">Name *</label>
                  <input id="name" type="text" name="name" data-error=".errorTxt4" value="<?php echo $row['name']; ?>">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <small class="errorTxt4"></small>
                </div>
                <div class="input-field col-sm-6  ">
                  <label for="saddress" class="p-2">Email*</label>
                  <input id="email" type="email" name="email" data-error=".errorTxt4" value="<?php echo $row['email']; ?>">
                  <small class="errorTxt4"></small>
                </div>
                <div class="input-field col-sm-6  ">
                  <label for="address" class="p-2">Address *</label>
                  <input id="address" type="text" name="address" data-error=".errorTxt2" value="<?php echo $row['address']; ?>">
                  <small class="errorTxt2"></small>
                </div>
                <div class="input-field col-sm-6 ">
                  <label for="uid" class="p-2">uid*</label>
                  <input id="uid" name="uid" type="number" data-error=".errorTxt1" value="<?php echo $row['uid']; ?>">
                  <small class="errorTxt1" ></small>
                </div>
                
                <div class="input-field col-sm-6  ">
                  <label for="pancard" class="p-2">Pan Card*</label>
                  <input id="pancard" type="number" name="pancard" value="<?php echo $row['pancard']; ?>">
                  <small class="errorTxt3"></small>
                </div>
                <div class="input-field col-sm-6  ">
                  <label for="contact" class="p-2">Contact No. *</label>
                  <input id="contact" type="number" name="contact" data-error=".errorTxt3" value="<?php echo $row['contact']; ?>">
                  
                </div>
                <div class="row">
                  <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div>
                <?php
                echo $msg;
                ?>
                </div>
                <div class="input-field col-12 ">
                  <button class="btn waves-effect waves-light right submit" type="submit" name="update">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </form>

        </div>
          </div>
        </form>
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
    <!--validate-->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    </body>
</html>

