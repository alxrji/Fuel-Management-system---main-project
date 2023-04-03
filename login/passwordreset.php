<?php

include '../config.php';
session_start();
if(isset($_POST['reset'])){
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	$user=$_SESSION['user'];
	if($password == $cpassword){
		// $debug->log($user);
		$login_check = "UPDATE `login` SET `passwd`='$password' WHERE `username`='$user'";
		$login_check_result = mysqli_query($conn, $login_check);
		if($login_check_result){
			header("location: index.php");
		}
	}else{
		$debug->log('ffff');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Password</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/fuel.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body> 
	<div class="limiter"><a href="">
		<div class="container-login100" style="background-image: url('../images/slider/thumb1 (2).jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<a href="../index.php"><img src="images/icons/favicon.ico" width="30px" height="30px" alt="Home"></a>
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">
					<span class="login100-form-title p-b-53">
						Reset Password
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Password: 
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Retype Password 
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="cpassword" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="reset">
							Reset
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>