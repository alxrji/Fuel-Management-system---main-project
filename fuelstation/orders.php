<?php
include  '../config.php';
require 'fuel-session.php';
$name = $_SESSION['username'];
date_default_timezone_set("Asia/Calcutta");
// $dt= date('Y-m-d');
// echo $dt;
if (isset($_POST['pay'])) {
  $ftype = $_POST['select'];
  $amt = $_POST['qty'];
  $dt = date('Y-m-d');
  $uid = $_POST['uid'];
  // echo "$ftype, $amt, $dt";

  $fuel = "SELECT * FROM `fuel` WHERE `fuel_type`='$ftype' and `date`='$dt'";
  $result = mysqli_query($conn, $fuel);

  $row = mysqli_fetch_array($result);
  $price = $row['price'] * $amt;
  $c = 10 * $amt;
  $user = "SELECT * FROM `user` WHERE `user_id`='$uid'";
  $resultu = mysqli_query($conn, $user);

  $rowu = mysqli_fetch_array($resultu);
  $co = $rowu['coin'];
  $fco = $c + $co;


  $in = "INSERT INTO `tbl_order`(`user_id`, `fuel`, `quantity`, `price`,`date`) VALUES ('$uid','$ftype','$amt','$price','$dt')";
  $inr = mysqli_query($conn, $in);
  if ($inr == true) {
    $stock_update = "UPDATE `fuel` SET `stock`=`stock`-'$amt' WHERE `fuel_type`='$ftype' AND `stock`>0";
    $stock_update_run = mysqli_query($conn, $stock_update);
    $coin_update = "UPDATE `user` SET `coin`='$fco' WHERE `user_id`='$uid'";
    $coin_update_run = mysqli_query($conn, $coin_update);
?>
    <script>
      window.location.href = "orders.php";
    </script>
<?php
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
  <title>Orders</title>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.9/dist/sweetalert2.all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>




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
                <i class="fas fa-user-alt"></i>Customers</a>
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
            <li class="active has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-users"></i><?php echo $name; ?></a>
            </li>

            <li class="has-sub">
              <a class="js-arrow" href="index.php">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="active has-sub">
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

          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div class="container-fluid mt-4 ms-3 ps-5 me-5">

          <!-- <div style="margin-left: 900px; margin-top: 1.8%;"> -->
          <?php
          $log_id = $_SESSION['log_id'];

          $coin = "SELECT * FROM `user` WHERE log_id='$log_id'";
          $result128 = mysqli_query($conn, $coin);

          $row128 = mysqli_fetch_array($result128);
          $coin8 = $row128['coin'];
          $userid = $row128['user_id'];

          ?>

          <img src="images/icon/dollar.png" alt="" width="30px" height="30px" style="margin-left: 900px;"> <?php echo $coin8 ?>

        </div>
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <div class="header-button">
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu" style="margin-left: 950px;">
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
      <script>
        function check() {
          var fuel = document.getElementById("select").value;
          var qty = document.getElementById("cc-payment").value;
          var myCheckbox = document.getElementById("myCheckbox");
          var coin = document.getElementById("coin").value;


          var data = "fuel=" + fuel + "&qty= " + qty;
          // alert(data);
          jQuery.ajax({
            url: "pricecal.php",
            type: "post",
            data: data,
            success: function(response) {
              // alert(response);
              if (response.trim() === "Not enough stock") {
                document.getElementById("total").innerHTML = response;
                $('#pay').prop('disabled', true);
              } else {
                document.getElementById("total").innerHTML = response;
                $('#pay').prop('disabled', false);
                if (coin > 1000) {
                  myCheckbox.style.display = "inline-block";
                  document.getElementById("plac").innerHTML = "Redeem My coins ";
                }

              }
            
            }

          });
        }

        function checkprc() {
          var fuel = document.getElementById("select").value;
          var prc = document.getElementById("cc-prc").value;
          // var myCheckbox = document.getElementById("myCheckbox");
          // var coin = document.getElementById("coin").value;


          var data = "fuelt=" + fuel + "&prc= " + prc;
          // alert(data);
          jQuery.ajax({
            url: "pricecal.php",
            type: "post",
            data: data,
            success: function(response) {
              // alert(response);
              if (response.trim() === "Not enough stock") {
                document.getElementById("total").innerHTML = response;
                $('#pay').prop('disabled', true);
              } else {
                document.getElementById("total").innerHTML = response;
                $('#pay').prop('disabled', false);
                // if (coin > 1000) {
                //   myCheckbox.style.display = "inline-block";
                //   document.getElementById("plac").innerHTML = "Redeem My coins ";
                // }

              }
            
            }

          });
        }
      </script>

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <!-- <?php
                  date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                  echo date('d-m-Y H:i:s');
                  ?> -->
            <div class="row">

              <form class="d-flex justify-content-center" action="" method="POST" id="order_form">
                <!--  -->
                <div class="form-group mx-5">

                  <label for="cc-payment" class="control-label mb-1">Select Fuel:</label>
                  <div style="width: 150%;">
                    <select name="select" id="select" class="form-control" required>
                      <option value="" hidden>Please select</option>
                      <option value="Petrol">Petrol</option>
                      <option value="Diesel">Diesel</option>
                      <option value="CNG">CNG</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" style="margin-left: 10%;">
                  <input type="hidden" value="<?php echo $userid  ?>" name="uid">
                  <input type="radio" name="myRadio" value="option1">Price<br>
<input type="radio" name="myRadio" value="option2">Quantity<br>
                  <!-- <label for="cc-payment" class="control-label mb-1">Quantity</label> -->
                  <input id="cc-payment" placeholder="Enter The Quantity in Ltrs" min="1" name="qty"   type="number" class="form-control" required aria-invalid="false" onkeyup="check()" onchange="check()" style="display:none;">
                  <input id="cc-prc" placeholder="Enter The Price" min="1" name="prc"   type="number" class="form-control" required aria-invalid="false" onkeyup="checkprc()" onchange="checkprc()" style="display:none;">
                  <!-- <label for="myCheckbox">Checkbox</label> -->
                  <!-- <button type="submit" id="paymentclick" class="btn btn-primary" style="margin-top: -25%; margin-left: 105%;" name="submit" value="submit" onclick="pay_now()">Buy</button> -->
                  <input type="submit" name="pay" class="btn btn-primary" id="pay" style="margin-top: -25%; margin-left: 105%;" value="pay now">
                  <!-- <input type="submit" name="cnf" class="btn btn-primary" id="cnf" style="margin-top: -25%; margin-left: 105%; display:none;" value="confirm order"> -->
                  <br><span id="total" style="color:red;">

                  </span>
                  <input type="hidden" id="coin" name="coin" value="<?php echo $coin8; ?>">
                  <br><br><span id="plac"> </span> <input type="checkbox" id="myCheckbox" style="display:none;">
                  <script>
                    const radioButtons = document.querySelectorAll('input[name="myRadio"]');

radioButtons.forEach((radioButton) => {
  radioButton.addEventListener('change', (event) => {
    var val = event.target.value;
    var qty = document.getElementById("cc-payment");
    var prc = document.getElementById("cc-prc");
    if (val === "option2") {
      qty.style.display = "inline-block";
    } else {
      qty.style.display = "none";
    }
    if (val === "option1") {
      prc.style.display = "inline-block";
    } else {
      prc.style.display = "none";
    }
  });
});

                    const myCheckbox = document.getElementById("myCheckbox");

                    myCheckbox.addEventListener("change", function() {
                      if (this.checked) {

                        myFunction();
                      }
                    });

                    function myFunction() {

                      var c = parseInt(document.getElementById("coin").value);
                      var dp = parseInt(c / 10);
                      var pay = document.getElementById("pay");
                      var cnf = document.getElementById("cnf");
                      document.getElementById("total").innerHTML = dp;

                      var fuel = document.getElementById("select").value;
                      var qty = document.getElementById("cc-payment").value;


                      var data = "fuel1=" + fuel + "&qty1= " + qty + "&dp= " + dp;
                      // alert(data);
                      jQuery.ajax({
                        url: "pricecal.php",
                        type: "post",
                        data: data,
                        success: function(response) {
                          // alert(response);
                          if (response.trim() === "0") {
                            document.getElementById("total").innerHTML = response;
                            pay.style.display = "none";
                            cnf.style.display = "inline-block";
                            $('#pay').prop('disabled', true);
                          } else {
                            document.getElementById("total").innerHTML = response;
                            $('#pay').prop('disabled', false);


                          }
                          // $("#total").html(response);
                        }

                      });
                    }
                  </script>
              </form>
            </div>
            <div class="row m-t-30" style="width: 100%;">
              <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="row">

                  <div class="row m-t-30" style="width: 100%;">
                    <div class="col-md-12">
                      <!-- DATA TABLE-->

                      <!-- END DATA TABLE-->
                    </div>
                  </div>

                </div>

                <!-- END DATA TABLE-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END MAIN CONTENT -->
    <!-- END PAGE CONTAINER
    </div>

  </div> 

  <!-- Jquery JS -->
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
    <!-- "key": "rzp_test_SxxbqfYjeSQy3M", -->
</body>
<script>
  $(document).ready(function() {
    $('#order_form').on('submit', function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append("pay", true);
      
      var total = $('#total').text();
      // alert(total);
      var options = {
        "key": "rzp_test_SxxbqfYjeSQy3M",
        "amount": total * 100,
        "currency": "INR",
        "name": "FUEL",
        "description": "Test Transaction",
        "handler": function(response) {
          console.log(response);
          $.ajax({
            type: 'POST',
            url: 'orders.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result) {
              window.location.href = "orders.php";
            }
          });
        }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
    });
  });
</script>

</html>
<!-- end document-->