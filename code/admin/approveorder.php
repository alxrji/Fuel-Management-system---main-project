<?php
include '../config.php';
if(isset($_POST['appro'])){
    
$oid = $_POST['oid'];
$query = "UPDATE `tbl_order` SET `isApproved`='1' WHERE `order_id`='$oid'";
$query_run = mysqli_query($conn, $query);
if($query_run){
    ?>
    <script>
        alert("Order approved");
        
        window.location.href="approveorders.php";
    </script>
    <?php
    
}
}
?>