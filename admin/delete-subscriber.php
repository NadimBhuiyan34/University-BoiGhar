<?php
    require_once('functions/function.php');
    $id=$_GET['del'];
    $dele="DELETE FROM adm_subscribers WHERE subscriber_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-subscriber.php');
?>
