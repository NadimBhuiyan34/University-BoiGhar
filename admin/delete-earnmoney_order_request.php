<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $dele="DELETE FROM adm_earnmoney_order_accept WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-earnmoney_order_request.php');
?>
