<?php
    require_once('functions/function.php');
    $id=$_GET['del'];
    $dele="DELETE FROM adm_billing_info WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-pending-orderlist.php');
?>
