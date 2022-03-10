<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include 'connection.php';

?>
<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>DataTable | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
              <!-- Page Length Options -->
              <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <h4 class="card-title">Page Length Options</h4>
                      <div class="row">
                        <div class="col s12">
                          <table id="page-length-option" class="display">
                            <?php
                            echo $sql = "SELECT * FROM stores  ";
                            $result = mysqli_query($conn, $sql);
                            if($result){
                              echo'success';
                            }
                            if ($count = mysqli_num_rows($result) > 0){
                            // $count = mysqli_num_rows($result);
                            // // if(mysqli_num_rows($result) > 0){
                            // if($count>0){
                            ?>
                            <thead>
                              <tr>
                                <th class="table_th">Name</th>
                                <th class="table_th">Position</th>
                                <th class="table_th">Office</th>
                                <th class="table_th">Age</th>
                                <th class="table_th">Start date</th>
                                <th class="table_th">Salary</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $count=0;
                              while($rows = mysqli_fetch_array($result)){
                              ?>
                              <tr>
                                <td><?php echo $count ?></th>
                                <td><?php echo $rows['username'];?></td>
                              </tr>
                            <?php
                            $count++;
                            }
                            ?>


                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                              </tr>
                            </tfoot>
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
            </div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <script src="/preawebsite/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="/preawebsite/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="/preawebsite/vendors/data-tables/js/dataTables.select.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/preawebsite/app-assets/js/scripts/data-tables.min.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="/preawebsite/js/vendors.min.js"></script>
    <script src="/preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/js/plugins.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
  </body>
</html>
