<?php
    require_once('functions/function.php');
    $id=$_GET['del'];
    $dele="DELETE FROM adm_user WHERE user_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-user.php');
?>
