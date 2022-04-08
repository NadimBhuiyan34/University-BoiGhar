<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_newbook WHERE id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $edition=$_POST['edition'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        $status=$_POST['status'];

        if(!empty($title)){
            $update="UPDATE adm_newbook SET book_title='$title',book_edition='$edition',book_price='$price',book_stock='$stock',status='$status' WHERE id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-best_sell_book.php?v='.$id);
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
                    Move to Best Sell Book
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="select_best_sell_book.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> Selext Best Sell Book</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Title</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['id'];?>">
                  <input type="text" name="title" class="form-control" value="<?= $info['book_title'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Edition</label>
                <div class="col-sm-8">
                  <input type="text" name="edition" class="form-control" value="<?= $info['book_edition'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Price</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="price" value="<?= $info['book_price'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Stock</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="stock" value="<?= $info['book_stock'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="status" value="7">
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
