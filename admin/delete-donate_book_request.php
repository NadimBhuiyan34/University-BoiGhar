<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $dele="DELETE FROM adm_donate_book_request WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-donate_book_request.php');
?>
