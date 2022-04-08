<?php
   require_once('functions/function.php');
   get_header();
 ?>

 <!--unused book start-->
 <div class="unused-book-area">
 <div class="text-center">
   <h3 class="font-weight-bold text-primary">Second Hand Books</h3>
 </div>
 <div class="container d-flex justify-content-center mt-5">
 <div class="row">
   <?php
       $sel="SELECT * FROM adm_sechandbook ORDER BY secbook_id DESC";
          $Q=mysqli_query($con,$sel);
          while($data=mysqli_fetch_assoc($Q)){
    ?>
     <div class="col-md-3">
        <form method="post" action="home.php?action=add&id=<?= $data['secbook_id']; ?>" enctype="multipart/form-data">
            <div class="product-wrapper mb-45 text-center">
              <input type="hidden" name="hidden_title" value="<?= $data['secbook_title']; ?>" />
              <input type="hidden" name="hidden_price" value="<?= $data['secbook_price']; ?>" />
              <input type="hidden" min="1" max="100" name="quantity" value="1" class="form-control" />
                <div class="product-img"> <a href="product_details_sec_hand_book.php?p=<?= $data['secbook_id']; ?>" data-abc="true"> <img src="admin/uploads/<?= $data['secbook_img']; ?>" alt=""> </a> <span class="text-center"><i class="fa fa-rupee"></i>TK. <?= $data['secbook_price']; ?></span>
                    <div class="product-action">
                        <div class="product-action-style"> <a href="product_details_sec_hand_book.php?p=<?= $data['secbook_id']; ?>"> <i class="fa fa-eye"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"><button type="submit" style="border:none;background:#fff;" name="add_to_cart"> <i class="fa fa-shopping-cart"></i></button></a> </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                  <h5><b><?= $data['secbook_title']; ?></b> </h5>

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
