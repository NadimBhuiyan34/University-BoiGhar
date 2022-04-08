<?php
require_once('functions/function.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

<div class="login-area" style="display: flex;align-items: center;justify-content: center;">
  <div class="login">
      <div class="card text-center" style="width:500px;height:350px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
    <div class="card-header" style="background:#003366;">
      <h5 style="color:#ffffff;">Sign In </h5>
    </div>
    <div class="card-body">
	  <?php
 if(!empty($_POST)){
	$count=0;
	$username=$_POST['username'];
    $password=$_POST['password'];

    $res=mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'");
	$row= mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
	if($count==0){
      echo '<script>alert("Username and Password Doesnot match.")</script>';
    }else{
		  if ($row['status'] == 1){
        $_SESSION['user_id'] = $row['id'];
		 	  $_SESSION['user_fullname'] = $row['fullname'];
        $_SESSION['user_username'] = $row['username'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_roll'] = $row['roll'];
        $_SESSION['user_contact'] = $row['contact'];
        $_SESSION['user_password'] = $row['password'];
        header("location:home.php");
		  }else{
			echo '<script>alert("Please verify your email address by OTP before login.")</script>';
		  }
	  }
 }
?>
      <form method="post">
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Username" name="username">
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary" style="display:block;">Submit</button>
</form>
<div class="mt-3">
  Are You New Here? <a href="registration.php">Sign Up</a>
</div>
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
