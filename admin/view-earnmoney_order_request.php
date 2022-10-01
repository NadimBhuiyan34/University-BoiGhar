<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    checkAndGoto($id, 'all-earnmoney_order_request');
    $sel="SELECT * FROM adm_earnmoney_order_accept WHERE id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
    checkAndGoto($in, 'all-earnmoney_order_request');
?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="col-md-9 heading_title">
				View Earnmoney Request Details
			</div>
			<div class="col-md-3 text-right">
				<a href="all-earnmoney_order_request.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Order
					Request</a>
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
						<td><?= $in['fname']; ?></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td>:</td>
						<td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['mobile']; ?></td>
					</tr>
					<tr>
						<td>Book Title</td>
						<td>:</td>
						<td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['btitle']; ?></td>
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
</div>
<!--col-md-12 end-->
<?php
    get_footer();
?>