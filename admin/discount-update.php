<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $s="SELECT * FROM adm_discount";
    $Qe=mysqli_query($con,$s);
    $in=mysqli_fetch_assoc($Qe);
    $id=$in["id"];
    $sel="SELECT * FROM adm_discount WHERE id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
      $maxprice=$_POST['maxprice'];
      $percent=$_POST['percent'];

            $update="UPDATE adm_discount SET maxprice='$maxprice',percent='$percent' WHERE id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: discount.php');
            }else{
              echo "Update failed!";
            }

    }
?>
<div class="col-md-6">
  <form class="form-horizontal" action="" method="post">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Update Discount Info
             </div>
             <div class="col-md-3 text-right">
              <a href="discount.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> Discount</a>
            </div>
            <div class="clearfix"></div>
        </div>
      <div class="panel-body">
        <div class="col-md-12">
          <div class="form-group">
          <label for="" class="col-sm-6 control-label">Maximum Total Price</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="maxprice">
          </div>
        </div>
        <div class="form-group">
        <label for="" class="col-sm-6 control-label">Discount Percentage</label>
        <div class="col-sm-4">
          <input type="number" min="1" max="100" class="form-control" name="percent">
        </div>
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
