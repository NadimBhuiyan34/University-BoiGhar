<?php
   require_once('functions/function.php');
   require_once 'includes/header.php';
 ?>
 <!-- slider-start -->
 <div class="slider-area">
     <div class="page-title">
         <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/sell.jpg);">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                         <div class="slider-content slider-content-breadcrumb text-center">
                             <h1 class="white-color f-700">Sell Books</h1>
                             <nav class="text-center" aria-label="breadcrumb">
                                 <ol class="breadcrumb justify-content-center">
                                     <li class="breadcrumb-item"><a href="home.php">Buy Book</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Sell Books</li>
                                 </ol>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- slider-end -->
 <!--gap div start-->
 <div class="my-5">

 </div>
 <!--gap div end-->
 <!--Sell page side tutorial start-->
 <div class="tutorial-area">
   <div class="container">
     <div class="row">
       <div class="col-md-1">

       </div>
       <div class="col-md-12">
         <div class="card text-center">
           <div class="card-header">
             Unused Book Selling Process
           </div>
           <div class="card-body">
             <h5 class="card-title">Unused Book Selling Process</h5>
             <p class="card-text">
              This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price. Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.
             </p>
             <p class="card-text">
               Sell needs to fill up some requirements as like:
             </p>
             <p class="card-text">
               1. Fill the below form with valid data
             </p>
             <p class="card-text">
               2. Give Clear Information
             </p>
             <a href="#sellbookform" class="btn btn-primary">Sell Your Books</a>
           </div>
           <div class="card-footer text-muted">
             2 days ago
           </div>
         </div><!--Sell page side tutorial end-->
       </div>
       <div class="col-md-1">

       </div>
     </div>
   </div>
 </div>
 <!--gap div start-->
 <div class="my-5">

 </div>
 <!--gap div end-->
 <!-- video start -->
 <div class="container">
   <div class="card">
  <div class="card-header"> <h4>Watch how to sell your books</h4> </div>
  <div class="card-body">
<iframe width="1100" height="500" src="https://www.youtube.com/embed/D1t3HBt01ik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
 </div>

 <!-- video end -->
 <!--sell book form start-->
 <div class="sellbook-area pt-65 gray-bg">
   <div class="container">
     <div class="row ml-5">

       <!--Sell page form start-->
       <div class="col-md-8 col-lg-8 col-xl-8 col-sm-8 bg-white my-4 ml-5 py-5" id="sellbookform">
         <div class="">
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
               <li class="breadcrumb-item" aria-current="page"><a href="#"><span class="text-center">Fill the form for selling books</span></a></li>
             </ol>
           </nav>
         </div>
         <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">

                 </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
            <?php
            $username=$_SESSION['user_username'];
                if(!empty($_POST)){
                    $secbook_title=$_POST['book_title'];
                    $secbook_author=$_POST['book_author'];
                    $secbook_edition=$_POST['book_edition'];
                    $secbook_price=$_POST['book_price'];
                    $seller_num=$_POST['seller_num'];
                    $image=$_FILES['pic'];
                    $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                    if(!empty($secbook_title)){

                        $insert="INSERT INTO adm_selloldbook(secbook_title,secbook_author,secbook_edition,secbook_price,seller_num,secbook_img,username)
                        VALUES('$secbook_title','$secbook_author','$secbook_edition','$secbook_price','$seller_num','$imageName','$username')";
                        if(mysqli_query($con,$insert)){
                            move_uploaded_file($image['tmp_name'],'admin/uploads/'.$imageName);
                            echo "Second-Hand book Successfully Published";
                        }else{
                            echo "Failed publish";
                        }

                    }else{
                          echo "Please, enter book title";
                    }
                }
            ?>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Title</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="book_title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Author</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="book_author">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Edition</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="book_edition">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Price</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="book_price">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Seller Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="seller_num">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Book Cover image(270*326)</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
          </div>
          <div class="panel-footer col-xl-6 text-center mt-5 ml-5">
            <button class="btn btn-sm btn-primary">Publish</button>
          </div>
        </div>
        </form>
         </div>
          <!--Sell page form end-->
       </div>
     </div>
   </div>
   <!---->

   <!---->
 </div>
 <!--sell book form start-->
<?php
   require_once 'includes/footer.php';
 ?>
