<?php
   require_once('functions/function.php');
   get_header();
   //needLogged();

   $total_item_cart=0;
    if (isset($_POST["add_to_cart"])) {
     if (isset($_SESSION["shopping_cart"])) {
       $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
       if(!in_array($_GET["id"], $item_array_id))
	    	{
	    		$count = count($_SESSION["shopping_cart"]);
	    		$item_array = array(
	    			'item_id'			=>	$_GET["id"],
	    			'item_name'			=>	$_POST["hidden_title"],
	    			'item_price'		=>	$_POST["hidden_price"],
	    			'item_quantity'		=>	$_POST["quantity"]
	    		);
	    		$_SESSION["shopping_cart"][$count] = $item_array;
	    	}
	    	else
	    	{
	    		echo '<script>alert("Item Already Added")</script>';
	    	}
     }else
	    {
	    	$item_array = array(
	    		'item_id'			=>	$_GET["id"],
	    		'item_name'			=>	$_POST["hidden_title"],
	    		'item_price'		=>	$_POST["hidden_price"],
	    		'item_quantity'		=>	$_POST["quantity"]
	    	);
	    	$_SESSION["shopping_cart"][0] = $item_array;
	    }
   }

   //remove item from Cart

 ?>

    <!--Card for category and carousel ads start-->
    <div class="adssection">
      <div class="card">
        <div class="row">
          <!--  <div class="col-md-2 sidebar pd0">

                <h2 class="text-bold">BOOK CATEGORY</h2>
                <ul>
                	 <li><a href="#"><i class="fas fa-tachometer-alt"></i> Best Seller Book</a></li>
                    <li><a href="#products"><i class="fa fa-user-circle"></i> New Collection Book</a></li>
                    <li><a href="#sec_hand_books"><i class="fa fa-gamepad"></i> Used Books</a></li>
                    <li><a href="#donatebook"><i class="fa fa-gamepad"></i> Donate Books</a></li>
                    <li><a href="#"><i class="fa fa-image"></i> IT Club Resource</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Facultywise Book</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Stationery and Others</a></li>
                </ul>
            </div> sidebar end-->
            <div class="col-md-2">
              <div class="card" style="height:500px;">
                <div class="category">
                  <div class="widget mb-40 white-bg">
                            <div class="sidebar-form" style="border:1px solid #808080;">
                                <form action="#">
                                    <input placeholder="Enter Book Title" type="text" name="search_text" id="search_text">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                                <div id="result" style="background:#ffffff;display:block;"></div>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Category</h4>
                            <div class="widget-link">
                                <ul class="sidebar-link">
                                    <li>
                                        <a href="#bestSell">Best Sell</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#new">New Books</a>
                                        <span>07</span>
                                    </li>
                                    <li>
                                        <a href="#secondhand">Old Books</a>
                                        <span>03</span>
                                    </li>
                                    <li>
                                        <a href="#donate">Donation Books</a>
                                        <span>05</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-md-10 admin-part pd0">

                <div class="col-md-12">
                  <div class="card">

                    <!--Slider start-->
                    <div class="slider-area pos-relative">
                        <div class="slider-active">
                          <?php
                              $sel="SELECT * FROM adm_banner ORDER BY ban_id DESC";
                              $Q=mysqli_query($con,$sel);
                              while($bdata=mysqli_fetch_assoc($Q)){
                           ?>
                            <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url('admin/uploads/<?= $bdata['ban_image']; ?>');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-9 col-md-12">
                                            <div class="slider-content slider-content-2">
                                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><?= $bdata['ban_title']; ?></h1>
                                                <p data-animation="fadeInUp" data-delay=".4s"><?= $bdata['ban_subtitle']; ?></p>
                                                <a class="theme-btn" data-animation="fadeInUp" data-delay=".6s" href="<?= $bdata['ban_url']; ?>"><span class="btn-text"><?= $bdata['ban_btn']; ?></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!--Slider end-->
                   </div>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
      </div>
    </div>
    <!--Card for category and carousel ads end-->
    <!-- about start -->

    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-title-section mb-30">
                        <h1>Welcome To Our University BoiGhar</h1>
                        <p>Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temin cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure repreh nderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occcu idatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Horem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temin cididunt ut labore et dolore magna aliqua Ut enim ad minim veniam,quis nostrude</p>
                        <a href="about.php" class="theme-btn blue-bg-border mt-20"><span class="btn-text">Read More</span></a>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-right-img mb-30">
                        <img src="img/about/about-right.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- about end -->
    <!---->

    <!--test for best sell books start-->
    <div class="best-books-area mt-5" id="bestSell">
      <div class="container">
        <div class="">
          <h3 class="font-weight-bold text-primary text-center">Best Selling Books</h3>
          <br>
        </div>
        <div class="owl-carousel owl-theme">
          <?php
                $sel="SELECT * FROM adm_newbook WHERE status='7' ORDER BY id DESC";
                $Q=mysqli_query($con,$sel);
                while($data=mysqli_fetch_assoc($Q)){
             ?>
     <form method="post" action="home.php?action=add&id=<?= $data['id']; ?>" enctype="multipart/form-data">
    <div class="item">
      <div class="product-wrapper mb-45 text-center">

          <input type="hidden" name="hidden_title" value="<?= $data['book_title']; ?>" />
          <input type="hidden" name="hidden_price" value="<?= $data['book_price']; ?>" />
          <input type="hidden" min="1" max="100" name="quantity" value="1" class="form-control" />
          <div class="product-img"> <a href="product_details.php?p=<?= $data['id']; ?>" data-abc="true"> <img width="350px" height="260px" src="admin/uploads/<?= $data['book_img']; ?>" alt=""> </a> <span class="text-center"><i class="fa fa-rupee"></i><?= $data['book_price']; ?></span>
              <div class="product-action">
                  <div class="product-action-style"> <a href="product_details.php?p=<?= $data['id']; ?>"> <i class="fa fa-eye"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"><button type="submit" style="border:none;background:#fff;" name="add_to_cart"> <i class="fa fa-shopping-cart"></i></button></a></div>
              </div>
          </div>
          <div class="text-center mt-3">
            <h5><b><?= $data['book_title']; ?></b> </h5>

          </div>

      </div>
    </div>
  </form>
    <?php
  }
     ?>
</div>
      </div>
    </div>

    <!-- new books products section -->
    <section id="products">
        <div class="container my-5">
          <div class="text-center" id="new">
            <h3 class="font-weight-bold text-primary"><a href="newcollection_books.php">New Collection Books</a></h3>
          </div>
            <div class="d-flex flex-row">
                <div class="text-muted m-2" id="res"> <a href="newcollection_books.php">Showing All</a> </div>
                <div class="ml-auto mr-lg-4">
                    <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                            <option value="popularity"><b>Popularity</b></option>
                            <option value="prcie"><b>Price</b></option>
                            <option value="rating"><b>Rating</b></option>
                        </select> </div>
                </div>
            </div>
            <div class="row">

              <?php
                  $sel="SELECT * FROM adm_newbook WHERE status='1' ORDER BY id DESC LIMIT 8";
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
    </section>
    <!--Product section end-->
    <!--unused book start-->
    <div class="unused-book-area" id="sec_hand_books">
    <div class="text-center" id="secondhand">
      <h3 class="font-weight-bold text-primary mb-5">Second Hand Books</h3>
    </div>

    <div class="container d-flex justify-content-center">
    <div class="row">
      <?php
          $sel="SELECT * FROM adm_sechandbook ORDER BY secbook_id DESC LIMIT 8";
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
<div class="text-center">
  <a href="all_sec_hand_book.php" class="btn btn-success" type="button" name="button">Show All</a>
</div>
</div>
    <!--unused book end-->
    <div class="iconbox-area gray-bg py-4 mt-3">
      <div class="container">
        <!--icon text box start-->
        <div class="row pt-65">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="feature-wrapper mb-30">
                    <div class="feature-title-heading">
                        <h3>Fast Delivery</h3>
                        <span><i class="fa fa-rocket"  aria-hidden="true"></i></span>

                    </div>
                    <div class="feature-text">
                        <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="feature-wrapper mb-30">
                    <div class="feature-title-heading">
                        <h3>Fast Transaction</h3>
                        <span><i class="fa fa-book" aria-hidden="true"></i></span>
                    </div>
                    <div class="feature-text">
                        <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="feature-wrapper mb-30">
                    <div class="feature-title-heading">
                        <h3>24/7 Support</h3>
                        <span><i class="fa fa-comments" aria-hidden="true"></i></span>
                    </div>
                    <div class="feature-text">
                        <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--iconbox end-->
      </div>
    </div>
    <!--start donate book area-->
    <div class="donatebook-area my-5" id="donatebook">
      <div class="text-center" id="donate">
        <h3 class="font-weight-bold text-primary"><a href="all_donatebooks.php">Donation Books</a></h3>
      </div>
      <div class="container d-flex justify-content-center mt-30 mb-50">

    <div class="row">
      <?php
          $sel="SELECT * FROM adm_donatebook ORDER BY donate_id ASC LIMIT 4";
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
    <!--end donate book area-->



    <!--product list 2 Best writer books start-->

    <!--product list 2 Best writer books end-->

    <!-- events start -->
    <div id="events" class="events-area events-bg-height pt-100 pb-95" style="background-image: url(img/courses/courses_bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="white-color">Upcoming Events</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="white-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events-list mb-30">
                <div class="row">
                  <?php
                      $sel="SELECT * FROM adm_event ORDER BY event_id DESC LIMIT 4";
                      $Q=mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($Q)){
                  ?>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.html"><img src="admin/uploads/<?= $data['event_img']; ?>" width="200" height="212" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date"><?= $data['event_date']; ?></span>
                                                <span class="month"><?= $data['event_month']; ?></span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4><?= $data['event_title']; ?></h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time"><?= $data['event_time']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p><?= $data['event_subtitle']; ?></p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Speaker : <span><?= $data['event_speaker']; ?></span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>


                </div>

            </div>
            <div class="events-view-btn">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="view-all-events text-center font-weight-bold">
                             <a href="event.php"><button class="yewello-btn">view all events<span>&rarr;</span></button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events end -->

    <!-- video start
    <div class="video-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-wrapper text-center">
                        <div class="video-content">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=i8nLrvcNcrg"><img src="img/video/play_icon.png" alt=""></a>
                            <span>Watch Our Latest Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    video end -->
    <!-- testimonials start-->
    <div class="testimonilas-area pt-100 pb-90 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">What Our Students Say</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonilas-list">
                <div class="row testimonilas-active">
                  <?php
                      $sel="SELECT * FROM adm_testimonil ORDER BY testo_id DESC";
                      $Q=mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($Q)){
                   ?>
                    <div class="col-xl-12">
                        <div class="testimonilas-wrapper">
                            <div class="testimonilas-heading d-flex">
                                <div class="testimonilas-author-thumb">
                                    <img src="admin/uploads/<?= $data['client_img']; ?>" alt="">
                                </div>
                                <div class="testimonilas-author-title">
                                    <h1><?= $data['client_name']; ?></h1>
                                    <h2><?= $data['client_title']; ?></h2>
                                </div>
                            </div>
                            <div class="testimonilas-para">
                                <p><?= $data['client_review']; ?></p>
                            </div>
                            <div class="testimonilas-rating">
                                <ul>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
 <!--testimonials end -->
 <!-- subscribe start -->
 <div class="subscribe-area" style="background:#003366;height:300px; padding-top:80px;">
     <div class="container">
         <div class="subscribe-box" style="background:#ff4d94;">
             <div class="row">
                 <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                     <div class="row justify-content-between">
                         <div class="col-xl-6 col-lg-7 col-md-8">
                             <div class="subscribe-text">
                                 <h1 style="color:#ffffff;">Subscribe</h1>
                                 <span style="color:#ffffff;">Enter your email and get latest updates and offers subscribe us</span>
                             </div>
                         </div>
                         <div class="col-xl-4 col-lg-5 col-md-4 justify-content-end">
                             <div class="email-submit-form">
                                 <div class="subscribe-form">

                                     <form action="#" method="post">
                                       <?php
                                         if(isset($_POST["subscribe"])){
                                           $semail=$_POST["semail"];

                                           if(!empty($semail)){
                                             $insert="INSERT INTO adm_subscribers(subscriber_email)
                                             VALUES('$semail')";
                                             if(mysqli_query($con,$insert)){
                                                 echo '<script>alert("Your email added Successfully")</script>';
                                             }else{
                                                 echo '<script>alert("Failed to aubscribe!")</script>';
                                             }
                                           }
                                         }
                                        ?>
                                         <input placeholder="Enter your email" type="email" name="semail">
                                        <button type="submit" style="width:1px;height:2px; position:absolute; background:#ff4d94;" name="subscribe" class="btn btn-sm-primary"><i class="fas fa-long-arrow-alt-right"></i></button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- subscribe end -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script type="text/javascript">
 $('.owl-carousel').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:3
         },
         1000:{
             items:4
         }
     }
 })
 </script>
<?php
   get_footer();
 ?>
