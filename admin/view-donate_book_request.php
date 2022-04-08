<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    $sel="SELECT * FROM adm_donate_book_request WHERE id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Donate Book Request Details
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-donate_book_request.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Book Request</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Full Name</td>
                        <td>:</td>
                        <td><?= $in['fullname']; ?></td>
                    </tr>
                    <tr>
                    	<td>Email</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['email']; ?></td>
                    </tr>
                    <tr>
                    	<td>Department</td>
                        <td>:</td>
                        <td><?= $in['department']; ?></td>
                    </tr>
                    <tr>
                        <td>Roll Id</td>
                        <td>:</td>
                        <td><?= $in['rollid']; ?></td>
                    </tr>
                    <tr>
                    	<td>Reason</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['reason']; ?></td>
                    </tr>
                    <tr>
                        <td>Send Reply Email</td>
                        <td>:</td>
                        <td><p><a href="mailto:<?= $in['email'];?>?subject=UBoighar%20Support%20Team&body=Thank%20You,%20For%20Contact%20With%20Us%3A%0D%0A%0D%0ACheers%2C%0D%0AHappy%20Customer">Send <i class="fa fa-envelope fa-lg"></i></a></p></td>
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
