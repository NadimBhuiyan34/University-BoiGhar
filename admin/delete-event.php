<?php
    require_once('functions/function.php');
    $id=$_GET['edel'];
    $dele="DELETE FROM adm_event WHERE event_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-event.php');
?>
