<?php

   require_once('functions/function.php');
   get_header();
   $pid=$_GET['p'];
   $sel="SELECT * FROM adm_sechandbook WHERE secbook_id='$pid'";
   $Q=mysqli_query($con,$sel);
   $data=mysqli_fetch_assoc($Q);

 ?>
 <div class="container" id="product_container">
   <div class="row">
     <div class="col-md-4">
      <img class="img-fluid" width="300" height="400" src="admin/uploads/<?= $data['secbook_img']; ?>" alt="First slide">
     </div>
     <form method="post" action="home.php?action=add&id=<?= $data['secbook_id']; ?>" enctype="multipart/form-data">
     <div class="col-md-8">
        <p class="newarrival text-center">NEW</p>
        <h2><?= $data['secbook_title']; ?></h2>
        <p>Author: asdffd</p>
        <p>Product Code: ISRCT2021</p>
        <p><b>Availability:</b> In Stock</p>
        <p><b>Condition:</b> New</p>
        <p><b>Edition:</b> <?= $data['secbook_edition']; ?></p>
        <p >Price: <?= $data['secbook_price']; ?></p>
        <input type="hidden" name="hidden_title" value="<?= $data['secbook_title']; ?>" />
        <input type="hidden" name="hidden_price" value="<?= $data['secbook_price']; ?>" />
        <label>Quantity: </label>
        <input style="width:50px;" type="number" min="1" max="100" name="quantity" value="1">
         <br>
        <img src="img/stars.png" class="stars mt-2" alt="">
        <button style="background: #ff1a75; color:#ffffff; margin-top:0; margin-left: 160px;" type="submit" name="add_to_cart" class="btn btn-default cart">Add to cart</button>
        <br><br>
     </div>
   </form>
   </div>
   <!--First row end-->
   <!--product specification row start-->
   <div class="row my-5">
   <div class="product-specification" style="border:2px solid #d1cbcb;">
   <div class="card text-center text-white" style="padding: 20px;">
           <div class="card-header text-white bg-warning">
               <ul class="nav nav-tabs card-header-tabs pull-left"  id="myTab" role="tablist">
                   <li class="nav-item">
                       <a class="nav-link active font-weight-bold text-dark" id="aorder-tab" data-toggle="tab" href="#aorder" role="tab" aria-controls="aorder" aria-selected="true">Summary</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link font-weight-bold text-dark" id="porder-tab" data-toggle="tab" href="#porder" role="tab" aria-controls="porder" aria-selected="false">Book Specification</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link font-weight-bold text-dark" id="corder-tab" data-toggle="tab" href="#corder" role="tab" aria-controls="corder" aria-selected="false">Author</a>
                           </li>
               </ul>
           </div>

           <div class="card-body">
               <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="aorder" role="tabpanel" aria-labelledby="aorder-tab">
                     <h3>Product Details</h3>
                      <p class="lead"><?= $data['description']; ?>
                      </p>
                   </div>
                   <div class="tab-pane fade" id="porder" role="tabpanel" aria-labelledby="porder-tab">
                    <!--table start-->
                    <table class="table table-striped table-bordered">
                     <thead>
                       <tr>
                         <th scope="col">#</th>
                         <th scope="col">First</th>
                         <th scope="col">Last</th>
                         <th scope="col">Handle</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Otto</td>
                       <td>@mdo</td>
                     </tr>
                     <tr>
                       <th scope="row">2</th>
                       <td>Jacob</td>
                       <td>Thornton</td>
                       <td>@fat</td>
                     </tr>
                     <tr>
                       <th scope="row">3</th>
                       <td>Larry</td>
                       <td>the Bird</td>
                       <td>@twitter</td>
                     </tr>
                   </tbody>
                  </table>
                    <!--table end-->
                   </div>
                   <div class="tab-pane fade" id="corder" role="tabpanel" aria-labelledby="corder-tab">
                    <h3>Author Name</h3>
                    <h4>Saifur Rahman</h4>
                    <h6>Software Engineer</h6>
                     <p>It is a long established fact that a reader will
                       be distracted by the readable content of a page
                       when looking at its layout. The point of using
                       Lorem Ipsum is that it has a more-or-less normal
                       making it look like readable English.</p>
                   </div>
               </div>
           </div>
       </div><!-- card end-->
     </div>
   </div>
   <!--product specification row end-->
   <div class="row my-3">
      <h3>Similar Products</h3></div>
      <div class="row">
        <div class="col-md-3">
          <img src="img/unusedbook/fera.png" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/unusedbook/fera.png" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/unusedbook/fera.png" alt="">
        </div>
        <div class="col-md-3">
          <img src="img/unusedbook/fera.png" alt="">
        </div>
</div>
 </div>
<?php
   get_footer();
 ?>
