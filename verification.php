<?php
require_once('functions/function.php');

$ver1=0;
if (isset($_POST['verify']))
 {
  $ver2=mysqli_query($con,"SELECT * FROM verification;");
  while ($row= mysqli_fetch_assoc($ver2))
  {
    if ($_POST['otp']==$row['otp'])
    {
      mysqli_query($con,"UPDATE users set status='1' where username='$row[username]';");
      $ver1=$ver1+1;
    }
  }
  if ($ver1==1) {
    echo '<script>alert("Registration is Complete. Now Login..")</script>';
    header("location:index.php");
  }
  else
  {
    echo '<script>alert("Your OTP Code is not right. Please, Try again..")</script>';
  }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>

<div class="login-area" style="display: flex;align-items: center;justify-content: center;">
  <div class="login">
      <div class="card text-center" style="width:500px;height:350px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
    <div class="card-header" style="background:#003366;">
      <h5 style="color:#ffffff;">Verify Your Email With OTP </h5>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="mb-3">
          <label for="">Please, Check Your Mail. You Can Find a OTP Code.[Note: Sometimes OTP goes to spam section.]</label>
        </div>
        <div class="mb-3">
          <label for="">Enter Yor OTP Code Here.</label>
        </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="OTP Code" name="otp">
  </div>

  <button type="submit" class="btn btn-primary" name="verify" style="display:block;">Submit</button>
</form>
    </div>
    <div class="card-footer text-muted">
      <?php date_default_timezone_set('Asia/Dhaka'); echo date("d-M-y h:i:s") ; ?>
    </div>
  </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
