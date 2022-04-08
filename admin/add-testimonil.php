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
                    Add New Testimonil
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-testimonil.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Testimonil</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $client_name=$_POST['client_name'];
                      $client_title=$_POST['client_title'];
                      $client_review=$_POST['client_review'];
                      $image=$_FILES['pic'];
                      $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                      if(!empty($client_review)){

                          $insert="INSERT INTO adm_testimonil(client_name,client_title,client_review,client_img)
                          VALUES('$client_name','$client_title','$client_review','$imageName')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                              echo "Testimonil Successfully Published";
                          }else{
                              echo "Failed publish";
                          }

                      }else{
                            echo "Please, enter client review!";
                      }
                  }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="client_name">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="client_title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Review</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="client_review">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client image(45*45)</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">Submit</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
