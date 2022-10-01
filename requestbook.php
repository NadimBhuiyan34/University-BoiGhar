<?php
   require_once('functions/function.php');
   require_once 'includes/header.php';
 ?>
 <!-- slider-start -->
 <div class="slider-area">
     <div class="page-title">
         <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <div class="slider-content slider-content-breadcrumb text-center">
                             <h1 class="white-color f-700">Request For Book</h1>
                             <nav class="text-center" aria-label="breadcrumb">
                                 <ol class="breadcrumb justify-content-center">
                                     <li class="breadcrumb-item"><a href="home.php">Buy Book</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Request for Book</li>
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

 <!--gap div end
 <div class="requestbook">
   <div class="container">
     <div class="row">
       <div class="col-md-8 pd0">
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
            <li><a href="#"> > Book Request</a></li>
          </ol>
          <div class="col-md-12">

          //  if(isset($_POST['submit'])){
          //                  $title=$_POST['btitle'];
          //                  $author=$_POST['bauthor'];
          //                  $edition=$_POST['bedition'];
          //                  $quantity=$_POST['bquantity'];
          //                  $phone=$_POST['phone'];
          //                  $address=$_POST['address'];
          //                  $image=$_FILES['bphoto'];
          //                  $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
//
          //                  $insert="INSERT INTO adm_reqbook(req_btitle,req_bauthor,req_bedition,req_bquantity,req_phone,req_bookimg,req_address)
          //                  VALUES('$title','$author','$edition','$quantity','$phone','$imageName','$address')";
//
          //                  if(mysqli_query($con,$insert)){
          //                    move_uploaded_file($image['tmp_name'],'admin/uploads/'.$imageName);
          //                      echo "Successfully send your Book Request";
          //                  }else{
          //                      echo "Failed! Please try again.";
          //                  }
          //              }

            <form class="form-horizontal was-validated" action="" method="post">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="col-md-6 heading_title mb-3">
                    Add Book Information
                  </div>

                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Book Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="" name="btitle" required>
                    </div>
                  </div>
                  <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Book Author</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="" name="bauthor" required>
                            </div>
                          </div>
                  <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Book Edition</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="" name="bedition" required>
                            </div>
                          </div>
                  <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Quantity</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" placeholder="" name="bquantity" required>
                            </div>
                          </div>
                 <div class="form-group">
                           <label for="" class="col-sm-3 control-label">Phone Number</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control" placeholder="" name="phone" required>
                           </div>
                         </div>
                  <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-8">
                              <textarea class="form-control" name="address" rows="4" cols="20" required></textarea>
                            </div>
                          </div>
                  <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Book Cover Photo(Optional)</label>
                            <div class="col-sm-8">
                              <input type="file" name="bphoto">
                            </div>
                  </div>
                </div>
                <div class="panel-footer text-center mt-5">
                  <button type="button" class="btn btn-info mr-5" name="reset">Reset</button>
                  <button type="submit" class="btn btn-info ml-5" name="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-info text-white">
              How To Send Request for a Book
            </div>
            <div class="card-body">
              <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 196g Lorem Ipsum passages,
              </p>
              <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It  Aldus PageMaker including versions of Lorem Ipsum.
              </p>
            </div>
          </div>
        </div>
     </div>
   </div>
 </div> -->
 <!--form area start-->
 <div class="reqbook-area gray-bg py-5">
   <div class="container">
     <div class="row">
       <div class="col-md-2">

       </div>
       <div class="col-md-8">
         <div class="events-details-form faq-area-form white-bg mb-30">
           <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="events-form-title text-center mb-30">
                      <h2>Request for a Book</h2>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam </p>
                  </div>
                  <div class="clearfix"></div>
              </div>
            <div class="panel-body">
              <?php
                  if(!empty($_POST)){
                      $req_btitle=$_POST['book_title'];
                      $req_bauthor=$_POST['book_author'];
                      $req_bedition=$_POST['book_edition'];
                      $req_bquantity=$_POST['book_quantity'];
                      $req_phone=$_POST['phone_num'];
                      $req_address=$_POST['address'];
                      $image=$_FILES['pic'];
                      $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                      if(!empty($req_btitle)){

                          $insert="INSERT INTO adm_pen_reqbook(req_title,req_author,req_edition,req_quantity,req_phone,req_address,status,req_bookimg)
                          VALUES('$req_btitle','$req_bauthor','$req_bedition','$req_bquantity','$req_phone','$req_address','1','$imageName')";
                          if(mysqli_query($con,$insert)){
                              move_uploaded_file($image['tmp_name'],'admin/uploads/'.$imageName);
                              echo "Your Requested book Successfully Published";
                          }else{
                              echo "Failed publish";
                          }

                      }else{
                            echo "Please, enter book title";
                      }
                  }
              ?>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" placeholder="Book Title" class="form-control" name="book_title">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" placeholder="Book Author" class="form-control" name="book_author">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" placeholder="Book Edition" class="form-control" name="book_edition">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" placeholder="Book Quantity" class="form-control" name="book_quantity">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" placeholder="Your Phone Number" class="form-control" name="phone_num">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" placeholder="Your Address" class="form-control" name="address">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Book image</label>
                  <div class="col-sm-8">
                    <input type="file" name="pic">
                  </div>
                </div>
            </div>
            <div class="panel-footer col-md-12 text-center mt-3 ml-5">
              <div class="faq-form-btn events-form-btn text-center">
                  <button class="btn" style="background:#002147; color:#fff;">Confirm Now</button>
              </div>
            </div>
          </div>
          </form>
                    </div>
       </div>
       <div class="col-md-2">

       </div>
     </div>
   </div>
 </div>
 <!--end-->
 <!-- subscribe start -->
 <div class="subscribe-area" style="background:#00b386;height:300px; padding-top:80px;">
     <div class="container">
         <div class="subscribe-box" style="background:#ff4d94;">
             <div class="row">
                 <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                     <div class="row justify-content-between">
                         <div class="col-xl-6 col-lg-7 col-md-8">
                             <div class="subscribe-text">
                                 <h1>Subscribe</h1>
                                 <span>Enter your email and get latest updates and offers subscribe us</span>
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
<?php
   require_once 'includes/footer.php';
 ?>
