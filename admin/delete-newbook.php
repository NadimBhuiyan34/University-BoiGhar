<?php
    require_once('functions/function.php');
    $id=$_GET['newbookdel'];
    $dele="DELETE FROM adm_newbook WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-newbook.php');
?>
