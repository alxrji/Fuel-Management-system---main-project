<?php
session_start();
if(!isset($_SESSION['username'])){
    echo '<script>alert("Session expired\n\nPlease login again");</script>';
    echo '<script>window.location.href="../login/index.php"</script>';
}
?>