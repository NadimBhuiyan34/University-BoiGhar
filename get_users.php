<?php
 include('config.php');
 $sql = "SELECT * FROM adm_newbook WHERE book_title LIKE '%".$_POST['search']."%' ";
 $array = $con->query($sql);
 foreach($array as $key){

 ?>
 <div id="user"><img width="50" height="50" src="<?php echo $key['book_img'] ?>" id="pic" />&nbsp;<span><?php echo $key['book_title'] ?></span></div>

 <?php
 }
 ?>
