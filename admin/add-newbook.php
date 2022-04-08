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
                    Add New Book
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-newbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All New Books</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $book_title=$_POST['book_title'];
                      $book_author=$_POST['book_author'];
                      $book_edition=$_POST['book_edition'];
                      $book_price=$_POST['book_price'];
                      $book_stock=$_POST['book_stock'];
                      $short_desc=$_POST['short_desc'];
                      $description=$_POST['description'];
                      $book_flag=$_POST['book_flag'];
                      $image=$_FILES['pic'];
                      $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                      if(!empty($book_title)){

                          $insert="INSERT INTO adm_newbook(book_title,book_author,book_edition,book_price,book_stock,short_desc,description,status,book_img)
                          VALUES('$book_title','$book_author','$book_edition','$book_price','$book_stock','$short_desc','$description','$book_flag','$imageName')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                              echo "New book Successfully Published";
                          }else{
                              echo "Failed publish";
                          }

                      }else{
                            echo "Please, enter New book title";
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
                <label for="" class="col-sm-3 control-label">Book Author</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_author">
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
                <label for="" class="col-sm-3 control-label">Book Quantity</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_stock">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Short Description</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="short_desc">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="description">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_flag" value="1">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Cover image(400*333)</label>
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
