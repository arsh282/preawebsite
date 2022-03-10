<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Aug 2021 17:53:57 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard eCommerce | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="/preawebsite/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/preawebsite/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/preawebsite/vertical-modern-menu-template/style.min.css">
    <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="/preawebsite/app-assets/css/custom/custom.css">

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize" data-search="template-list">
              <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
              <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="#" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
              <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
            </ul>
            <ul class="dropdown-content" id="translation-dropdown">
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
              <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
              <li><a class="grey-text text-darken-1" href="/preawebsite/logout.php"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
   
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>
    <a href="#" data-target="theme-cutomizer-out" class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i class="material-icons">settings</i></a>
    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
       <div class="col s12">
          <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
          <h5 class="theme-cutomizer-title">Theme Customizer</h5>
          <p class="medium-small">Customize & Preview in Real Time</p>
          <div class="menu-options">
             <h6 class="mt-6">Menu Options</h6>
             <hr class="customize-devider" />
             <div class="menu-options-form row">
                <div class="input-field col s12 menu-color mb-0">
                   <p class="mt-0">Menu Color</p>
                   <div class="gradient-color center-align">
                      <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                      <span
                         class="menu-color-option gradient-45deg-purple-deep-orange"
                         data-color="gradient-45deg-purple-deep-orange"
                      ></span>
                      <span
                         class="menu-color-option gradient-45deg-light-blue-cyan"
                         data-color="gradient-45deg-light-blue-cyan"
                      ></span>
                      <span
                         class="menu-color-option gradient-45deg-purple-amber"
                         data-color="gradient-45deg-purple-amber"
                      ></span>
                      <span
                         class="menu-color-option gradient-45deg-purple-deep-purple"
                         data-color="gradient-45deg-purple-deep-purple"
                      ></span>
                      <span
                         class="menu-color-option gradient-45deg-deep-orange-orange"
                         data-color="gradient-45deg-deep-orange-orange"
                      ></span>
                      <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                      <span
                         class="menu-color-option gradient-45deg-indigo-light-blue"
                         data-color="gradient-45deg-indigo-light-blue"
                      ></span>
                      <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                   </div>
                   <div class="solid-color center-align">
                      <span class="menu-color-option red" data-color="red"></span>
                      <span class="menu-color-option purple" data-color="purple"></span>
                      <span class="menu-color-option pink" data-color="pink"></span>
                      <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                      <span class="menu-color-option cyan" data-color="cyan"></span>
                      <span class="menu-color-option teal" data-color="teal"></span>
                      <span class="menu-color-option light-blue" data-color="light-blue"></span>
                      <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                      <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                   </div>
                </div>
                <div class="input-field col s12 menu-bg-color mb-0">
                   <p class="mt-0">Menu Background Color</p>
                   <div class="gradient-color center-align">
                      <span
                         class="menu-bg-color-option gradient-45deg-indigo-blue"
                         data-color="gradient-45deg-indigo-blue"
                      ></span>
                      <span
                         class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                         data-color="gradient-45deg-purple-deep-orange"
                      ></span>
                      <span
                         class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                         data-color="gradient-45deg-light-blue-cyan"
                      ></span>
                      <span
                         class="menu-bg-color-option gradient-45deg-purple-amber"
                         data-color="gradient-45deg-purple-amber"
                      ></span>
                      <span
                         class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                         data-color="gradient-45deg-purple-deep-purple"
                      ></span>
                      <span
                         class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                         data-color="gradient-45deg-deep-orange-orange"
                      ></span>
                      <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                      <span
                         class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                         data-color="gradient-45deg-indigo-light-blue"
                      ></span>
                      <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                   </div>
                   <div class="solid-color center-align">
                      <span class="menu-bg-color-option red" data-color="red"></span>
                      <span class="menu-bg-color-option purple" data-color="purple"></span>
                      <span class="menu-bg-color-option pink" data-color="pink"></span>
                      <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                      <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                      <span class="menu-bg-color-option teal" data-color="teal"></span>
                      <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                      <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                      <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                   </div>
                </div>
                <div class="input-field col s12">
                   <div class="switch">
                      Menu Dark
                      <label class="float-right"
                         ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                      ></label>
                   </div>
                </div>
                <div class="input-field col s12">
                   <div class="switch">
                      Menu Collapsed
                      <label class="float-right"
                         ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                      ></label>
                   </div>
                </div>
                <div class="input-field col s12">
                   <div class="switch">
                      <p class="mt-0">Menu Selection</p>
                      <label>
                         <input
                            class="menu-selection-radio with-gap"
                            value="sidenav-active-square"
                            name="menu-selection"
                            type="radio"
                         />
                         <span>Square</span>
                      </label>
                      <label>
                         <input
                            class="menu-selection-radio with-gap"
                            value="sidenav-active-rounded"
                            name="menu-selection"
                            type="radio"
                         />
                         <span>Rounded</span>
                      </label>
                      <label>
                         <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                         <span>Normal</span>
                      </label>
                   </div>
                </div>
             </div>
          </div>
          <h6 class="mt-6">Navbar Options</h6>
          <hr class="customize-devider" />
          <div class="navbar-options row">
             <div class="input-field col s12 navbar-color mb-0">
                <p class="mt-0">Navbar Color</p>
                <div class="gradient-color center-align">
                   <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                   <span
                      class="navbar-color-option gradient-45deg-purple-deep-orange"
                      data-color="gradient-45deg-purple-deep-orange"
                   ></span>
                   <span
                      class="navbar-color-option gradient-45deg-light-blue-cyan"
                      data-color="gradient-45deg-light-blue-cyan"
                   ></span>
                   <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                   <span
                      class="navbar-color-option gradient-45deg-purple-deep-purple"
                      data-color="gradient-45deg-purple-deep-purple"
                   ></span>
                   <span
                      class="navbar-color-option gradient-45deg-deep-orange-orange"
                      data-color="gradient-45deg-deep-orange-orange"
                   ></span>
                   <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                   <span
                      class="navbar-color-option gradient-45deg-indigo-light-blue"
                      data-color="gradient-45deg-indigo-light-blue"
                   ></span>
                   <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                </div>
                <div class="solid-color center-align">
                   <span class="navbar-color-option red" data-color="red"></span>
                   <span class="navbar-color-option purple" data-color="purple"></span>
                   <span class="navbar-color-option pink" data-color="pink"></span>
                   <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                   <span class="navbar-color-option cyan" data-color="cyan"></span>
                   <span class="navbar-color-option teal" data-color="teal"></span>
                   <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                   <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                   <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                </div>
             </div>
             <div class="input-field col s12">
                <div class="switch">
                   Navbar Dark
                   <label class="float-right"
                      ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                   ></label>
                </div>
             </div>
             <div class="input-field col s12">
                <div class="switch">
                   Navbar Fixed
                   <label class="float-right"
                      ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                   ></label>
                </div>
             </div>
          </div>
          <h6 class="mt-6">Footer Options</h6>
          <hr class="customize-devider" />
          <div class="navbar-options row">
             <div class="input-field col s12">
                <div class="switch">
                   Footer Dark
                   <label class="float-right"
                      ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                   ></label>
                </div>
             </div>
             <div class="input-field col s12">
                <div class="switch">
                   Footer Fixed
                   <label class="float-right"
                      ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                   ></label>
                </div>
             </div>
          </div>
       </div>
    </div>
  
    <!-- END: Footer-->
     <!-- BEGIN VENDOR JS-->
    <script src="/preawebsite/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="/preawebsite/js/plugins.min.js"></script>
    <script src="/preawebsite/js/search.min.js"></script>
    <script src="/preawebsite/js/custom/custom-script.min.js"></script>
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Aug 2021 17:53:59 GMT -->
</html>