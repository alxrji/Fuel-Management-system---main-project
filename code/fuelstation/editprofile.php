<?php
include  '../config.php';
require 'fuel-session.php';
$name = $_SESSION['username'];

if(isset($_POST['edit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $house = $_POST['house'];
  $place = $_POST['place'];
  $username_query = "SELECT `log_id` FROM `login` WHERE `username`='$name'";
  $username_query_run = mysqli_query($conn, $username_query);
  $username_row = mysqli_fetch_array($username_query_run);
  $log_id = $username_row['log_id'];
  $edit_query = "UPDATE `user` SET `fname`=' $fname',`lname`='$lname',`phone`='$phone',`addresss`='$house',`place`='$place' WHERE `log_id`='$log_id'";
  $edit_query_run = mysqli_query($conn, $edit_query);
  if($edit_query_run){
    $_SESSION['update_msg'] = '<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
    <div>
      Profile updated successfully <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>';
  }
  // header("location: editprofile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Edit Profile</title>
<link rel="icon" type="image/png" href="../admin/images/icon/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<style>
  .parsley-required {
    color: red;
    list-style-type: none;
  }
  .parsley-pattern{
    color: red;
    list-style-type: none;
  }
</style>
</head>
<body>
<div class="container-xl px-4 mt-4">

<nav class="nav nav-borders">
<a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
<a class="nav-link" href="index.php">Home</a>

</nav>
<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
<div class="card-header">Profile Picture</div>
<div class="card-body text-center">

<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">

<h3> <?php echo $name ?></h3>

<!-- <button class="btn btn-primary" type="button">Upload new image</button> -->
</div>
</div>
</div>
<div class="col-xl-8">
<?php
$query = "SELECT * FROM `user`";
$query_run=mysqli_query($conn, $query);
$row = mysqli_fetch_array($query_run);
?>
<div class="card mb-4">
<div class="card-header">Account Details</div>
<div class="card-body">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<?php 
error_reporting(0);
echo $_SESSION['update_msg']; 
unset($_SESSION['update_msg']);
?>

<form action="" method="post" id="basic_form">

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputFirstName">First name</label>
<input class="form-control" id="inputFirstName" type="text" data-parsley-pattern="/^[a-zA-Z\\s]*$/" placeholder="Enter your first name" name="fname" value="<?php echo $row['fname'] ?>" required>
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputLastName">Last name</label>
<input class="form-control" id="inputLastName" type="text" data-parsley-pattern="/^[a-zA-Z\\s]*$/" placeholder="Enter your last name" name="lname" value="<?php echo $row['lname'] ?>" required>
</div>
</div>

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputOrgName">Email</label>
<input class="form-control" id="inputOrgName" type="email" name="email" placeholder="Enter your email address" value="<?php echo $row['email'] ?>" disabled>
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputLocation">Phone number</label>
<input class="form-control" id="inputLocation" name="phone" type="number" data-parsley-pattern="/^[6-9]\d{9}$/" placeholder="Enter your phone number" value="<?php echo $row['phone'] ?>" required>
</div>
</div>

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputPhone">House No./Apartment name</label>
<input class="form-control" id="inputPhone" type="text" name="house" placeholder="Enter your address" value="<?php echo $row['addresss'] ?>" required>
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputBirthday">Place</label>
<input class="form-control" id="inputBirthday" type="text" name="place" placeholder="Enter your place" value="<?php echo $row['place'] ?>" required>
</div>
</div>

<button class="btn btn-primary" type="submit" name="edit">Update profile</button>
</form>
</div>
</div>
</div>
</div>
</div>
<style type="text/css">
body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
</style>
<script type="text/javascript">

</script>
<script>
  $('#basic_form').parsley();
</script>
</body>
</html>