<?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Customer Registration
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-customer.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $fullname=$_POST['fullname'];
                      $username=$_POST['username'];
                      $email=$_POST['email'];
                      $roll=$_POST['roll'];
                      $contact=$_POST['contact'];
                      $pw=$_POST['pass'];
                      $rpw=$_POST['repass'];

                      if(!empty($fullname)){
                        if($pw==$rpw){
                          $insert="INSERT INTO users(fullname,username,email,roll,contact,password,status)
                          VALUES('$fullname','$username','$email','$roll','$contact','$pw','1')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                              echo "User registration success";
                          }else{
                              echo "User registration failed!";
                          }
                        }else{
                            echo "Password didn't match";
                        }
                      }else{
                            echo "Please enter your name!";
                      }
                  }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Full Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fullname">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="username">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Roll</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="roll">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="contact">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="pass">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Confirm-Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="repass">
                </div>
              </div>

          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">REGISTRATION</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
