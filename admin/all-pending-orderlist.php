<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All Pending Order list
                 </div>
                 <div class="col-md-3 text-right">
                 	<!--<a href="add-sechandbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Book</a>-->
                  <a href="all-orderlist.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Approved Order</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                		<tr>
                      	<th>Order Id</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Payment</th>
                        <th>PyMobile</th>
                        <th>TransactionId</th>
                        <th>DeliverArea</th>
                        <th>Manage</th>
                    </tr>
                	</thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM adm_billing_info ORDER BY id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                    	<tr>
                          <td><?= $data['orderid']; ?></td>
                          <td><?= substr($data['email'],0,10);?>...</td>
                          <td><?= $data['mobile']; ?></td>
                        	<td><?= substr($data['address'],0,10);?>...</td>
                          <td><?= $data['paymentMethod']; ?></td>
                          <td><?= $data['paymentNumber']; ?></td>
                          <td><?= $data['transactionId']; ?></td>
                          <td><?= $data['deliveryArea']; ?></td>
                          <td>
                            <a href="approve-order.php?app=<?= $data['id']; ?>"><i class="fa fa-check-square fa-lg"></i></a>
                          	<a href="view-pending-order.php?v=<?= $data['id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                              <a href="edit-pending-order.php?ed=<?= $data['id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-pending-order.php?del=<?= $data['id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
  }else{
      echo "Access Denied! You have no permission access this page.";
  }
?>
