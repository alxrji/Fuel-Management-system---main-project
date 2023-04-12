<?php
include 'admin-session.php';
include '../config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
if (isset($_POST['regstaff'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $fname . $lname . rand(111, 999);
  function randomPassword()
  {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }
  $pass = randomPassword();
  $login_check = "SELECT * FROM `login` WHERE `username`='$username'";
  $login_check_result = mysqli_query($conn, $login_check);
  $rsltcheck = mysqli_num_rows($login_check_result);
  if ($rsltcheck == 1) {
  } else {
    $staffins = "INSERT INTO `login`(`username`, `passwd`, `usertype`, `statuss`) VALUES ('$username','$pass', '3', '1')";
    $staffins_result = mysqli_query($conn, $staffins);
    if ($staffins_result) {
      $logid =  mysqli_insert_id($conn);

      $stafftbl = "INSERT INTO `staff`(`log_id`, `fname`, `lname`, `phone`, `email`) VALUES ('$logid', '$fname', '$lname', '$phone', '$email')";
      $stafftbl_result = mysqli_query($conn, $stafftbl);
      if ($stafftbl_result) {
        $mail = new PHPMailer(true);                     //Enable verbose debug output
        $mail->isSMTP();             
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'developer.fuelmgmt@gmail.com';                     //SMTP username
        $mail->Password   = 'ojyxidiefvuqwuuz';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('developer.fuelmgmt@gmail.com', 'X-FUEL');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Staff Login Credentials';
        $mail->Body    = "<strong>Username: </strong>$username<br><br>
    <strong>Password: $pass</strong>  ";

        $mail->send();
      }
    }
  }
}
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
  <title>Staff registration</title>
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
                <i class="fas fa-shopping-cart"></i>Orders</a>
            </li>
            <li class="has-sub active">
              <a class="js-arrow" href="staffreg.php">
                <i class="fas fa-users"></i>Staff Registration</a>
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
          Xfuel
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
                <i class="fas fa-shopping-cart"></i>Orders</a>
            </li>
            <li class="has-sub active">
              <a class="js-arrow" href="staffreg.php">
                <i class="fas fa-solid fa-id-badge"></i>Staff Registration</a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->
<style>
  .parsley-required, .parsley-type, .parsley-pattern{
    color: red;
    margin-top: 10px;
    list-style: none;
  }
</style>
    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- add-staff-modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST" id="addstaff">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register New Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">First Name:</label>
                  <input type="text" class="form-control" id="recipient-name" name="fname" required data-parsley-pattern="^[a-zA-Z\\s]*$">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Last Name:</label>
                  <input type="text" class="form-control" id="recipient-name" name="lname" required data-parsley-pattern="^[a-zA-Z\\s]*$">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" id="recipient-name" name="email" required data-parsley-pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Phone:</label>
                  <input type="number" class="form-control" id="recipient-name" name="phone" required maxlength="10" data-parsley-pattern="^[6-9]\d{9}$" data-parsley-type="number">
                </div>

              </div>
              <div class="modal-footer">
                <button type="submit" name="regstaff" class="btn btn-primary">Register</button>
              </div>
          </div>
          </form>
        </div>
      </div>
      <!-- add-staff-modal-end -->
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
                  <h2 class="title-1">Staff Registration</h2>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Staff</button>

            <div class="row m-t-30">

              <!-- <div class="col-md-12"> -->


              <!-- DATA TABLE-->
              <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                  <thead>
                    <tr>
                      <th>Sl.No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Account status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php
                  $cust = "SELECT a.*, b.statuss, b.log_id FROM `staff` a INNER JOIN login b ON a.log_id = b.log_id";
                  $cust_run = mysqli_query($conn, $cust);
                  $i = 1;
                  while ($row = mysqli_fetch_array($cust_run)) {
                  ?>
                    <tbody>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php
                            $r = $row['log_id'];
                            $s = "SELECT statuss from login WHERE log_id='$r'";
                            $s_run = mysqli_query($conn, $s);
                            $row1 = mysqli_fetch_array($s_run);
                            if ($row1['statuss'] == 0) {
                              echo "blocked";
                            } else {
                              echo "unblocked";
                            }

                            ?>
                        </td>
                        <td>
                          <?php
                          if (isset($_POST['block'])) {
                            $userid = $_POST['block'];
                            $query = "UPDATE `login` SET `statuss`='0' WHERE `log_id`='$userid'";
                            $query_run = mysqli_query($conn, $query);
                          }
                          if ($row1['statuss'] == 1) {
                          ?>
                            <form action="" method="post">
                              <button type="submit" name="block" value="<?php echo $row1['log_id'] ?>" class="btn btn-outline-danger btn-sm">Block</button>
                            </form>
                          <?php
                          } else {
                          ?>


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
      <!-- END MAIN CONTENT-->
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
<script src="js/parsley.js"></script>
  <script>
  $('#addstaff').parsley();
</script>
  <!-- Main JS-->
  <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->