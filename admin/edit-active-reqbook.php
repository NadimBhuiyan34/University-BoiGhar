<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_active_reqbook WHERE id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $edition=$_POST['edition'];
        $qty=$_POST['qty'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];

        if(!empty($title)){
            $update="UPDATE adm_active_reqbook SET req_title='$title',req_author='$author',req_edition='$edition',req_phone='$phone',req_address='$address' WHERE id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-active-reqbook.php?v='.$id);
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
                    Update Requested Book Info
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-active-reqbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> Active Order</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Title</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['id'];?>">
                  <input type="text" name="title" class="form-control" value="<?= $info['req_title'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Author</label>
                <div class="col-sm-8">
                  <input type="text" name="author" class="form-control" value="<?= $info['req_author'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Edition</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="edition" value="<?= $info['req_edition'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Quantity</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="qty" value="<?= $info['req_quantity'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Buyer Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" value="<?= $info['req_phone'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Buyer Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="address" value="<?= $info['req_address'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="">
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
