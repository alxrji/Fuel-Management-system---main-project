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

    if(isset($_POST['qty1'])){
        $ftype= $_POST['fuel1'];
        $amt= $_POST['qty1'];
        $dp= $_POST['dp'];
        $dt= date('Y-m-d');
        // echo "$ftype, $amt, $dt";

        $fuel = "SELECT * FROM `fuel` WHERE `fuel_type`='$ftype' and `date`='$dt'";
        $result = mysqli_query($conn,$fuel);
        if($_POST['qty1']>0){
        while($row=mysqli_fetch_array($result)){
            $price= $row['price']*$amt-$dp;
            $q=$row['stock'];
            if($q < $amt){
                echo "Not enough stock";
            }
            else{
                if($price >0)
                echo $price;
                else
                echo "0";
            }
           
                    
        }}
    }
    if(isset($_POST['prc'])){
        $ftype= $_POST['fuelt'];
        $amt= $_POST['prc'];
        $dt= date('Y-m-d');
        // echo "$ftype, $amt, $dt";

        $fuel = "SELECT * FROM `fuel` WHERE `fuel_type`='$ftype' and `date`='$dt'";
        $result = mysqli_query($conn,$fuel);
        if($_POST['prc']>0){
        while($row=mysqli_fetch_array($result)){
            $qt=$amt/$row['price'];
            $q=$row['stock'];
            if($q < $amt){
                echo "Not enough stock";
            }
            else{
                echo $qt;
            }
           
                    
        }}
    }
?>