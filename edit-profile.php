<?php
  require_once('functions/function.php');
  get_header();
  $id=$_GET['ed'];
  $sel="SELECT * FROM users WHERE id=$id";
  $Q=mysqli_query($con,$sel);
  $info=mysqli_fetch_assoc($Q);
  if(!empty($_POST)){
      $eid=$_POST['eid'];
      $fullname=$_POST['fullname'];
      $roll=$_POST['roll'];
      $contact=$_POST['contact'];
      $password=$_POST['password'];

      if(!empty($fullname)){
          $update="UPDATE users SET fullname='$fullname',roll='$roll',contact='$contact',password='$password' WHERE id='$id'";
          if(mysqli_query($con,$update)){
              header('Location: profile.php');
          }else{
            echo "Update failed!";
          }
      }else{
          echo "Sorry!";
      }
  }
 ?>
<div class="profile-area" style="display: flex;align-items: center;justify-content: center;">
  <div class="info">
    <div class="card text-center" style="width:550px;height:400px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
  <div class="card-header">
    <h5>Profile Information</h5>
  </div>
  <div class="card-body">
    <form class="" method="post" style="width:500px;">
      <div class="form-group">
      <div class="input-group">
        <input type="hidden" name="eid" value="<?= $_SESSION['user_id'];?>">
        <span class="input-group-text">Email</span>
        <input type="text" class="form-control" name="" value="<?= $_SESSION['user_username']; ?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Email</span>
        <input type="text" class="form-control" name="email" value="<?= $_SESSION['user_email']; ?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Full Name</span>
        <input type="text" class="form-control" name="fullname" value="<?= $_SESSION['user_fullname']; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Roll</span>
        <input type="text" class="form-control" name="roll" value="<?= $_SESSION['user_roll']; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Mobile Number</span>
        <input type="text" class="form-control" name="contact" value="<?= $_SESSION['user_contact']; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Password</span>
        <input type="text" class="form-control" name="password" value="<?= $_SESSION['user_password']; ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update Info</button>
    </form>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
  </div>
</div>
 <?php
  get_footer();
  ?>
