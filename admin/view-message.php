<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    checkAndGoto($id, 'all-message');
    $sel="SELECT * FROM adm_contact WHERE id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
    checkAndGoto($in, 'all-message');
?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="col-md-9 heading_title">
				View Contact Message
			</div>
			<div class="col-md-3 text-right">
				<a href="all-message.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Contact Message</a>
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
						<td><?= $in['conus_name']; ?></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td><?= $in['conus_phone']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?= $in['conus_email']; ?></td>
					</tr>
					<tr>
						<td>Subject</td>
						<td>:</td>
						<td><?= $in['conus_sub']; ?></td>
					</tr>
					<tr>
						<td>Message</td>
						<td>:</td>
						<td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['conus_mess']; ?></td>
					</tr>
					<tr>
						<td>Reply Mail</td>
						<td>:</td>
						<td>
							<p><a href="mailto:<?= $in['conus_email'];?>?subject=UBoighar%20Support%20Team">Send <i
										class="fa fa-paper-plane fa-lg"></i></a></p>
						</td>
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