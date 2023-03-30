<?php
session_start();
    include  '../config.php';
    date_default_timezone_set("Asia/Calcutta"); 
    if(isset($_POST['qty'])){
        $ftype= $_POST['fuel'];
        $amt= $_POST['qty'];
        $dt= date('Y-m-d');
        // echo "$ftype, $amt, $dt";

        $fuel = "SELECT * FROM `fuel` WHERE `fuel_type`='$ftype' and `date`='$dt'";
        $result = mysqli_query($conn,$fuel);
        if($_POST['qty']>0){
        while($row=mysqli_fetch_array($result)){
            $price= $row['price']*$amt;
            $q=$row['stock'];
            if($q < $amt){
                echo "Not enough stock";
            }
            else{
                echo $price;
            }
           
                    
        }}
    }

?>