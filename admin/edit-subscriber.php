<?php
    require_once('functions/function.php');
    require_once('includes/header.php');
    require_once('includes/sidebar.php');
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_subscribers WHERE subscriber_id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $email=$_POST['email'];

        if(!empty($email)){
            $update="UPDATE adm_subscribers SET subscriber_email='$email' WHERE subscriber_id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-subscriber.php?v='.$id);
            }else{
              echo "Update failed!";
            }
        }else{
            echo "Please enter your name!";
        }
    }
?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update Testimonil Info
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-testimonil.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Testimonil</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Subscriber Mail</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['subscriber_id'];?>">
                  <input type="text" name="email" class="form-control" value="<?= $info['subscriber_email'];?>">
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
    require_once('includes/footer.php');
?>
