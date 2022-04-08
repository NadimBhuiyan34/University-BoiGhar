<?php
    require_once('functions/function.php');
    $id=$_GET['faqdel'];
    $dele="DELETE FROM adm_faq WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-faq.php');
?>
