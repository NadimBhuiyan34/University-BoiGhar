<?php

   require_once('functions/function.php');
   get_header();
   //needLogged();

   if(isset($_GET["action"]))
    {
    	if($_GET["action"] == "delete")
    	{
    		foreach($_SESSION["shopping_cart"] as $keys => $values)
    		{
    			if($values["item_id"] == $_GET["id"])
    			{
    				unset($_SESSION["shopping_cart"][$keys]);
    				echo '<script>alert("Item Removed")</script>';
    				echo '<script>window.location="cart.php"</script>';
    			}
    		}
    	}
    }
 ?>
 <div class="cart-main-section">
   <div class="container">
     <div class="cart-page-title mt-5">
       <div class="container bg-info my-5 py-2" style="height:80px; width:800px;">
        <h1 class="text-center text-white mb-5"
         style="font-family: 'Abril Fatface', cursive;"><i class="fas fa-shopping-cart"></i> VIEW SELECTED PRODUCTS</h1>
           </div>
     </div>
     <div class="table-responsive">
       <table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
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
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>

				</table>
     </div>
     <div class="shipping-btn my-3">
       <?php if(!empty($_SESSION["shopping_cart"])){ ?>
       <a style="float: right;background:#ff0066;color:#fff;" href="shipping_order.php" type="button" class="btn btn-success">Go To Shipping</a>
     <?php }else { ?>
       <div class="container bg-danger my-5 py-2" style="height:80px; width:800px;">
         <h1 class="text-center text-white mb-5"
         style="font-family: 'Abril Fatface', cursive;"><i class="fas fa-exclamation-triangle"></i> You don't Select any items! </h1>
       </div> <?php } ?>
     </div>
   </div>
 </div>
<?php
   get_footer();
 ?>
