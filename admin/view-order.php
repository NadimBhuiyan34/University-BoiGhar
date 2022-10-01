<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    checkAndGoto($id, 'all-orderlist');
    $sel="SELECT * FROM adm_approve_orderlist WHERE id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
    checkAndGoto($in, 'all-orderlist');
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Approved ORder
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-orderlist.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Order</a>
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
                    	<td>Mobile</td>
                        <td>:</td>
                        <td><?= $in['mobile']; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['address']; ?></td>
                    </tr>
                    <tr>
                    	<td>City</td>
                        <td>:</td>
                        <td><?= $in['city']; ?></td>
                    </tr>
                    <tr>
                    	<td>Zip Code</td>
                        <td>:</td>
                        <td><?= $in['zipcode']; ?></td>
                    </tr>
                    <tr>
                    	<td>Payment Method</td>
                        <td>:</td>
                        <td><?= $in['paymentMethod']; ?></td>
                    </tr>
                    <tr>
                    	<td>Payment Number</td>
                        <td>:</td>
                        <td><?= $in['paymentNumber']; ?></td>
                    </tr>
                    <tr>
                    	<td>TransactionId</td>
                        <td>:</td>
                        <td><?= $in['transactionId']; ?></td>
                    </tr>
                    <tr>
                    	<td>Delivery Area</td>
                        <td>:</td>
                        <td><?= $in['deliveryArea']; ?></td>
                    </tr>
                    <tr>
                    	<td>Order Id</td>
                        <td>:</td>
                        <td><?= $in['orderid']; ?></td>
                    </tr>
                    <tr>
                    	<td>Product Name</td>
                        <td>:</td>
                        <td><?= $in['product_name']; ?></td>
                    </tr>
                    <tr>
                    	<td>Quantity</td>
                        <td>:</td>
                        <td><?= $in['quantity']; ?></td>
                    </tr>
                    <tr>
                    	<td>Price</td>
                        <td>:</td>
                        <td><?= $in['price']; ?></td>
                    </tr>
                    <tr>
                    	<td>Discount</td>
                        <td>:</td>
                        <td><?= $in['discount']; ?></td>
                    </tr>
                    <tr>
                    	<td>Total</td>
                        <td>:</td>
                        <td><?= $in['totalPrice']; ?></td>
                    </tr>
                    <tr>
                    	<td>Order Date</td>
                        <td>:</td>
                        <td><?= $in['orderdate']; ?></td>
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
