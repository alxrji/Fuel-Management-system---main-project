<?php

include '../config.php';
session_start();
// session_unset();
// session_destroy();
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $password = $_POST['passwd'];
    $login_check = "SELECT * FROM `login` WHERE username='$user' AND passwd='$password'";
	$login_check_result = mysqli_query($conn, $login_check);
	$rsltcheck = mysqli_num_rows($login_check_result);
    $row = mysqli_fetch_array($login_check_result);
    if($rsltcheck == 1){
		$statuss=$row['statuss'];
        $usertype=$row['usertype'];

		if($statuss == 1){

      if($row['username'] == $user && $row['passwd'] == $password && $row['usertype'] == 0){
            $_SESSION['username'] = $row['username'];

			$_SESSION['passwd'] = $row['passwd'];
            $_SESSION['usertype'] = $row['usertype'];
            
			header("location:../admin/index.php");

	  }
        else if($row['username'] == $user && $row['passwd'] == $password && $row['usertype'] == 1){
            $_SESSION['username'] = $row['username'];

			$_SESSION['passwd'] = $row['passwd'];
            $_SESSION['usertype'] = $row['usertype'];
           
			header("location: ../customer/index.php");
           
        } 

		else if($row['username'] == $user && $row['passwd'] == $password && $row['usertype'] == 2){
            $_SESSION['username'] = $row['username'];
			$_SESSION['log_id'] = $row['log_id'];
			$_SESSION['passwd'] = $row['passwd'];
            $_SESSION['usertype'] = $row['usertype'];
            
			header("location: ../fuelstation/index.php");
           
        } 
		else if($row['username'] == $user && $row['passwd'] == $password && $row['usertype'] == 3){
            $_SESSION['username'] = $row['username'];
			$_SESSION['log_id'] = $row['log_id'];
			$_SESSION['passwd'] = $row['passwd'];
            $_SESSION['usertype'] = $row['usertype'];
            
			header("location:../staff/index.php");
           
        } 

}
else{

	echo '<script> alert ("Your account has been blocked\n\nPlease contact the administrator");</script>';
	echo'<script>window.location.href="index.php";</script>';
}
}
else{

	echo '<script> alert ("Invalid credentials.");</script>';
	echo'<script>window.location.href="index.php";</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	
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
						Sign In
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="forgot.php" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="passwd" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="login">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="../customer/registration.php" class="txt2 bo1">
							Sign up now
						</a>
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