<?php
   require_once('functions/function.php');
   get_header();
 ?>
    <!-- slider-start -->
    <div class="slider-area">
        <div class="pages-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/event2.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Our Events</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- courses start -->
    <div class="events-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="events-list">
                <div class="row">
                  <?php
                      $sel="SELECT * FROM adm_event ORDER BY event_id DESC";
                      $Q=mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($Q)){
                  ?>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.html"><img width="200" height="212" src="admin/uploads/<?= $data['event_img']; ?>" alt=""></a>
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
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-events-btn mt-15 mb-30">
                            <nav class="course-pagination mb-30" aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-left"></span></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
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
       get_footer();
     ?>
