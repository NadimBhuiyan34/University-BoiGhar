<?php
    require_once('functions/function.php');
    $id=$_GET['dbookdel'];
    $dele="DELETE FROM adm_donatebook WHERE donate_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-donatebook.php');
?>
