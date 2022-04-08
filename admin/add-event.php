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
                    Add New Event Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-event.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Event</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $event_title=$_POST['event_title'];
                      $event_subtitle=$_POST['event_subtitle'];
                      $event_speaker=$_POST['event_speaker'];
                      $event_date=$_POST['event_date'];
                      $event_month=$_POST['event_month'];
                      $event_time=$_POST['event_time'];
                      $image=$_FILES['pic'];
                      $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                      if(!empty($event_title)){

                          $insert="INSERT INTO adm_event(event_title,event_subtitle,event_speaker,event_date,event_month,event_time,event_img)
                          VALUES('$event_title','$event_subtitle','$event_speaker','$event_date','$event_month','$event_time','$imageName')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                              echo "Event Successfully Published";
                          }else{
                              echo "Failed publish";
                          }

                      }else{
                            echo "Please, enter event title";
                      }
                  }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="event_title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Subtitle(85)</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="event_subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Speaker</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="event_speaker">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Date</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="event_date">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Month Of Held</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="event_month">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Time Schedule</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="event_time">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event image(200*212)</label>
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
