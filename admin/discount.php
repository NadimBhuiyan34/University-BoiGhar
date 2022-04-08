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
                    Discount Updation
                 </div>
                 <div class="col-md-3 text-right">
                 	<!--<a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banner</a>-->
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <!--first start-->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
              	<div class="panel panel-primary">
                      <div class="panel-heading" style="background:#003366;">
                          <div class="col-md-9 heading_title">
                              Discount Type 1
                           </div>
                           <div class="col-md-3 text-right">
                           	<a href="discount-update.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> Update</a>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                    <div class="panel-body">
                      <?php
                          if(!empty($_POST)){
                              $maxprice=$_POST['maxprice'];
                              $percent=$_POST['percent'];

                                  $insert="INSERT INTO adm_discount(maxprice,percent)
                                  VALUES('$maxprice','$percent')";
                                  if(mysqli_query($con,$insert)){
                                      echo "Successfully";
                                  }else{
                                      echo "Failed";
                                  }

                          }
                      ?>
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
                    <div class="panel-footer text-center">
                      <button class="btn btn-sm btn-primary">Submit</button>
                    </div>
                  </div>
                  </form>
                <!--first end-->
              </div>
              <div class="col-md-6">
                <!--second start-->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
              	<div class="panel panel-primary">
                      <div class="panel-heading" style="background:#003366;">
                          <div class="col-md-9 heading_title">
                              Discount Type 2
                           </div>
                          <div class="clearfix"></div>
                      </div>
                    <div class="panel-body">
                      <div class="form-group">
                      <label for="" class="col-sm-6 control-label">Maximum Buy Books</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="item">
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Discount Percentage</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="percent">
                    </div>
                  </div>
                    </div>
                    <div class="panel-footer text-center">
                      <button class="btn btn-sm btn-primary">Submit</button>
                    </div>
                  </div>
                  </form>
                <!--second end-->
              </div>
            </div>
          </div>
          <div class="panel-footer text-center">

          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
