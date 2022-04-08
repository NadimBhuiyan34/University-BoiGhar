<?php
//fetch.php
require_once('functions/function.php');
$output = "";
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "SELECT * FROM adm_newbook WHERE book_title LIKE '%".$search."%' OR book_author LIKE '%".$search."%' ";
}
else
{
 $query = "SELECT * FROM adm_newbook ORDER BY id";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Book Title</th>
     <th>Book Author</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["book_title"].'</td>
    <td>'.$row["book_author"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
