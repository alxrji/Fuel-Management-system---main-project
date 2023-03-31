<?php
include 'admin-session.php';
include '../config.php';
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
  <title>Customers</title>
  <link rel="icon" type="image/png" href="../admin/images/icon/logo.png" />

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

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
            <a class="logo" href="index.html">
              <img src="images/icon/logo.png" alt="FUELMAN" />
            </a>
            <button class="hamburger hamburger--slider" type="button">  
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <!-- <li class="has-sub">
              <a class="js-arrow" href="customers.php">
                <i class="fas fa-users"></i>Customers</a>
            </li> -->
            <li class="has-sub">
              <a class="js-arrow" href="pump.php">
                <i class="fas fa-users"></i>Customers</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="fuels.php">
                <i class="fas fa-users"></i>Fuels</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="approveorders.php">
                <i class="fas fa-users"></i>Approve Orders</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="fuelorder.php">
                <i class="fas fa-users"></i>Orders</a>
            </li>
          </ul>
        </nav>
      </div>
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
              <a class="js-arrow" href="index.php">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="active has-sub">
              <a class="js-arrow" href="customers.php">
                <i class="fas fa-users"></i>Customers</a>
            </li>
            <!-- <li class="has-sub">
              <a class="js-arrow" href="pump.php">
                <i class="fas fa-users"></i>Pumps</a> -->
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="fuels.php">
                <i class="fas fa-users"></i>Fuels</a>
            </li>
           
            <li class="has-sub">
              <a class="js-arrow" href="fuelorder.php">
                <i class="fas fa-users"></i>Orders</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="staffreg.php">
                <i class="fas fa-users"></i>Staff Registration</a>
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
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <div class="header-button">
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu" style="margin-left: 1000px;">
                    <div class="content">
                      <a class="js-acc-btn" href="#">ADMIN</a>
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
              <div class="col-md-12">
                <div class="overview-wrap">
                  <h2 class="title-1">Customers</h2>
                </div>
              </div>
            </div>
            <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Sl.No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Place</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $cust = "SELECT * FROM `user`";
                                            $cust_run = mysqli_query($conn,$cust);
                                            $i = 1;
                                            while($row=mysqli_fetch_array($cust_run)){
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['addresss']; ?></td>
                                                <td><?php echo $row['place']; ?></td>
                                                <td><?php
                                                $r=$row['log_id'];
                                                $s="SELECT statuss from login WHERE log_id='$r'"; 
                                                $s_run = mysqli_query($conn,$s);
                                                $row1=mysqli_fetch_array($s_run);
                                                if($row1['statuss']==0){
                                                  echo "blocked";
                                                } 
                                                else{
                                                  echo "unblocked";
                                                }
                                                
                                                ?> 
                                          </td>
                                                <td>
                                                    <?php
                                                    if($row1['statuss']==1){
                                                      ?>
                                                    <a href="?block=<?php echo $row['user_id']; ?>" class="btn btn-outline-danger btn-sm">Block</a>
                                                    <?php
                                                    }else{
                                                      ?>
                                                     <a href="?unblock=<?php echo $row['user_id']; ?>" class="btn btn-outline-success btn-sm">Unblock</a>
                                                
                                                      <?php
                                                    }
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                     <?php    
                     $i++;                       
    }
    ?>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT-->
      <!-- END PAGE CONTAINER-->
    </div>

  </div>

  <?php
  if(isset($_GET['block'])){
    $id = $_GET['block'];
    $select_user = "SELECT `log_id` FROM `user` WHERE `user_id` = '$id'";
    $select_user_result = mysqli_query($conn,$select_user);
    $user = mysqli_fetch_array($select_user_result);
    $logid = $user['log_id'];
    $block = "UPDATE `login` SET `statuss`='0' WHERE `log_id` = '$logid'";
    $block_run = mysqli_query($conn,$block);
    echo '<script> alert ("Account blocked");</script>';
	  echo'<script>window.location.href="customers.php";</script>';
  }
  if(isset($_GET['unblock'])){
    $id = $_GET['unblock'];
    $select_user = "SELECT `log_id` FROM `user` WHERE `user_id` = '$id'";
    $select_user_result = mysqli_query($conn,$select_user);
    $user = mysqli_fetch_array($select_user_result);
    $logid = $user['log_id'];
    $block = "UPDATE `login` SET `statuss`='1' WHERE `log_id` = '$logid'";
    $block_run = mysqli_query($conn,$block);
    echo '<script> alert ("Account unblocked");</script>';
	  echo'<script>window.location.href="customers.php";</script>';
  }
  ?>
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
<!-- end document-->