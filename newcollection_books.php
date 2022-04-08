<?php
   require_once('functions/function.php');
   get_header();
 ?>

 <!--unused book start-->
 <div class="new-book-area">
 <div class="text-center">
   <h3 class="font-weight-bold text-primary">All New Collection Books</h3>
 </div>
 <div class="container d-flex justify-content-center mt-5">
 <div class="row">
   <?php
       $sel="SELECT * FROM adm_newbook WHERE status='1' ORDER BY id DESC";
       $Q=mysqli_query($con,$sel);
       while($data=mysqli_fetch_assoc($Q)){
    ?>
     <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">
                    <form method="post" action="home.php?action=add&id=<?= $data['id']; ?>" enctype="multipart/form-data">
                    <div class="card">
                      <a href="product_details.php?p=<?= $data['id']; ?>">
                       <img name="newbook_img" class="card-img-top img-fluid" src="admin/uploads/<?= $data['book_img']; ?>">
                       </a>
                        <div class="card-body">
                            <h5 name=""><b><?= $data['book_title']; ?></b> </h5>
                            <div class="d-flex flex-row my-2">
                                <div class="text-muted">TK.<?= $data['book_price']; ?></div>
                                <div class="ml-auto"> <span class="text-muted">Stock: <?= $data['book_stock']; ?></span> </div>
                            </div>
                            <input type="hidden" name="hidden_title" value="<?= $data['book_title']; ?>" />
					                 	<input type="hidden" name="hidden_price" value="<?= $data['book_price']; ?>" />
                            <input type="number" min="1" max="100" name="quantity" value="1" class="form-control" />
				                		<input type="submit" name="add_to_cart" style="margin-top:5px;background:#009933;color:#fff;" class="btn btn-success w-100 rounded" value="Add to Cart" />
                          <!--  <button name="add_cart" class="btn w-100 rounded my-2">Add to cart</button>-->
                        </div>
                    </div>
                  </form>
                </div>
     <?php
        }
      ?>

 </div>
 </div>
 </div>
 <!--unused book end-->

<?php
   get_footer();
 ?>
