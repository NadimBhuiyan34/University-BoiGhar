<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['t'];
    $sel="SELECT * FROM adm_testimonil WHERE testo_id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Testimonil
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-testimonil.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Testimonil</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Client Name</td>
                        <td>:</td>
                        <td><?= $in['client_name']; ?></td>
                    </tr>
                    <tr>
                    	<td>Client Title</td>
                        <td>:</td>
                        <td><?= $in['client_title']; ?></td>
                    </tr>
                    <tr>
                    	<td>Client Review</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['client_review']; ?></td>
                    </tr>
                    <tr>
                    	<td>Thumbnail</td>
                        <td>:</td>
                        <td><?= $in['client_img']; ?></td>
                    </tr>

                    <tr>
                    	<td>Time</td>
                        <td>:</td>
                        <td>29.04.2017 10:40:15</td>
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
