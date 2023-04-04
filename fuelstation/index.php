<?php
include  '../config.php';
require 'fuel-session.php';
$name = $_SESSION['username'];
date_default_timezone_set('Asia/Kolkata');
$dt= date('Y-m-d');

$log_id=$_SESSION['log_id'];

$coin = "SELECT * FROM `user` WHERE log_id='$log_id'";
            $result12 = mysqli_query($conn,$coin);
         
            $row12=mysqli_fetch_array($result12);
            // $uid=$row12['user_id'];
            $coin=$row12['coin'];
            
            
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
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">
<style>::after


.mt-100 {
    margin-top: 100px
}

.container {
    margin-top: 200px
}

.card {
    position: relative;
    display: flex;
    width: 450px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 4px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.card .card-body {
    padding: 1rem 1rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

p {
    font-size: 14px
}

h4 {
    margin-top: 18px
}

.cross {
    padding: 10px;
    color: #d6312d;
    cursor: pointer
}

.continue:focus {
    outline: none
}

.continue {
    border-radius: 5px;
    text-transform: capitalize;
    font-size: 13px;
    padding: 8px 19px; 
    cursor: pointer;
    color: #fff;
    background-color: #D50000
}

.continue:hover {
    background-color: #D32F2F !important
}
</style>
    <!-- Modal -->
 
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Coins</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center" >
      <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
        <h4>CONGRATULATIONS!</h4>
        <p>You have been personally awarded</p>
        <img src="images/icon/dollar.png" alt="" width="30px" height="30px">
        <?php echo $coin ?>
        <br>
        <p>You need 1000 to redeem RS.100</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="orders.php" method="get">
          <button type="submit" class="btn btn-secondary" >REDEEM</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="card">
      <div class="text-right cross">
        <i class="fa fa-times"></i>
      </div>
      <div class="card-body text-center">
        <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
        <h4>CONGRATULATIONS!</h4>
        <p>You have been personally awarded</p>
        <img src="images/icon/dollar.png" alt="" width="30px" height="30px">
        <?php echo $coin ?>
        <br>
        <p>You need 1000 to redeem RS.100</p>
        <?php
        if($coin < 1000){
          // do something if the user does not have enough coins
        } else {
        ?>
      
        <?php
        }
        ?>
      </div>

    </div>     
  </div>
  <div class="modal-footer" style="margin-left: 200px;">
        
        <form action="orders.php" method="get">
          <button type="submit" class="btn btn-secondary" >REDEEM</button>
        </form>
      </div>
</div>


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
            <li class="active has-sub">
           
              <a class="js-arrow" href="index.php">
              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="orders.php">
              <i class="fas fa-shopping-cart"></i>Buy Fuel</a>
            </li>
            <li class="has-sub">
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
            <li class="has-sub">
        
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
      

     
      <!-- <img src="images/icon/dollar.png" alt="" width="30px" height="30px"> <?php echo $coin ?> -->
     
     
      </div>
    
      <div class="section__content section__content--p30">
      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="margin-left: 750px; margin-top: 50px;">
      <img src="images/icon/dollar.png" alt="" width="30px" height="30px"> <?php echo $coin ?>
</button>
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
                
            <div class="row m-t-25">
              

              <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                  <div class="overview__inner">
                    <div class="overview-box clearfix">
                      <!-- <div class="icon">
                        <i> <img src="https://icons8.com/icon/8712/gas-station" alt=""></i>
                      </div> -->
                      <!-- <img src="https://icons8.com/icon/8712/gas-station" alt=""> -->
                      <div class="icon">
                      <i class="bi bi-fuel-pump"></i>
                          <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z" />
                          <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z" />
                        </svg>
                      </div>
                      <?php
                      require '../config.php';
                      $count_petrol = "SELECT * FROM `fuel` WHERE fuel_type='Petrol' ORDER BY `fid`DESC LIMIT 1 ";
                      $count_petrol_run = mysqli_query($conn, $count_petrol);
                      $count_petrol_count = mysqli_fetch_array($count_petrol_run);
                      ?>
                      <div class="text">
                        <h2><?php echo "₹".$count_petrol_count['price'];
                            ?></h2>
                        <span>Petrol</span>
                      </div>
                    </div>

                    <div class="overview-chart">
                      <!-- <canvas id="widgetChart2"></canvas> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                  <div class="overview__inner">
                    <div class="overview-box clearfix">
                      <div class="icon">
                      <i class="bi bi-fuel-pump-diesel-fill"></i>
                      </div>
                      <div class="text">
                      <?php
                      require '../config.php';
                      $count_Diesel = "SELECT * FROM `fuel` WHERE fuel_type='Diesel' ORDER BY `fid`DESC LIMIT 1 ";
                      $count_Diesel_run = mysqli_query($conn, $count_Diesel);
                      $count_Diesel_count = mysqli_fetch_array($count_Diesel_run);
                      ?><h2><?php echo "₹". $count_Diesel_count['price'];
                      ?></h2>
                        <span>DIESEL</span>
                      </div>
                    </div>
                    <div class="overview-chart">
                      <!-- <canvas id="widgetChart3"></canvas> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                  <div class="overview__inner">
                    <div class="overview-box clearfix">
                      <div class="icon">
                      <i class="bi bi-fire"></i>
                      </div>
                      <div class="text">
                      <?php
                      require '../config.php';
                      $count_CNG = "SELECT * FROM `fuel` WHERE fuel_type='CNG' ORDER BY `fid`DESC LIMIT 1 ";
                      $count_CNG_run = mysqli_query($conn, $count_CNG);
                      $count_CNG_count = mysqli_fetch_array($count_CNG_run);
                      ?>
                        <h2><?php echo "₹". $count_CNG_count['price'];
                      ?></h2>
                        <span>CNG</span>
                      </div>
                    </div>
                    <div class="overview-chart">
                      <!-- <canvas id="widgetChart4"></canvas> -->
                    </div>
                  </div>
                </div>
                
              </div>
              
            
            </div>
                <!-- DATA TABLE-->
               
    <!-- END MAIN CONTENT -->
               
    <!-- END MAIN CONTENT -->
    <!-- END PAGE CONTAINER-->
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