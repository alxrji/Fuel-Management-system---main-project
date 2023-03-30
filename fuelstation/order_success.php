
<?php
include  '../config.php';
require 'fuel-session.php';
          $log_id=$_SESSION['log_id'];
          
          $coin1 = "SELECT * FROM `user` WHERE log_id='$log_id'";  
          $resultcoin = mysqli_query($conn,$coin1);
        
          $rowcoin=mysqli_fetch_array($resultcoin);
          $coin1=$rowcoin['coin'];
          $userid=$rowcoin['user_id'];
if(isset($_POST['pay'])){
$ftype= $_POST['select'];
    $amt= $_POST['qty'];
    $dt= date('Y-m-d');
    $uid=$_POST['uid'];
    // echo "$ftype, $amt, $dt";

    $fuel = "SELECT * FROM `fuel` WHERE `fuel_type`='$ftype' and `date`='$dt'";
    $result = mysqli_query($conn,$fuel);
    
    $row=mysqli_fetch_array($result);
    $price= $row['price']*$amt;

    
    $in="INSERT INTO `tbl_order`(`user_id`, `fuel`, `quantity`, `price`,`date`) VALUES ('$uid','$ftype','$amt','$price','$dt')";
    $inr = mysqli_query($conn,$in);
    if($inr==true){
      $stock_update = "UPDATE `fuel` SET `stock`=`stock`-'$amt' WHERE `fuel_type`='$ftype' AND `stock`>0";
      $stock_update_run = mysqli_query($conn, $stock_update);
      ?>
      <script>
        // window.location.href="orders.php";
        </script>
        <?php
    }
}