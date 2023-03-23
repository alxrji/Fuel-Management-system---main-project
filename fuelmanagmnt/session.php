<?php
if(!isset($_SESSION['username'])){
    echo '<script>alert("Session expired\n\nPlease login again");</script>';
    echo '<script>window.location.href="../index.php"</script>';
}
?>