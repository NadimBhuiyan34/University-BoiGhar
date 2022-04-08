<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['ed'];
    $sel="SELECT * FROM adm_event WHERE event_id=$id";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
    if(!empty($_POST)){
        $eid=$_POST['eid'];
        $title=$_POST['title'];
        $subtitle=$_POST['subtitle'];
        $speaker=$_POST['speaker'];
        $date=$_POST['date'];
        $month=$_POST['month'];
        $time=$_POST['time'];

        if(!empty($title)){
            $update="UPDATE adm_event SET event_title='$title',event_subtitle='$subtitle',event_speaker='$speaker',event_date='$date',event_month='$speaker',event_month='$month',event_time='$time' WHERE event_id='$id'";
            if(mysqli_query($con,$update)){
                header('Location: view-event.php?v='.$id);
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
                    Update Event Info
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-event.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Event</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Title</label>
                <div class="col-sm-8">
                  <input type="hidden" name="eid" value="<?= $info['event_id'];?>">
                  <input type="text" name="title" class="form-control" value="<?= $info['event_title'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" name="subtitle" class="form-control" value="<?= $info['event_subtitle'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Speaker</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="speaker" value="<?= $info['event_speaker'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Date</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="date" value="<?= $info['event_date'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Month</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="month" value="<?= $info['event_month'];?>">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Time</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="time" value="<?= $info['event_time'];?>">
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
