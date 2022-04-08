<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    $sel="SELECT * FROM adm_event WHERE event_id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Event
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-event.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Event</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Event Title</td>
                        <td>:</td>
                        <td><?= $in['event_title']; ?></td>
                    </tr>
                    <tr>
                    	<td>Event Subtitle</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['event_subtitle']; ?></td>
                    </tr>
                    <tr>
                    	<td>Speaker Name</td>
                        <td>:</td>
                        <td><?= $in['event_speaker']; ?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>:</td>
                        <td><?= $in['event_date']; ?></td>
                    </tr>
                    <tr>
                    	  <td>Time</td>
                        <td>:</td>
                        <td><?= $in['event_time']; ?></td>
                    </tr>
                    <tr>
                    	<td>Thumbnail</td>
                        <td>:</td>
                        <td><?= $in['event_img']; ?></td>
                    </tr>
                </table>
              </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
              <button onclick="window.print()" class="btn btn-sm btn-info" type="button">PDF</button>
              <button onclick="window.print()" class="btn btn-sm btn-success" type="button">PRINT</button>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
