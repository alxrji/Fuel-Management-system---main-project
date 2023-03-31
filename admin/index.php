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
  <title>ADMIN</title>
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
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-user-alt"></i>Customer</a>
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
              <i class='fas fa-gas-pump' style='font-size:20px'></i>Fuels</a>

              


            </li>

            <li class="has-sub">
              <a class="js-arrow" href="fuelorder.php">
                <i class="fas fa-shopping-cart"></i>Orders</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="staffreg.php">
                <i class="fas fa-solid fa-id-badge"></i></i>Staff Registration</a>
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
            <div class="row m-t-25">
              <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                  <div class="overview__inner">
                    <div class="overview-box clearfix">
                      <div class="icon">
                      <i class="bi bi-people-fill"></i>
                      </div>
                      <?php
                      require '../config.php';
                      $count_users = "SELECT count(*) as `count` FROM `login` where `usertype`='2'";
                      $count_users_run = mysqli_query($conn, $count_users);
                      $count_users_count = mysqli_fetch_array($count_users_run);
                      ?>
                      <div class="text">
                        <h2><?php echo $count_users_count['count'];
                            ?>
                        </h2>
                        <span>CUSTOMERS</span>
                      </div>
                    </div>
                    <div class="overview-chart">
                      <!-- <canvas id="widgetChart1"></canvas> -->
                    </div>
                  </div>
                </div>
              </div>

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
            <div class="row">
              <div class="col-md-12">
                <div class="overview-wrap">
                  <h2 class="title-1">Price Graph</h2>
                </div>
              </div>
            </div>
            <div>
              <canvas id="myChart"></canvas>
            </div>
            <!-- <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                  <div class="overview__inner">
                    <div class="overview-box clearfix">
                      <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                      </div>
                      <div class="text">
                        <h2>1,086</h2>
                        <span>Today's Price</span>
                      </div>
                    </div> -->
            <!-- <div class="overview-chart">
                      <canvas id="widgetChart3"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                  <div class="overview__inner">
                    <div class="overview-box clearfix">
                      <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                      </div>
                      <div class="text">
                        <h2>$1,060,386</h2>
                        <span>total earnings</span>
                      </div>
                    </div>
                    <div class="overview-chart">
                      <canvas id="widgetChart4"></canvas>
                    </div>
                  </div>
                </div>
              </div>
          
            <div class="row">
              <div class="col-lg-6">
                <div class="au-card recent-report">
                  <div class="au-card-inner">
                    <h3 class="title-2">recent reports</h3>
                    <div class="chart-info">
                      <div class="chart-info__left">
                        <div class="chart-note">
                          <span class="dot dot--blue"></span>
                          <span>products</span>
                        </div>
                        <div class="chart-note mr-0">
                          <span class="dot dot--green"></span>
                          <span>services</span>
                        </div>
                      
                      <div class="chart-info__right">
                        <div class="chart-statis">
                          <span class="index incre">
                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                          <span class="label">products</span>
                        </div>
                        <div class="chart-statis mr-0">
                          <span class="index decre">
                            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                          <span class="label">services</span>
                        </div>
                      </div>
                    </div>
                    <div class="recent-report__chart">
                      <canvas id="recent-rep-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="au-card chart-percent-card">
                  <div class="au-card-inner">
                    <h3 class="title-2 tm-b-5">char by %</h3>
                    <div class="row no-gutters">
                      <div class="col-xl-6">
                        <div class="chart-note-wrap">
                          <div class="chart-note mr-0 d-block">
                            <span class="dot dot--blue"></span>
                            <span>products</span>
                          </div>
                          <div class="chart-note mr-0 d-block">
                            <span class="dot dot--red"></span>
                            <span>services</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="percent-chart">
                          <canvas id="percent-chart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <?php
            $date_query = "SELECT distinct date FROM fuel ORDER by date DESC LIMIT 7";
            $date_query_run = mysqli_query($conn, $date_query);
            foreach ($date_query_run as $date) {
              $ddate[] = $date['date'];
            }
            $price_query = "SELECT price FROM fuel WHERE fuel_type='Petrol' LIMIT 7";
            $price_query_run = mysqli_query($conn, $price_query);
            foreach ($price_query_run as $price) {
              $pprice[] = $price['price'];
            }

            $diesel_price_query = "SELECT price FROM fuel WHERE fuel_type='Diesel' LIMIT 7";
            $diesel_price_query_run = mysqli_query($conn, $diesel_price_query);
            foreach ($diesel_price_query_run as $diesel_price) {
              $dprice[] = $diesel_price['price'];
            }

            $cng_price_query = "SELECT price FROM fuel WHERE fuel_type='CNG' LIMIT 7";
            $cng_price_query_run = mysqli_query($conn, $cng_price_query);
            foreach ($cng_price_query_run as $cng_price) {
              $cprice[] = $cng_price['price'];
            }
            ?>
            <script>
              const ctx = document.getElementById('myChart');

              new Chart(ctx, {
                type: 'line',
                data: {
                  labels: <?php echo json_encode($ddate); ?>,
                  datasets: [{
                      label: 'Petrol',
                      data: <?php echo json_encode($pprice); ?>,
                      borderWidth: 2
                    },
                    {
                      label: 'Diesel',
                      data: <?php echo json_encode($dprice); ?>,
                      borderWidth: 2
                    },
                    {
                      label: 'CNG',
                      data: <?php echo json_encode($cprice); ?>,
                      borderWidth: 2
                    }
                  ]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            </script>

</body>

</html>
<!-- end document-->