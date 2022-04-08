<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['faq'];
    $sel="SELECT * FROM adm_faq WHERE id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Frequently Asked Question
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-faq.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All FAQ</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Name</td>
                        <td>:</td>
                        <td><?= $in['faq_name']; ?></td>
                    </tr>
                    <tr>
                    	<td>Email</td>
                        <td>:</td>
                        <td><?= $in['faq_email']; ?></td>
                    </tr>
                    <tr>
                    	<td>Coments</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['faq_coments']; ?></td>
                    </tr>

                    <tr>
                    	<td>Reply Answer</td>
                        <td>:</td>
                        <td><p><a href="mailto:<?= $in['faq_email'];?>?subject=UBoighar%20Support%20Team">Send <i class="fa fa-paper-plane fa-lg"></i></a></p></td>
                    </tr>
                </table>
              </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
                <button onclick="window.print()" class="btn btn-sm btn-primary" type="button">PDF</button>
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
