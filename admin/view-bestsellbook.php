<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    $sel="SELECT * FROM adm_bestsellbook WHERE id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Best Sell Book
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-bestsellbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Best Sell Book</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	  <tr>
                    	<td>Book Title</td>
                        <td>:</td>
                        <td><?= $in['book_title']; ?></td>
                    </tr>
                    <tr>
                    	<td>Book Author</td>
                        <td>:</td>
                        <td><?= $in['book_author']; ?></td>
                    </tr>
                    <tr>
                    	<td>Book Edition</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['book_edition']; ?></td>
                    </tr>
                    <tr>
                    	<td>Book Price</td>
                        <td>:</td>
                        <td><?= $in['book_price']; ?></td>
                    </tr>
                    <tr>
                        <td>Book Stock</td>
                        <td>:</td>
                        <td><?= $in['book_stock']; ?></td>
                    </tr>
                    <tr>
                        <td>Short Description</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['short_desc']; ?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['description']; ?></td>
                    </tr>
                    <tr>
                    	<td>Thumbnail</td>
                        <td>:</td>
                        <td><?= $in['book_img']; ?></td>
                    </tr>
                </table>
              </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
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
