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
                    Add New Sec-Hand Book
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-sechandbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Second-hand Books</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $secbook_title=$_POST['book_title'];
                      $secbook_edition=$_POST['book_edition'];
                      $secbook_price=$_POST['book_price'];
                      $seller_num=$_POST['seller_num'];
                      $image=$_FILES['pic'];
                      $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                      if(!empty($secbook_title)){

                          $insert="INSERT INTO adm_sechandbook(secbook_title,secbook_edition,secbook_price,seller_num,secbook_img)
                          VALUES('$secbook_title','$secbook_edition','$secbook_price','$seller_num','$imageName')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                              echo "Second-Hand book Successfully Published";
                          }else{
                              echo "Failed publish";
                          }

                      }else{
                            echo "Please, enter book title";
                      }
                  }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Edition</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_edition">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Price</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_price">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Seller Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="seller_num">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Cover image(270*326)</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">Publish</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
