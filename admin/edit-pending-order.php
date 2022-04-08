<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_billing_info WHERE id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $deliveryArea=$_POST['deliveryArea'];

        if(!empty($email)){
            $update="UPDATE adm_billing_info SET email='$email',mobile='$mobile',address='$address',deliveryArea='$deliveryArea' WHERE id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-pending-order.php?v='.$id);
            }else{
              echo "Update failed!";
            }
        }else{
            echo "Please enter your email!";
        }
    }
?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update Info
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-pending-orderlist.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All order</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Order Id</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['id'];?>">
                  <input type="text" name="" class="form-control" value="<?= $info['orderid'];?>" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" name="email" class="form-control" value="<?= $info['email'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Mobile</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mobile" value="<?= $info['mobile'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="address" value="<?= $info['address'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Delivery Area</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="deliveryArea" value="<?= $info['deliveryArea'];?>">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-success">UPDATE</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
