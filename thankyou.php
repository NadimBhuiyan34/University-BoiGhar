<?php
   require_once('functions/function.php');
   get_header();
   unset($_SESSION["shopping_cart"]);
   //var_dump($_SESSION["shopping_cart"]);
   //session_destroy($_SESSION["shopping_cart"]);

    //if(!empty($_SESSION["shopping_cart"])){
    //  unset($_SESSION["shopping_cart"]); }
 ?>
 <div class="thank-area" style="background-image: url(img/thankyou.jpg)">
   <div class="message" style="display: flex;align-items: center;justify-content: center;">
     <div class="card text-center" style="width:650px;height:400px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
         <div class="card-header">
         </div>
         <div class="card-body">
           <?php
               $sel="SELECT * FROM adm_billing_info ORDER BY id DESC LIMIT 1";
               $Q=mysqli_query($con,$sel);
               while($data=mysqli_fetch_assoc($Q)){
            ?>
           <h4>Your Order Are Received...</h4>
           <h5>Your Order Number: <?= $data["orderid"]; ?></h5>
           <h5>Total Price: <?= $data["totalPrice"]; ?></h5>
           <br><br>
           <h4>Thank You!</h4>
           <h5>University Boighar</h5>
         <?php } ?>
         </div>
         <div class="card-footer text-muted">
           <a href="home.php" class="btn btn-primary" style="background:#007bff;color:#fff;">Order More</a>
         </div>
       </div>
   </div>
 </div>
<?php
   get_footer();
 ?>
