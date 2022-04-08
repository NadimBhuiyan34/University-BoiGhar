<?php
    require_once('functions/function.php');
    $id=$_GET['tdel'];
    $dele="DELETE FROM adm_testimonil WHERE testo_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-testimonil.php');
?>
