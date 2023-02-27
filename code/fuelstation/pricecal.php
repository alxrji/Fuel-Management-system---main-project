<?php
    include  '../config.php';
    date_default_timezone_set("Asia/Calcutta"); 
    if(isset($_POST['qty'])){
        $ftype= $_POST['fuel'];
        $amt= $_POST['qty'];
        $dt= date('Y-m-d');
        // echo "$ftype, $amt, $dt";

        $fuel = "SELECT * FROM `fuel` WHERE `fuel_type`='$ftype' and `date`='$dt'";
        $result = mysqli_query($conn,$fuel);
        
        while($row=mysqli_fetch_array($result)){
            $price= $row['price']*$amt;
            // echo ("<script LANGUAGE='JavaScript'>
            //         window.alert('Total Price is:".$price."');
            //         window.location.href='orders.php';
            //         </script>");
            echo '<span> Total price is ',$price,'</span>';
                    
        }
    }


    

?>