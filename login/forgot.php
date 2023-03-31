<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
include '../config.php';
session_start();
session_unset();
if(isset($_POST['forgot'])){
    $user = $_POST['username'];
	$_SESSION['usr']= $user;
 
    $login_check = "SELECT b.email FROM `login` a INNER JOIN `user` b on a.log_id=b.log_id AND a.username='$user'";
	$login_check_result = mysqli_query($conn, $login_check);
	$rsltcheck = mysqli_num_rows($login_check_result);
    $row = mysqli_fetch_array($login_check_result);
    if($rsltcheck == 1){
		$email=$row['email'];
        $random = random_int(100000, 999999);
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                      
        $mail->Host       = 'smtp.gmail.com';                 
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'developer.fuelmgmt@gmail.com';                     
        $mail->Password   = 'zvjxmrfaxrlwqzix';                              
        $mail->SMTPSecure = 'ssl';            
        $mail->Port       = 465;
        $mail->setFrom('developer.fuelmgmt@gmail.com', 'X-FUEL');
        $mail->addAddress("$email");
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'X-FUEL | Forgot Password';
        $mail->Body    = "$random";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if($mail->send()){
        $_SESSION['otp']= $random;
        $_SESSION['eml']= $email;
		
        
        header("location: /fuel/otp/otp.php");
        

        }else{
        echo '<script> alert("Some error occured"); </script>';
        }
    }


}else{

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
						Forgot Password
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Enter Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
		

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="forgot">
							Verify
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