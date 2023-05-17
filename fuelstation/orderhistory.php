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
  <!-- <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">
  <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        /* My Account */
        .payments-item img.mr-3 {
            width: 47px;
        }

        .order-list .btn {
            border-radius: 2px;
            min-width: 121px;
            font-size: 13px;
            padding: 7px 0 7px 0;
        }

        .osahan-account-page-left .nav-link {
            padding: 18px 20px;
            border: none;
            font-weight: 600;
            color: #535665;
        }

        .osahan-account-page-left .nav-link i {
            width: 28px;
            height: 28px;
            background: #535665;
            display: inline-block;
            text-align: center;
            line-height: 29px;
            font-size: 15px;
            border-radius: 50px;
            margin: 0 7px 0 0px;
            color: #fff;
        }

        .osahan-account-page-left .nav-link.active {
            background: #f3f7f8;
            color: #282c3f !important;
        }

        .osahan-account-page-left .nav-link.active i {
            background: #282c3f !important;
        }

        .osahan-user-media img {
            width: 90px;
        }

        .card offer-card h5.card-title {
            border: 2px dotted #000;
        }

        .card.offer-card h5 {
            border: 1px dotted #daceb7;
            display: inline-table;
            color: #17a2b8;
            margin: 0 0 19px 0;
            font-size: 15px;
            padding: 6px 10px 6px 6px;
            border-radius: 2px;
            background: #fffae6;
            position: relative;
        }

        .card.offer-card h5 img {
            height: 22px;
            object-fit: cover;
            width: 22px;
            margin: 0 8px 0 0;
            border-radius: 2px;
        }

        .card.offer-card h5:after {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 4px solid #daceb7;
            content: "";
            left: 30px;
            position: absolute;
            bottom: 0;
        }

        .card.offer-card h5:before {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #daceb7;
            content: "";
            left: 30px;
            position: absolute;
            top: 0;
        }

        .payments-item .media {
            align-items: center;
        }

        .payments-item .media img {
            margin: 0 40px 0 11px !important;
        }

        .reviews-members .media .mr-3 {
            width: 56px;
            height: 56px;
            object-fit: cover;
        }

        .order-list img.mr-4 {
            width: 70px;
            height: 70px;
            object-fit: cover;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
            border-radius: 2px;
        }

        .osahan-cart-item p.text-gray.float-right {
            margin: 3px 0 0 0;
            font-size: 12px;
        }

        .osahan-cart-item .food-item {
            vertical-align: bottom;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #000000;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
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
          Xtra-fuel
        </h1>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
          <li class="has-sub">
              <a class="js-arrow" href="#">
              <i class='fas fa-user-circle'></i><?php echo $name; ?></a>
            </li>
            <li class=" has-sub">
           
              <a class="js-arrow" href="index.php">
              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="orders.php">
              <i class="fas fa-shopping-cart"></i>Buy Fuel</a>
            </li>
            <li class="has-sub active">
              <a class="js-arrow" href="orderhistory.php">
              <i class='bi bi-bag-check-fill'></i>My Orders</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="fuelview.php">
                <i class="fa fa-rupee"></i>Fuel Price</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="editprofile.php">
                <i class="fas fa-user-edit"></i>Edit Profile</a>
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
                      $uid=$row12['user_id'];
                      
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
      <?php
                       $fuel = "SELECT * FROM `tbl_order` where user_id='$uid' ORDER BY order_id DESC ";
                      $result = mysqli_query($conn,$fuel);
                      $i = 1;
                  ?>
      <div class="main-content">
      <div class="col-md-12">
                <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <h4 class="font-weight-bold mt-0 mb-4">Order History</h4>
                            <?php
                            
                      while($row=mysqli_fetch_assoc($result)){
                        ?>
                            <div class="bg-white card mb-4 order-list shadow-sm">
                                <div class="gold-members p-4">
                                    <a href="#">
                                    </a>
                                    <div class="media">
                                        <a href="#">
                                        </a>
                                        <div class="media-body">
                                          
                                        <form action="bill.php" method="post">
                                          <input type="hidden" name="order_id"value="<?php echo $row['order_id']; ?>"/>
                                            <a href="#">
                                                <span class="float-right text-info">Fuel type : <?php echo $row['fuel']; ?> <i class="icofont-check-circled text-success"></i></span>
                                            </a>
                                            <!-- <h6 class="mb-2">
                                                <a href="#"></a>
                                                <a href="#" class="text-black">Gus's World Famous Fried Chicken</a> 
                                            </h6>
                                            <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 730 S Mendenhall Rd, Memphis, TN 38117, USA
                                            </p> -->
                                            <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #<?php echo $row['order_id']; ?> <i class="icofont-clock-time ml-2"></i>Date : <?php echo $row['date']; ?></p>
                                            <p class="text-dark">Quantity : <?php echo $row['quantity']; ?> L
                                            </p>
                                            <hr>
                                            <div class="float-right">
                                                <button class="btn btn-sm btn-outline-primary" name="invoice" value="<?php echo $row['order_id']; ?>"><i class="icofont-headphone-alt"></i>INVOICE</button>
                                                <!-- <button class="btn btn-sm btn-primary" href="#"><i class="icofont-refresh"></i> REORDER</button> -->
                                            </div>
                                            <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> <?php echo '₹'.$row['price']; ?>
                                            
                                            </form>
                                          </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
            <?php    
                  $i++;}?>
                        </div>
                    </div>
                </div>
            </div>
              
            
            </div>
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