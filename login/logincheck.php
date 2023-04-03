<?php
session_start();
include '../config.php';
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