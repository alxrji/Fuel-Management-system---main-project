<?php
include '../config.php';
if(isset($_POST['rejo'])){
    $oid=$_POST['oid'];
    $query = "UPDATE `tbl_order` SET `isRejected`='1' WHERE `order_id`='$oid'";
    $query_run = mysqli_query($conn, $query);
if($query_run){
    ?>
    <script>
        alert("Order rejected");
        window.location.href="approveorders.php";
    </script>
    <?php
    
}
}

?>