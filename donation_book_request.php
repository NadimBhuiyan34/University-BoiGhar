<?php
   require_once('functions/function.php');
   get_header();
   $donateid=$_GET['donateid'];
   $sel="SELECT * FROM adm_donatebook WHERE donate_id='$donateid'";
   $Q=mysqli_query($con,$sel);
   $data=mysqli_fetch_assoc($Q);
 ?>
 <div class="donation-book-section" style="background:#c2d6d6;padding-top: 50px;">
   <div class="container">
     <div class="row my-5" style="background:#f0f0f5;padding:40px;">
       <div class="col-md-4">
        <div class="book-img">
          <img src="admin/uploads/<?= $data['book_img']; ?>" width="300" height="300" alt="">
        </div>
       </div>
       <div class="col-md-8">
         <div class="book-details mt-5">
           <h4>Book Title: <?= $data['book_title']; ?></h4>
           <h5>Book Author: </h5>
           <h5>Edition: </h5>
           <p>Faculty: <?= $data['book_category']; ?></p>
           <p><b>Donation from:</b> <?= $data['book_doner']; ?></p>
           <p class="newarrival text-center">It Club</p>
         </div>
       </div>
     </div>
     <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12" style="background:#f0f0f5;padding:40px;margin-left: 370px; margin-bottom: 100px; margin-top:60px;">
        <div class="requester-about">
          <form action="" method="post">
            <?php
            if (isset($_POST["apply"])) {
              $fullname = $_POST['fullname'];
              $email = $_POST['email'];
              $dept = $_POST['dept'];
              $rollid = $_POST['rollid'];
              $book_title = $_POST['book_title'];
              $reason = $_POST['reason'];

              if (!empty($fullname)) {
                $insert="INSERT INTO adm_donate_book_request(fullname,email,department,rollid,book_title,reason)
                VALUES('$fullname','$email','$dept','$rollid','$book_title','$reason')";
                if(mysqli_query($con,$insert)){
                    echo '<script>alert("Request send Successfully. Our support team contact with you.")</script>';
                }else{
                    echo '<script>alert("Sorry! Request Not Submit.")</script>';
                }
              }
            }
             ?>
            <div class="form-group">
             <label for="exampleInputEmail1">Full Name</label>
             <input type="text" name="fullname" class="form-control" placeholder="" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Email</label>
             <input type="text" name="email" class="form-control" placeholder="" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Department Name</label>
             <input type="text" name="dept" class="form-control" placeholder="" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Roll Id</label>
             <input type="text" name="rollid" class="form-control" placeholder="" required>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Book Title</label>
             <input type="text" name="book_title" class="form-control" placeholder="" required>
           </div>
           <div class="form-group">
             <label for="comment">Describe why you need this book:</label>
             <textarea class="form-control" name="reason" rows="4" required></textarea>
           </div>
           <div class="form-check">
             <input type="checkbox" class="form-check-input" required>
             <label class="form-check-label" for="exampleCheck1">I agree with all terms and conditions.</label>
           </div>
           <input type="submit" class="btn mt-3" name="apply" value="Submit">
          </form>
        </div>
      </div>
     </div>
   </div>
 </div>
<?php
   get_footer();
 ?>
