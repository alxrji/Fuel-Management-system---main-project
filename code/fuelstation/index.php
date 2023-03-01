<?php
include  '../config.php';
require 'fuel-session.php';
$name = $_SESSION['username'];
date_default_timezone_set('Asia/Kolkata');
$dt= date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>FuelStation</title>
  <link rel="icon" type="image/png" href="../admin/images/icon/logo.png" />

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.php">
              <img src="images/icon/logo.png" alt="FUEL" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="index.php">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="fuelview.php">
                <i class="fas fa-user-alt"></i>Fuel Details</a>
            </li>

          </ul>
        </div>
      </nav>

    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <!-- <a href="#">
          <img src="images/icon/logo.png" alt="Cool Admin" />
        </a> -->
        <img src="images/icon/logo.png" alt="" width="40px" height="40px">&ensp;
        <h1>
          FUEL
        </h1>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
          <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-users"></i><?php echo $name; ?></a>
            </li>
            <li class="active has-sub">
           
              <a class="js-arrow" href="index.php">
              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="orders.php">
                <i class="fas fa-users"></i>Orders</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="fuelview.php">
                <i class="fas fa-users"></i>Fuel Price</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="editprofile.php">
                <i class="fas fa-users"></i>Edit Profile</a>
            </li>
          
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div style="margin-left: 900px; margin-top: 1.8%;">
        <?php
          $log_id=$_SESSION['log_id'];
          
        $coin = "SELECT * FROM `user` WHERE log_id='$log_id'";
                      $result12 = mysqli_query($conn,$coin);
                     
                      $row12=mysqli_fetch_array($result12);
                      $coin=$row12['coin'];
                      
                      ?>
      <img src="images/icon/dollar.png" alt="" width="30px" height="30px"> <?php echo $coin ?>

      </div>
      <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <div class="header-button">
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu"  style="margin-left: 950px;">
                    <div class="content">
                      <a class="js-acc-btn" href="#"><?php echo $name; ?></a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="account-dropdown__footer">
                        <a href="logout.php">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
      
        
          <div class="container-fluid">
            <div class="row">

            <div class="row m-t-30" style="width: 100%;">
              <div class="col-md-12">
                <h1>Today's Price</h1>
                <!-- DATA TABLE-->
                <table class="table table-borderless table-data3">
                  <thead>
                      <tr>             
                          <th>Sl_no</th>
                          <th>Date</th>
                          <th>Fuel Type</th>
                          <th>Price</th>
                      </tr>
                  </thead>
                  <?php
                      $fuel1 = "SELECT * FROM `fuel` WHERE date='$dt'";
                      $result1 = mysqli_query($conn,$fuel1);
                      $i = 1;
                      while($row1=mysqli_fetch_array($result1)){
                  ?>
                  <tbody>
                      <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row1['date']; ?></td>
                          <td><?php echo $row1['fuel_type']; ?></td>
                          <td><?php echo $row1['price']; ?></td>
                          
                      </tr>
                  </tbody>
                  <?php    
                  $i++;}?>
                </table>
                <!-- END DATA TABLE-->
              </div>
            </div>

            </div>
           
            <div class="row m-t-30" style="width: 100%;">
              <div class="col-md-12">
                <!-- DATA TABLE-->
               
    <!-- END MAIN CONTENT -->
               
    <!-- END MAIN CONTENT -->
    <!-- END PAGE CONTAINER
    </div>

  </div> 

  <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>