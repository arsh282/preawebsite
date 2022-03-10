<?php
include('connection.php');
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!--data table -->
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!--validate jquery-->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
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
              Add Storeowner
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
                                <div class="row">
                                  <div class="input-field col-sm-6 ">
                                    <label for="uname" class="p-2">Name*</label>
                                    <input id="uname" name="name" type="text" data-error=".errorTxt1" required>
                                    <small class="errorTxt1"></small>
                                  </div>
                                    <div class="input-field col-sm-6  ">
                                      <label for="cemail" class="p-2">E-Mail*</label>
                                      <input id="cemail" type="email" name="email" data-error=".errorTxt2" required>
                                      <small class="errorTxt2"></small>
                                    </div>
                                    <div class="input-field col-sm-6  ">
                                      <label for="cpassword" class="p-2">Contact*</label>
                                      <input id="contact" type="tel" name="contact" data-error=".errorTxt4" maxlength="10" required>
                                      <small class="errorTxt4"></small>
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
                                        <small class="errorTxt8">
                                        
                                        </small>
                                      </div>
                                    </div>
                                    <div class="input-field col-12 ">
                                      <button class="btn waves-effect waves-light right submit" type="submit" name="submit">Submit
                                        <i class="material-icons right">send</i>
                                      </button>
                                      <button type="button" class="btn waves-effect waves-light mr-3 float-right" data-bs-dismiss="modal">Close</button>

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
        <div class="col-sm-12 col-md-12 col-lg-12  " style="padding-left:310px;margin-top:50px;">
          <div class="container">
              <div class="card">
                  <div class="card-content">
                      <div class="section section-data-tables">
                              <table id="login_user" class="display">
                              <thead>
                                  <tr>
                                  <th class="table_th">Sr No.</th>
                                  <th class="table_th">Name</th>
                                  <th class="table_th">Email</th>
                                  <th class="table_th">Contact No.</th>
                                  <th class="table_th">Uid</th>
                                  <th class="table_th">Pan Card</th>
                                  <th class="table_th">Gender</th>
                          
                                  <th class="table_th">Joining</th>
                                  <th class="table_th">Status</th>
                                  <th class="table_th">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  echo $sql = "SELECT * FROM login_user";
                                  $result = mysqli_query($conn, $sql);
                                  if ($count = mysqli_num_rows($result) > 0){
                                  $count=1;
                                  while($rows = mysqli_fetch_array($result)){
                                  ?>
                                  <tr>
                                  <td><?php echo $count ?></th>
                                  <td><?php echo $rows['name'];?></td>
                                  <td><?php echo $rows['email'];?></td>   
                                  <td><?php echo $rows['contact'];?></td>
                                  <td><?php echo $rows['uid'];?></td>
                                  <td><?php echo $rows['pancard'];?></td>
                                  <td><?php echo $rows['gender'];?></td>
                                  <td><?php echo $rows['createdate'];?></td>
                                  <td><?php if($rows['status']=="1") echo '<button type="button" class="btn btn-danger btn-sm" style="line-height: 1.44;padding: 6;font-size: 12px;"> Active</button>';else echo  '<button type="button" class="btn btn-success btn-sm" style="line-height: 1.44;padding: 6;font-size: 12px;">Deactive</button>';?></td>
                                  
                                  <td><a  class="btn btn-danger-sm" style="line-height: 2.44;padding: 1px 20px !important;font-size: 12px;color: #fff;background-color: #F1C40F;border-color: #dab10d;"  href="update-form.php?edit=<?php echo $rows['id']; ?>">Edit</a>
                                  <a class="btn btn-danger" style="line-height: 2.44;padding: 1px 20px !important;font-size: 12px;color: #fff;background-color:#dc3545;border-color: #dab10d;" href="delete.php?delete=<?php echo $rows['id']; ?>">Delete</a></td>
                                  <td><?php $rows['id'];?></td>
                                  <?php
                                  $_SESSION['id']= $rows['id'];
                                  ?>
                                  </tr>
                              </tbody>
                              </table>
                              <?php
                              $count++;
                                }
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
    <script src="/preawebsite/vendors/sweetalert"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#login_user').DataTable();
    $('.role').click(function() 
    {
        $('.role').not(this).prop('checked', false);
      });
   
      $(".formValidate").on("submit", function(e){
      e.preventDefault();
      var formValues= $(this).serialize();
      $.post("submit_admin.php",formValues,function(data, textStatus, jqXHR){
            console.log(formValues);
            $('.formValidate').trigger('reset');
            swal("Here's a message!");
    });
  });
    });
  </script>
  </body>
</html>