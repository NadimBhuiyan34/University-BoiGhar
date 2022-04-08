<?php
   require_once('functions/function.php');
   get_header();
 ?>
 <div class="container cart-page">
   <table class="cart_table">
     <tr>
       <th>Product</th>
       <th>Quantity</th>
       <th>Subtotal</th>
     </tr>
     <tr>
       <td>
            <div class="cart-info">
              <img src="img/unusedbook/fera.png" alt="">
              <div class="">
                <p>Algorithm books</p>
                <small>Price: $50.00</small>
                <br>
                <a href="#">Remove</a>
              </div>
            </div>
       </td>
       <td> <input type="number" name="" value="1"> </td>
       <td>$50.00</td>
     </tr>
     <tr>
       <td>
            <div class="cart-info">
              <img src="img/unusedbook/fera.png" alt="">
              <div class="">
                <p>Algorithm books</p>
                <small>Price: $50.00</small>
                <br>
                <a href="#">Remove</a>
              </div>
            </div>
       </td>
       <td> <input type="number" name="" value="1"> </td>
       <td>$50.00</td>
     </tr>
     <tr>
       <td>
            <div class="cart-info">
              <img src="img/unusedbook/fera.png" alt="">
              <div class="">
                <p>Algorithm books</p>
                <small>Price: $50.00</small>
                <br>
                <a href="#">Remove</a>
              </div>
            </div>
       </td>
       <td> <input type="number" name="" value="1"> </td>
       <td>$50.00</td>
     </tr>
   </table>
   <div class="total-price">
     <table>
       <tr>
         <td>Subtotal</td>
         <td>$200.00</td>
       </tr>
       <tr>
         <td>Tax</td>
         <td>$30.00</td>
       </tr>
       <tr>
         <td>Total</td>
         <td>$230.00</td>
       </tr>
       <tr>
         <td>
           <a class="btn btn-primary mt-5 place-btn" href="checkout.php">CHECKOUT</a>
         </td>
       </tr>
     </table>

   </div>
 </div>
<?php
   get_footer();
 ?>
