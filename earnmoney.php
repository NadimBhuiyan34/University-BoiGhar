<?php
   require_once('functions/function.php');
   require_once 'includes/header.php';
 ?>
 <!-- slider-start -->
 <div class="slider-area">
     <div class="page-title">
         <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/earnmoney.jpg);">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <div class="slider-content slider-content-breadcrumb text-center">
                             <h1 class="white-color f-700">Earn Money</h1>
                             <nav class="text-center" aria-label="breadcrumb">
                                 <ol class="breadcrumb justify-content-center">
                                     <li class="breadcrumb-item"><a href="home.php">Buy Book</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Earn money</li>
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
 <div class="my-5">

 </div>
 <div class="earnmoney-area">
   <div class="container">
     <div class="row">
       <!--digital Clock start-->
       <div class="col-md-12 mb-5" id="digital-clock-body">
        <div class="" id="clock">
          <h2>THE TIME IS NOW</h2>
          <div class="" id="time">
            <div><span id="hour">00</span><span>Hours</span></div>
            <div><span id="minutes">00</span><span>Minutes</span></div>
            <div><span id="seconds">00</span><span>Seconds</span></div>
          </div>
        </div>
        <script type="text/javascript">
          function clock(){

            var hours = document.getElementById('hour');
            var minutes = document.getElementById('minutes');
            var seconds = document.getElementById('seconds');

            var h = new Date().getHours();
            var m = new Date().getMinutes();
            var s = new Date().getSeconds();
            if (h > 12) {
              hours.innerHTML = (h-12);
              minutes.innerHTML = m;
              seconds.innerHTML = s;
            }else {
              hours.innerHTML = h;
              minutes.innerHTML = m;
              seconds.innerHTML = s;
            }

          }
          var interval = setInterval(clock, 1000);
        </script>
       </div>
       <!--digital Clock end-->
       <!--eard money card start-->
       <div class="col-md-12 col-sm-12">
         <!-- card start-->
         <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade my-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="" enctype="multipart/form-data">
        <?php
            if(isset($_POST['confirm'])){
                $fname=$_POST['fname'];
                $mobile=$_POST['mobile'];
                $btitle=$_POST['btitle'];
                if(!empty($mobile)){
                    $insert="INSERT INTO adm_earnmoney_order_accept(fname,mobile,btitle)
                    VALUES('$fname','$mobile','$btitle')";
                    if(mysqli_query($con,$insert)){
                      echo '<script>alert("Your Request Accepted. We will contact with you as soon as possible.")</script>';
                    }else{
                        echo '<script>alert("Sorry! Request Not Submit.")</script>';
                    }
                }
            }
        ?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill out the Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="form-group">
            <label for="name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" name="fname" required>
          </div>
          <div class="form-group">
            <label for="mobile" class="col-form-label">Mobile Number:</label>
            <input type="text" class="form-control" name="mobile" required>
          </div>
          <div class="form-group">
            <label for="mobile" class="col-form-label">Book Title:</label>
            <input type="text" class="form-control" name="btitle" required>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" required>
            <label class="form-check-label" for="defaultCheck1"> I agree with all terms and conditions.</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" required>
            <label class="form-check-label" for="defaultCheck1"> Delivery under 2 days.</label>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="confirm">Confirm</button>
      </div>
    </form>
    </div>
  </div>
</div>  <!-- Modal -->
         <div class="card text-center text-white">
            <div class="card-header text-white bg-warning">
                <ul class="nav nav-tabs card-header-tabs pull-left"  id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold text-dark" id="aorder-tab" data-toggle="tab" href="#aorder" role="tab" aria-controls="aorder" aria-selected="true">Active Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" id="porder-tab" data-toggle="tab" href="#porder" role="tab" aria-controls="porder" aria-selected="false">Processing Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" id="corder-tab" data-toggle="tab" href="#corder" role="tab" aria-controls="corder" aria-selected="false">Completed Orders</a>
                            </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="aorder" role="tabpanel" aria-labelledby="aorder-tab">
                      <h4 class="text-center mb-2 font-weight-bold text-info">Active Order List</h4>
                      <!--order table start-->
                      <table class="table text-dark table-hover">
                        <thead class="thead-light">
                          <tr>
                          <th scope="col">Order No:</th>
                            <th scope="col">Book Title</th>
                            <th scope="col">Book Author</th>
                            <th scope="col">Edition</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Book Image</th>
                            <th scope="col">Comfirmation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $i = 0;
                              $sel="SELECT * FROM adm_active_reqbook WHERE status=1 ORDER BY id DESC";
                              $Q=mysqli_query($con,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                          ?>
                          <tr>
                            <th scope="row"><?php echo ++$i; ?></th>
                            <td><?= $data['req_title']; ?></td>
                            <td><?= $data['req_author']; ?></td>
                            <td><?= $data['req_edition']; ?></td>
                            <td><?= $data['req_quantity']; ?></td>
                            <td>
                                <?php
                                  if($data['req_bookimg']!=''){
                                ?>
                                  <img class="img-fluid" width="80" height="60" src="admin/uploads/<?= $data['req_bookimg']; ?>" alt="Image"/>
                                <?php
                                  }else{
                                ?>
                                  <img width="80" height="60" src="images/avatar.png" alt="Image"/>
                                <?php } ?>
                            </td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Accept </button></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <!--order table end-->
                    </div>
                    <div class="tab-pane fade" id="porder" role="tabpanel" aria-labelledby="porder-tab">
                      <h4 class="text-center mb-2 font-weight-bold text-danger">Processing Order List</h4>
                      <!--order table start-->
                      <table class="table text-dark table-hover">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Order No:</th>
                              <th scope="col">Book Title</th>
                              <th scope="col">Book Author</th>
                              <th scope="col">Edition</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Book Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $i = 0;
                              $sel="SELECT * FROM adm_active_reqbook WHERE status=2 ORDER BY id DESC";
                              $Q=mysqli_query($con,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                          ?>
                          <tr>
                            <th scope="row"><?php echo ++$i; ?></th>
                            <td><?= $data['req_title']; ?></td>
                            <td><?= $data['req_author']; ?></td>
                            <td><?= $data['req_edition']; ?></td>
                            <td><?= $data['req_quantity']; ?></td>
                            <td>
                                <?php
                                  if($data['req_bookimg']!=''){
                                ?>
                                  <img class="img-fluid" width="50" height="20" src="admin/uploads/<?= $data['req_bookimg']; ?>" alt="Image"/>
                                <?php
                                  }else{
                                ?>
                                  <img width="50" height="20" src="images/avatar.png" alt="Image"/>
                                <?php } ?>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <!--order table end-->
                    </div>
                    <div class="tab-pane fade" id="corder" role="tabpanel" aria-labelledby="corder-tab">
                      <h4 class="text-center mb-2 font-weight-bold text-primary">Completed Order List</h4>
                      <!--order table start-->
                      <table class="table text-dark table-striped">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Order No:</th>
                              <th scope="col">Book Title</th>
                              <th scope="col">Book Author</th>
                              <th scope="col">Edition</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Book Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $i = 0;
                              $sel="SELECT * FROM adm_active_reqbook WHERE status=2 ORDER BY id DESC";
                              $Q=mysqli_query($con,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                          ?>
                          <tr>
                            <th scope="row"><?php echo ++$i; ?></th>
                            <td><?= $data['req_title']; ?></td>
                            <td><?= $data['req_author']; ?></td>
                            <td><?= $data['req_edition']; ?></td>
                            <td><?= $data['req_quantity']; ?></td>
                            <td>
                                <?php
                                  if($data['req_bookimg']!=''){
                                ?>
                                  <img class="img-fluid" width="50" height="20" src="admin/uploads/<?= $data['req_bookimg']; ?>" alt="Image"/>
                                <?php
                                  }else{
                                ?>
                                  <img width="50" height="20" src="images/avatar.png" alt="Image"/>
                                <?php } ?>
                            </td>
                          </tr>
                          <?php } ?>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Mark</td>
                            <td><img width="50" src="img/book.png" alt="Image"/></td>

                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Mark</td>
                            <td><img width="50" src="img/book.png" alt="Image"/></td>

                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Mark</td>
                            <td><img width="50" src="img/book.png" alt="Image"/></td>

                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Mark</td>
                            <td><img width="50" src="img/book.png" alt="Image"/></td>

                          </tr>
                        </tbody>
                      </table>
                      <!--order table end-->
                    </div>
                </div>
            </div>
        </div>
         <!-- card end-->
       </div>
       <!--eard money card start-->
     </div>
   </div>
 </div>
<?php
   require_once 'includes/footer.php';
 ?>
