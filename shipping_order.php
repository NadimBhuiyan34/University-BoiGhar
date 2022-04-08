<?php

   require_once('functions/function.php');
   get_header();
$discount =0.00;
$orderid=rand(10000,99999);
$username=$_SESSION['user_username'];
$orderStatus="hold";
 if(isset($_POST['submit'])){
   $fullname=$_POST['fullname'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $address=$_POST['address'];
   $city=$_POST['city'];
   $zipcode=$_POST['zipcode'];
   $paymentMethod=$_POST['paymentMethod'];
   $paymentNumber=$_POST['paymentNumber'];
   $transactionId=$_POST['transactionId'];
   $deliveryArea=$_POST['deliveryArea'];
   $discount=$_POST['discount'];
   $totalPrice=$_POST['totalPrice'];

   foreach($_SESSION["shopping_cart"] as $keys => $val){
     $product_name=$val['item_name'];
     $quantity=$val["item_quantity"];
     $price=$val["item_price"];
     $tprice=number_format($val["item_quantity"] * $val["item_price"], 2);
     //$orderdate=str(date_create(date("Y-m-d")));
   $insert="INSERT INTO adm_billing_info(fullname,email,mobile,address,city,zipcode,paymentMethod,paymentNumber,transactionId,deliveryArea,orderid,product_name,quantity,price,tprice,discount,totalPrice,orderdate,username,orderStatus)
         VALUES ('$fullname','$email','$mobile','$address','$city','$zipcode','$paymentMethod','$paymentNumber','$transactionId','$deliveryArea','$orderid','$product_name','$quantity','$price','$tprice','$discount','$totalPrice',CURDATE(),'$username','$orderStatus')";
        if(mysqli_query($con,$insert)){
           echo '<script>alert("Your Order is Confirm.")</script>';
            echo "<script> location.href='thankyou.php'; </script>";
           //header('Location: thankyou.php');
        }else{
            echo '<script>alert("Your order is not confirm.")</script>';
        }
}
 }
 ?>

 <!--design start-->
 <div class="billing-area" style="background-image: url(img/shipping.jpg)">
   <form method="POST">
 <div class="container">
   <div class="shipping-area">

  <div class="row pt-5">
 <!--payment details start-->
  <div class="col-md-6">
  <div class="col-md-12 billing-address bg-gray">
    <div class="card text-center">
      <div class="card-header">
        <h4>Billing Address</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
          <input type="text" class="form-control" name="fullname" id="" placeholder="Full Name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="" placeholder="Email address" required>
        </div>
         <div class="form-group">
          <input type="text" class="form-control" name="mobile" id="" placeholder="Mobile Number" required>
        </div>
       <div class="form-group">
          <input type="text" class="form-control" name="address" id="" placeholder="Address" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="city" id="" placeholder="City" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="zipcode" id="" placeholder="Zip Code" required>
        </div>
      </form>
      </div>
      <div class="card-footer text-muted">

      </div>
    </div>

  </div>
  <!---->
    <div class="col-md-12 payment bg-gray">
      <div class="card text-center">
        <div class="card-header">
          <h4>Payment Details</h4>
        </div>
        <div class="card-body">
          <div class="payment" style="border:2px solid #03befc;padding: 20px;">
            <label for="text">Payment Method</label>
            <br>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="paymentMethod" id="inlineRadio1" value="Bkash" required>
          <label class="form-check-label" for="inlineRadio1">Bkash</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="paymentMethod" id="inlineRadio2" value="Nagad" required>
          <label class="form-check-label" for="inlineRadio2">Nagad</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="paymentMethod" id="inlineRadio2" value="Rocket" required>
          <label class="form-check-label" for="inlineRadio2">Rocket</label>
        </div>
         <div class="form-group py-2">
           <label for="num">Choose one number for send money</label>
            <label for="num">Bkash: 01309080748 Rocket: 01838082983 Nagad: 01838082983</label>
            <input type="text" class="form-control" name="paymentNumber" placeholder="Mobile Number" required>
          </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Transaction Id" name="transactionId" required>
          </div>
          <div class="form-group">
            <select class="form-select form-control" name="deliveryArea" aria-label="Default select example" required>
              <option selected disabled>Select Your Delivery Area</option>
              <?php
              $sel="SELECT * FROM adm_delivery_area ORDER BY id ASC";
              $Quy=mysqli_query($con,$sel);
              while($deliveyinfo=mysqli_fetch_assoc($Quy)){ ?>
              <option value="<?= $deliveyinfo['deliveryCharge'];?>"><?= $deliveyinfo['areaName']; ?></option>  <?php } ?>
            </select>

        </div>

          </div>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>
  </div>
  </div><!--payment details end-->
  <!--cart details start-->


  <div class="col-md-6">
    <div class="col-md-12">
      <div class="card text-center">
      <div class="card-header">
        <h4><i class="fa fa-shopping-cart"></i> Cart<span class="price" style="color:black"> <b>4</b>  </span>  </h4>
      </div>
      <div class="card-body">

            <table class="table table-bordered table-info table-striped">
               <thead class="table-dark">
                 <th width="40%">Item Name</th>
                 <th width="10%">Quantity</th>
                 <th width="15%">Price</th>
                 <th width="15%">Total</th>

               </thead>
               <tbody style="font-weight:bold;">
               <?php
               if(!empty($_SESSION["shopping_cart"]))
               {
                 $total = 0;
                 foreach($_SESSION["shopping_cart"] as $keys => $values)
                 {
               ?>
               <tr>
                 <td><?php echo $values["item_name"]; ?></td>
                 <td><?php echo $values["item_quantity"]; ?></td>
                 <td>$<?php echo $values["item_price"]; ?></td>
                 <td>$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>

               </tr>
               <?php
                   $total = $total + ($values["item_quantity"] * $values["item_price"]);
                 }
               ?>
               <tr>
                 <td colspan="3" align="right">Total</td>
                 <td align="right">$<?php echo number_format($total, 2); ?></td>
               </tr>
               <tr>
                 <td colspan="3" align="right">Discount</td>
                 <?php
                 $s="SELECT * FROM adm_discount";
                 $Qe=mysqli_query($con,$s);
                 $in=mysqli_fetch_assoc($Qe);
                 if ($total > $in["maxprice"]) {
                   $discount=$in["percent"]/100;
                 }

                  ?>
                 <td align="right">$<?php $mainprice=number_format(($total*$discount), 2); echo $mainprice; ?></td>
               </tr>
               <tr>
                 <td colspan="3" align="right">Total</td>
                 <td align="right">$<?php $totalprice= number_format(($total-$mainprice), 2); echo $totalprice; ?>
                   <input type="hidden" name="discount" value="<?php echo $mainprice; ?>">
                   <input type="hidden" name="totalPrice" value="<?php echo $totalprice; ?>">
                 </td>
               </tr>
               <?php
               }
               ?>
    </tbody>
             </table>
      </div>
    </div>

     </div><!--cart details end-->
     <div class="col-md-12">
       <div class="card">
  <div class="card-header" style="background:#ff0066;">
    <h4 style="color:#fff;">Send Money Via Bkash </h4>
  </div>
  <div class="card-body">
<p>Send Money allows you to transfer money from your bKash Account to another bKash Account. To send money </p>
<p>01. Go to your bKash Mobile Menu by dialing "247# <br>
02. Choose "Send Money <br>
03. Enter the bKash Account Number you want to send money to <br>
04. Enter the amount you want to send <br>
05. Enter a reference about the transaction. (Do not use more than one word, avoid space or special characters) <br>
06. Now enter your bKash Mobile Menu PIN to confirm the transaction Done! You and the Receiver both will receive a confirmation message from bKash.</p>
<p>There is no charge for "Send Money' up to 500 Taka with bKash App. By dialing "247#, 5 Taka charge will be applicable on every 'Send Money' transaction.</p>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
     </div>
  </div>
</div>
<div class="placeorderbtn" style="padding-top:30px;">
  <a href="cart.php"> <input type="button" name="back" class="btn" value="Back To Cart" style="margin-left:15px;background-color:#03befc; color:#fff;"></a>
  <input type="submit" name="submit" class="btn" style="background-color:#03befc; color:#fff; margin-left:430px;" value="Place Order">
</div>

</div>
</div></form>
</div>
 <!--design end-->
<?php
   get_footer();
 ?>
