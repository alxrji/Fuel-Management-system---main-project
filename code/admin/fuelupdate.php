<?php
    include '../config.php';
    
    if(isset($_POST['submit'])){
        $ft=$_POST['fuel-types'];
        date_default_timezone_set('Asia/Kolkata');
        $dt= date('Y-m-d');
        $price= $_POST['fuel-price'];

        $sql1="INSERT INTO `fuel`( `date`, `fuel_type`, `price`) VALUES ('$dt','$ft','$price');";
        $result=mysqli_query($conn,$sql1);
        if(!$result){
            echo'<script> alert ("error ");</script>';
            echo'<script>window.location.href="fuels.php";</script>';
        }else{
            echo'<script> alert ("Fuel price updated");</script>';
            echo'<script>window.location.href="fuels.php";</script>';

        }

    }
?>