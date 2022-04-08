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
                    Upload Banner
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banner</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $title=$_POST['title'];
                      $subtitle=$_POST['subtitle'];
                      $btn=$_POST['btn'];
                      $url=$_POST['url'];
                      $image=$_FILES['pic'];
                      $imageName='banner_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                      if(!empty($title)){
                        if(!empty($image)){
                          $insert="INSERT INTO adm_banner(ban_title,ban_subtitle,ban_btn,ban_url,ban_image)
                          VALUES('$title','$subtitle','$btn','$url','$imageName')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                              echo "Successfully upload banner!";
                          }else{
                              echo "Failed Banner upload!";
                          }
                        }else{
                            echo "Please enter banner image!";
                        }
                      }else{
                            echo "Please enter banner title!";
                      }
                  }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Banner Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Banner Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Banner Button</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="btn">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Button URL</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="url">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">UPLOAD</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
