<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_testimonil WHERE testo_id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $title=$_POST['title'];
        $review=$_POST['review'];

        if(!empty($name)){
            $update="UPDATE adm_testimonil SET client_name='$name',client_title='$title',client_review='$review' WHERE testo_id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-testimonil.php?t='.$id);
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
                <label for="" class="col-sm-3 control-label">Client Name</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['testo_id'];?>">
                  <input type="text" name="name" class="form-control" value="<?= $info['client_name'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Title</label>
                <div class="col-sm-8">
                  <input type="text" name="title" class="form-control" value="<?= $info['client_title'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Review</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="review" value="<?= $info['client_review'];?>">
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
