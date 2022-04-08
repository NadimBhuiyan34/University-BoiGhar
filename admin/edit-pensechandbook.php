<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_selloldbook WHERE secbook_id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $edition=$_POST['edition'];
        $price=$_POST['price'];
        $number=$_POST['number'];

        if(!empty($title)){
            $update="UPDATE adm_selloldbook SET secbook_title='$title',secbook_edition='$edition',secbook_price='$price',seller_num='$number' WHERE secbook_id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-pensechandbook.php?v='.$id);
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
                    Update Pending Book Info
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="pending-sechandbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Second Hand Book</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Title</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['secbook_id'];?>">
                  <input type="text" name="title" class="form-control" value="<?= $info['secbook_title'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Edition</label>
                <div class="col-sm-8">
                  <input type="text" name="edition" class="form-control" value="<?= $info['secbook_edition'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Price</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="price" value="<?= $info['secbook_price'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Seller Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="number" value="<?= $info['seller_num'];?>">
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
