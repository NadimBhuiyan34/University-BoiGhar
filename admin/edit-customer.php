<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
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
        $status=$_POST['status'];

            $update="UPDATE users SET fullname='$fullname',roll='$roll',contact='$contact',password='$password',status='$status' WHERE id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-customer.php?v='.$id);
            }else{
              echo "Update failed!";
            }

    }
?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update Customer Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-customer.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Full Name</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['id'];?>">
                  <input type="text" name="fullname" class="form-control" value="<?= $info['fullname'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="" value="<?= $info['username'];?>" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" placeholder="" value="<?= $info['email'];?>" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Roll</label>
                <div class="col-sm-8">
                  <input type="text" name="roll" class="form-control" value="<?= $info['roll'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" name="contact" class="form-control" value="<?= $info['contact'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="text" name="password" class="form-control" value="<?= $info['password'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-8">
                  <input type="number" min="0" max="1" name="status" class="form-control" value="<?= $info['status'];?>">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">UPDATE</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
