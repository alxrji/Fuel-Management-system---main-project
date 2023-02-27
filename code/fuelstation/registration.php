<?php

include '../config.php';

if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$addresss = $_POST["addresss"];
	$place = $_POST["place"];
   
    $username = $_POST["username"];
	$passwd = $_POST["passwd"];
   
    $usertype=2;
    $statuss=1;
    
    $check = "SELECT * FROM `login` WHERE `username`='$username'";
    
    $rslt = mysqli_query($conn, $check);
    $rsltcheck = mysqli_num_rows($rslt);
    if($rsltcheck == 0){
      
       
      
      
        $sql = "INSERT INTO `login`(`username`, `passwd`, `usertype`, `statuss`) VALUES ('$username','$passwd','$usertype','$statuss');";
       
        
        $reg_query = mysqli_query($conn,$sql);
        $logid = mysqli_insert_id($conn);
        if($reg_query){
            
             $user_reg = "INSERT INTO `user`(`log_id`, `fname`, `lname`, `email`, `phone`, `addresss`, `place`,`coin`) VALUES ('$logid','$fname','$lname','$email','$phone','$addresss', '$place',0)";
            $user_reg_query = mysqli_query($conn,$user_reg);
            echo'<script> alert ("Account created");</script>';
            echo'<script>window.location.href="index.php";</script>';  }
     
    
    }
    else{
        echo'<script> alert ("Username  already exists!");</script>';
        echo'<script>window.location.href="index.php";</script>'; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="icon" type="image/png" href="images/icons/fuel.png"/> -->
  <title>Fuel Station Register</title>
  <link rel="icon" type="image/png" href="images/icons/fuel.png"/>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  function validate() {
      var f = document.getElementById("fname").value;
      var l = document.getElementById("lname").value;
      var name = /^[a-zA-Z\\s]*$/;
      if (f != "" && name.test(f) == false) {
        document.getElementById('msg1').style.display = "block";
        document.getElementById('msg1').innerHTML = "Name must contain alphabets only";
        return false;
      } else {
        document.getElementById('msg1').style.display = "none";
      }
      if (l != "" && name.test(l) == false) {
        document.getElementById('msg2').style.display = "block";
        document.getElementById('msg2').innerHTML = "Name must contain alphabets only";
        return false;
      } else {
        document.getElementById('msg2').style.display = "none";
      }
      var pw1 = document.getElementById("password").value;
      var pw2 = document.getElementById("cpassword").value;
      if (pw2 != "" && pw1 != pw2) {
        document.getElementById('pswd').style.display = "block";
        document.getElementById('pswd').innerHTML = "Password doesnot match";
        return false;
      } else {
        document.getElementById('pswd').style.display = "none";
      }

      var a = document.getElementById("email").value;
      var st = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (a != "" && st.test(a) == false) {
        document.getElementById('msg3').style.display = "block";
        document.getElementById('msg3').innerHTML = "Invalid Email id";
        return false;
      } else {
        document.getElementById('msg3').style.display = "none";
      }

      var ph = document.getElementById("phone").value;
      var expr = /^[6-9]\d{9}$/;
      if (ph != "" && expr.test(ph) == false) {
        document.getElementById('msg4').style.display = "block";
        document.getElementById('msg4').innerHTML = "Invalid Phone number";
        return false;
      } else {
        document.getElementById('msg4').style.display = "none";
      }
    }
  </script>
</head>


<body>

<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container-FLUID py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../images/reg.jpg"
            class="w-100 img-fluid" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
         
<hr style="height:20px;"/>
          <center><h1 class="heading color-black"> CUSTOMER REGISTER </h1></center>

<div>
<form action="" method="POST" name="rentform" class="wow fadeInUp" data-wow-delay="0.6s"  onsubmit="return validate()">
    <center>
    <div class="col-md-8 col-sm-6">
            <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname"  onkeyup="return validate()" required pattern="[A-Za-z_]+"><br>
            <span id="msg1" style="color:red"></span>  
            <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" onkeyup="return validate()" required pattern="[A-Za-z_]+"><br>
            <span id="msg2" style="color:red"></span>
            <input type="email" class="form-control" placeholder="Email" name="email" id="email" onkeyup="return validate()"  required><br>
            <span id="msg3" style="color:red"></span>
            <input type="int" class="form-control" placeholder="Phone number" name="phone" id="phone" onkeyup="return validate()" required minlength="10" maxlength="10" required pattern="[0-9]+"><br>
            <span id="msg4" style="color:red"></span>
            <input type="text area" class="form-control" placeholder="Address" name="addresss" required><br>
            <input type="text" class="form-control" placeholder="Place" name="place" required><br>
            <input type="text" class="form-control" placeholder="Username" name="username" required><br>
            <input type="password" class="form-control" placeholder="Password" name="passwd"  id="password" onkeyup="return validate()" required><br>
            <span id="passworder" style="color:red"></span>
            <input type="password" class="form-control" placeholder="Confirm password" name="cpasswd" id="cpassword" onkeyup="return validate()" required><br>
            <span id="pswd" style="color:red"></span>
            <input type="submit" class="form-control mb-5 btn-warning" value="Register" name="submit">
    </div></center>
</form>

    </div>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
                  
				  
</script>
</body>
</html>
