<?php
    require_once('functions/function.php');
    $id=$_GET['app'];
    $in= "INSERT INTO adm_active_reqbook SELECT * FROM adm_pen_reqbook WHERE id='$id'";
    mysqli_query($con,$in);
    $del="DELETE FROM adm_pen_reqbook WHERE id='$id'";
    mysqli_query($con,$del);
    header('Location: all-pending-reqbook.php');
?>
