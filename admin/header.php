<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Online Catering System</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/chart_custom_style1.js"></script>
      <script src="js/custom.js"></script>
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="header.php"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo/logo_icon.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>Admin</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Homepage</h4>
                  <ul class="list-unstyled components">
                  <li class="active">
                        
                        <a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard blue1_color"></i> <span>Food Category</span></a>
                        <ul class="collapse list-unstyled" id="category">
                           <li>
                              <a href="category.php">> <span>Add Category</span></a>
                           </li>
                           <li>
                              <a href="viewcategory.php">> <span>View Category</span></a>
                           </li>
                        </ul>
                     </li>

                     <li class="active">
                        
                        <a href="#item" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Food Item</span></a>
                        <ul class="collapse list-unstyled" id="item">
                           <li>
                              <a href="item.php">> <span>Add Food Item</span></a>
                           </li>
                           <li>
                              <a href="viewitem.php">> <span>View Food Item</span></a>
                           </li>
                        </ul>
                     </li>

                     <li class="active">
                        
                        <a href="#spcl" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Special Food</span></a>
                        <ul class="collapse list-unstyled" id="spcl">
                           <li>
                              <a href="special.php">> <span>Add Special Food</span></a>
                           </li>
                           <li>
                              <a href="viewspcl.php">> <span>View Special Food</span></a>
                           </li>
                        </ul>
                     </li>

                     
                     
                      
                      <li class="active">
                        
                        <a href="#orders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bar-chart-o purple_color2"></i> <span>View Orders</span></a>
                        <ul class="collapse list-unstyled" id="orders">
                           <li>
                              <a href="viewbooking.php">> <span>Pending Orders</span></a>
                           </li>
                           <li>
                              <a href="viewbooking2.php">> <span>Delivered Orders</span></a>
                           </li>
                           <li>
                              <a href="cancel.php">> <span>Cancelled Orders</span></a>
                           </li>
                        </ul>
                     </li>

                     <li><a href="rptbookingdate.php"><i class="fa fa-calendar green_color"></i> <span>Datewise Report</span></a></li>

                     <li><a href="logout.php"><i class="fa fa-clock-o orange_color"></i> <span>Logout</span></a></li>
                     
<?php
/*
                     <li><a href="rptbookingdate.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Datewise Report</span></a></li>
                     <li><a href="index.php"><i class="fa fa-clock-o orange_color"></i> <span>Logout</span></a></li><li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li>
                     <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Email</span></a></li>
                           <li><a href="calendar.html">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li>
                     <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                     <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
*/
?>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        
                        <div class="logo_section">
                           <a href="dashboard.php"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                              
                                 <li><a href="viewbooking.php"><i class="fa fa-bell-o"></i><span class="badge">7</span></a></li>
                                 
                                 <li><a href="viewbooking2.php"><i class="fa fa-envelope-o"></i><span class="badge">8</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/logo/logo_icon.png" alt="#" /><span class="name_user">Admin</span></a>
                                    <div class="dropdown-menu">
<?php
/*
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
*/
?>
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                       </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
            <br>
   </body>
</html>