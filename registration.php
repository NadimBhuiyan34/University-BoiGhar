<?php  require_once('functions/function.php'); ?>
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
      <div class="card text-center" style="width:500px;height:580px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
    <div class="card-header" style="background:#003366;">
      <h5 style="color:#ffffff;">Sign Up</h5>
    </div>
    <div class="card-body">
      <?php
      if(!empty($_POST)){
        $count=0;
        $sql="SELECT username FROM users";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $roll = $_POST['roll'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];

            $insert="INSERT INTO users(fullname,username,email,roll,contact,password,status)
            VALUES('$fullname','$username','$email','$roll','$contact','$password','0')";
            if(mysqli_query($con,$insert)){
              $otp=rand(100000,999999);
              $date=date("Y-m-d");
              mysqli_query($con,"INSERT INTO verification(username,otp,reg_date) VALUES('$_POST[username]','$otp','$date');");
              $body = "Your University BoiGhar verification OTP code is: ".$otp." .";
              $headers = "From: amazinginfotechbd@gmail.com";

              if (mail($_POST['email'], "OTP", $body, $headers)){ ?>
              <script type="text/javascript">
                 window.location="verification.php"
              </script> <?php
              }else {
                echo '<script>alert("OTP code not send.")</script>';
              }
        }
        else {
          echo '<script>alert("This username is already exist. Use another...")</script>';
        }
      }
    }
       ?>
      <form method="post">
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="UserName" name="username" required>
  </div>
  <div class="mb-3">
    <input type="email" class="form-control" placeholder="Email" name="email" required>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Roll" name="roll">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Contact Number" name="contact" required>
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" placeholder="Password" name="password" required>
  </div>

  <button type="submit" class="btn btn-primary" style="display:block;">Submit</button>
</form>
<div class="mt-3">
  Are You Already a Member? <a href="index.php">Sign In</a>
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
