<?php
    include '../config.php';
    
    if(isset($_POST['submit'])){
        $ft=$_POST['fuel-types'];
        date_default_timezone_set('Asia/Kolkata');
        $dt= date('Y-m-d');
        $price= $_POST['fuel-price'];
        $stock= $_POST['fuel-stock'];
        $sql="SELECT * FROM `fuel` WHERE `fuel_type`='$ft' ORDER BY fid DESC LIMIT 1;";
        $result1=mysqli_query($conn,$sql);
        $row=$result1->fetch_assoc();
        $st=$row['stock'];
        $fstock=$stock + $st;
        $d=$row['date'];
        if($d != $dt){
        $sql1="INSERT INTO `fuel`( `date`, `fuel_type`, `price`, `stock`) VALUES ('$dt','$ft','$price','$fstock');";
        $result=mysqli_query($conn,$sql1);
        }
        else{
            $sql1="UPDATE `fuel` SET `price`='$price',`stock`='$fstock' WHERE `fuel_type`='$ft' AND `date`='$dt';";
            $result=mysqli_query($conn,$sql1); 
        }
        if(!$result){
            echo'<script> alert ("error ");</script>';
            echo'<script>window.location.href="fuels.php";</script>';
        }else{
            echo'<script> alert ("Fuel price updated");</script>';
            echo'<script>window.location.href="fuels.php";</script>';

        }

    }
?>