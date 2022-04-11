<?php
include'connection.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$msg='';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $uid=$_POST['uid'];
    $dob = $_POST['dob'];
    $doj=$_POST['doj'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $sname=$_POST['store_name'];
    $role=$_POST['role'];
    print_r($_POST);
    if(empty($name) && empty($address) && empty($uid) && empty($pancard))
    {
     $msg= '<b>Please fill out all fields.</b>';
    }
    else
    {
         $check=mysqli_num_rows(mysqli_query($conn,"SELECT uid FROM user_notlogin WHERE uid ='$uid'"));
        if($check>0)
        {
        $msg = "Uid already exist";
        }else{
       
        $insert="INSERT INTO user_notlogin(name,address,uid,dob,doj,contact,gender,store_id,role_id) VALUES ('$name','$address','$uid','$dob','$doj','$contact','$gender','$sname','$role')";
        $result=mysqli_query($conn,$insert);
        if($result){
          echo "success";
          }
        }
    }
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
    <title>Form Layouts | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="<?=base_url;?>/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url;?>/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/vendors/sweetalert">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url;?>/app-assets/css/custom/custom.css">

  </head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <div class="row">
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
                  <form class="formValidate" id="Form-advance" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="row ">
                        <div class="input-field col-sm-6 mt-3">
                        <label for="name" class="p-2">Name*</label>
                        <input id="name" name="name" type="text" data-error=".errorTxt1" required>
                        <small class="errorTxt1"></small>
                        </div>
                        <div class="input-field col-sm-6 mt-3">
                        <label for="address" class="p-2">Address*</label>
                        <input id="address" name="address" type="text" data-error=".errorTxt1" required>
                        <small class="errorTxt1"></small>
                        </div>
                        <div class="input-field col-sm-6  mt-3">
                        <label for="contactNum2">Uid: <span class="red-text">*</span></label>
                        <input type="text" class="validate adhaar_number  adhaar_number_check" id="adhaar_number" name="uid" value="" onkeyup="this.value=this.value.replace(/[^\d ]/,'')" required="" maxlength="14">
                        </div>
                        <div class="input-field col-sm-6 mt-3">
                        <input type="text" id="doj" class="datepicker" name="doj">
                        <label for="dob">Date Of Joining</label>
                        </div>
                        <div class="input-field col-sm-6 mt-3">
                        <input type="text" class="datepicker" id="dob" name="dob">
                        <label for="dob">Date Of Birth</label>
                        </div>
                        <div class="input-field col-sm-6 mt-3 ">
                        <label for="cpassword" class="p-2">Contact*</label>
                        <input id="contact" type="tel" name="contact" data-error=".errorTxt4" maxlength="10" required>
                        <small class="errorTxt4"></small>
                        </div>
                        <div class="col-sm-12  ">
                          <p class="p-2"> Gender </p>
                          <p>
                            <label>
                              <input name="gender" class="role" type="radio" checked value="Male"/>
                              <span>Male</span>
                            </label>
                          </p>
        
                          <label>
                            <input name="gender" type="radio" class="role" value="Female"/>
                            <span>Female</span>
                          </label>
                          <div class="input-field">
                            <small class="errorTxt8">
                            
                            </small>
                          </div>
                        </div>
                        <div class="input-field col-6 m6 mt-3">
                          <p> <label>Role</label></p>
                          <p>
                              <label>
                              <?php
                              $q1="select * from roles where role_id='3'";
                              $run=mysqli_query($conn,$q1);
                              $row=mysqli_fetch_array($run);
                              ?>
                              <input type="radio" name="role" value="<?php echo $row['role_id'] ?>">
                              <span>Account</span>
                              </label>
                          </p>
                          <p>
                              <label>
                              <?php
                              $q1="select * from roles where role_id='6'";
                              $run=mysqli_query($conn,$q1);
                              $row=mysqli_fetch_array($run);
                              ?>
                              <input type="radio" name="role" value="<?php echo $row['role_id'] ?>">
                              <span>Bdm</span>
                              </label>
                          </p>
                          <p>
                              <label>
                              <?php
                              $q1="select * from roles where role_id='4'";
                              $run=mysqli_query($conn,$q1);
                              $row=mysqli_fetch_array($run);
                              ?>
                              <input type="radio" name="role" value="<?php echo $row['role_id'] ?>">
                              <span>Manager</span>
                              </label>
                          </p>
                          <p>
                              <label>
                              <?php
                              $q1="select * from roles where role_id='5'";
                              $run=mysqli_query($conn,$q1);
                              $row=mysqli_fetch_array($run);
                              ?>
                              <input type="radio" name="role" value="<?php echo $row['role_id'] ?>">
                              <span>Assitant Manager</span>
                              </label>
                          </p>
                          <p>
                              <label>
                              <?php
                              $q1="select * from roles where role_id='7'";
                              $run=mysqli_query($conn,$q1);
                              $row=mysqli_fetch_array($run);
                              ?>
                              <input type="radio" name="role" value="<?php echo $row['role_id'] ?>">
                              <span>House Keeping</span>
                              </label>
                          </p>
                          <p>
                              <label>
                              <?php
                              $q1="select * from roles where role_id='8'";
                              $run=mysqli_query($conn,$q1);
                              $row=mysqli_fetch_array($run);
                              ?>
                              <input type="radio" name="role" value="<?php echo $row['role_id'] ?>">
                              <span>Salesman</span>
                              </label>
                          </p>
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
                            <option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>;
                            <?php
                            }
                            ?>
                          </select>
                      </div>
                        <div class="error" style="color: #ff5a92;"></div>
                        <div class="input-field col-12 ">
                        <button class="btn waves-effect waves-light right submit" type="submit" name="submit">Submit
                            <i class="material-icons right">send</i>
                        </button>
                        <button class="btn waves-effect waves-light right modal-action modal-close mr-3" >Close
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

    <script src="<?=base_url;?>vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=base_url;?>js/vendors.min.js"></script>
    <script src="<?=base_url;?>app-assets/js"></script>
    <script src="<?=base_url;?>js/search.min.js"></script>
    <script src="<?=base_url;?>js/plugins.min.js"></script>
    <script src="<?=base_url;?>app-assets/js/scripts/advance-ui-media.min.js"></script>
    <script src="<?=base_url;?>js/custom/custom-script.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>

    <script>
    $(document).ready(function(){
    $('.modal').modal();
    $('.gender').click(function() 
        { 
            $('.gender').not(this).prop('checked', false);
            // alert('helo');
        });
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
    </script>
  </body>
</html>