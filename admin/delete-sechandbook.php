<?php
    require_once('functions/function.php');
    $id=$_GET['secbookdel'];
    $dele="DELETE FROM adm_sechandbook WHERE secbook_id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-sechandbook.php');
?>
