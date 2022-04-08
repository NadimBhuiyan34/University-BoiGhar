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
                    Add New Subscriber
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-subscriber.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Subscriber</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $email=$_POST['email'];

                      if(!empty($email)){

                          $insert="INSERT INTO adm_subscribers(subscriber_email)
                          VALUES('$email')";
                          if(mysqli_query($con,$insert)){
                              echo "Subscriber Successfully Added";
                          }else{
                              echo "Failed ";
                          }

                      }else{
                            echo "Please, enter email!";
                      }
                  }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Subscriber Email</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="email">
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
