<?php
    require_once('functions/function.php');
    $id=$_GET['a'];
    $in= "INSERT INTO adm_sechandbook SELECT * FROM adm_selloldbook WHERE secbook_id='$id'";
    mysqli_query($con,$in);
    //$del="DELETE FROM adm_selloldbook WHERE secbook_id='$id'";
  //  mysqli_query($con,$del);
    header('Location: pending-sechandbook.php');
?>
