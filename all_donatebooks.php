<?php
   require_once('functions/function.php');
   get_header();
 ?>

 <!--donation book start-->
 <div class="donate-book-area">
 <div class="text-center">
   <h3 class="font-weight-bold text-primary">All Donation Books</h3>
 </div>
 <div class="container d-flex justify-content-center mt-5">
 <div class="row">
   <?php
       $sel="SELECT * FROM adm_donatebook ORDER BY donate_id ASC";
          $Q=mysqli_query($con,$sel);
          while($data=mysqli_fetch_assoc($Q)){
    ?>
     <div class="col-md-10">

            <div class="card card-body mt-3">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="admin/uploads/<?= $data['book_img']; ?>" width="150" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"><?= $data['book_title']; ?> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item text-muted"><?= $data['book_category']; ?></li>
                        </ul>
                        <p class="mb-3"><?= $data['book_subtitle']; ?> </p>
                        <ul class="list-inline list-inline-dotted mb-0">
                            <li class="list-inline-item">All items from <a href="#" data-abc="true"><?= $data['book_doner']; ?></a></li>
                            <li class="list-inline-item">Request Send</li>
                        </ul>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <!--<h3 class="mb-0 font-weight-semibold">TK.</h3>-->
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <a type="button" style="background:#003366; color:#fff;" class="btn btn-primary mt-3" href="donation_book_request.php?donateid=<?= $data['donate_id']; ?>">
                        APPLY</a>
                    </div>
                </div>
            </div>

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
