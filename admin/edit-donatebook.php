<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_donatebook WHERE donate_id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $subtitle=$_POST['subtitle'];
        $category=$_POST['category'];
        $doner=$_POST['doner'];

        if(!empty($title)){
            $update="UPDATE adm_donatebook SET book_title='$title',book_subtitle='$subtitle',book_category='$category',book_doner='$doner' WHERE donate_id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-donatebook.php?v='.$id);
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
                    Update Donate Book Info
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-donatebook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Donate Book</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Title</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['donate_id'];?>">
                  <input type="text" name="title" class="form-control" value="<?= $info['book_title'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" name="subtitle" class="form-control" value="<?= $info['book_subtitle'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Category</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="category" value="<?= $info['book_category'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Doner</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="doner" value="<?= $info['book_doner'];?>">
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
