<?php
    require_once('functions/function.php');
    $id=$_GET['bdel'];
    $dele="DELETE FROM adm_banner WHERE ban_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-banner.php');
?>
