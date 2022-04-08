<?php
    $db_name="uboighar";
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$con){
      echo "Database connection error.";
    }else {
      //echo "connection successfull.";
    }
 ?>
