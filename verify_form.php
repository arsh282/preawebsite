<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Toasts | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="/preawebsite/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/preawebsite/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
 
    
    <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
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
                     
                      <!-- Modal Structure -->
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
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
  <script type="text/javascript">
    $(document).ready(function(){

  });
