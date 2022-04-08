<?php
    require_once('functions/function.php');
    $id=$_GET['app'];
    $in= "INSERT INTO adm_approve_orderlist SELECT * FROM adm_billing_info WHERE id='$id'";
    mysqli_query($con,$in);
    $status="approved";
    $up="UPDATE adm_approve_orderlist SET orderStatus='$status' WHERE id='$id'";
    mysqli_query($con,$up);
    $del="DELETE FROM adm_billing_info WHERE id='$id'";
    mysqli_query($con,$del);
    header('Location: all-pending-orderlist.php');
?>
