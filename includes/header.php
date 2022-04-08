<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UBoiGhar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-headphone"></span>
                                    <p class="phone-number">+01309080748</p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name">support.uboighar@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!--top header social icon-->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-instagram"></span></a></li>
                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                    <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="home.php">
                                    <img src="img/logo/uboighar.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">
                                <ul>
                                    <!--<li class="toggle-search-icon"><a href="#"><span class="ti-search"></span>
                                            <div class="toggle-search-box">
                                                <form id="searchbox" method="post">
                                                    <input placeholder="Search" type="text" name="search_text" id="search_text">
                                                    <button class="button-search"><span class="ti-search"></span></button>
                                                </form>
												<div id="result" style="background:#ffffff;display:block;"></div>

                                            </div>
                                        </a>

                                    </li>-->
                                    <li class="shopping-cart"><a href="cart.php"><span class="ti-shopping-cart"></span>
                                            <span class="shopping-counter"><?php $t=0;
                                            foreach($_SESSION["shopping_cart"] as $keys => $val){
                                              $t=$t+1;
                                            }
                                             echo $t; ?></span>
                                        </a></li>
                                <?php if (empty($_SESSION['user_username'])) {
                                ?>
                                <li class="registration"><a href="login.php"><span class="ti-user"></span></a></li> <?php }else{ ?>
                                  <li class="profile"><a href="profile.php"><span class="fa fa-user"> <?= $_SESSION['user_username']; ?></span></a></li> <?php } ?>


                                </ul>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="home.php" class="actived">BUY BOOK</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="#bestSell">Best Sell</a>
                                                </li>
                                                <li>
                                                    <a href="#new">New Collection</a>
                                                </li>
                                                <li>
                                                    <a href="#secondhand">Second Hand</a>
                                                </li>
                                                <li>
                                                    <a href="#donate">Donate Book</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="sellbook.php">SELL BOOK</a>
                                            <!--<ul class="submenu">
                                                <li>
                                                    <a href="event.html">Events 01</a>
                                                </li>
                                                <li>
                                                    <a href="event_details.html">Events Details</a>
                                                </li>
                                            </ul>-->
                                        </li>
                                        <li>
                                            <a href="requestbook.php">REQUEST BOOK</a>
                                            <!--<ul class="submenu">
                                                <li>
                                                    <a href="course.html">Courses</a>
                                                </li>
                                                <li>
                                                    <a href="course_details.html">Course Details</a>
                                                </li>
                                            </ul>-->
                                        </li>
                                        <li>
                                            <a href="earnmoney.php">EARN MONEY</a>
                                        </li>
                                        <li>
                                            <a href="donate_book.php">Donate Books</a>
                                        </li>
                                        <!--<li>
                                            <a href="itclub.php">IT CLUB</a>
                                        </li>-->
                                        <!--<li>
                                            <a href="blog.html">BLOG</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="blog.html">Blog Single</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>-->
                                        <li>
                                            <a href="about.php">PAGES</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about.php">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="contact.php">Contact Us</a>
                                                </li>
                                                <li>
                                                    <a href="donate_book.php">Donate Books</a>
                                                </li>
                                                <li>
                                                    <a href="event.php">Events</a>
                                                </li>
                                                <!--<li>
                                                    <a href="advisors.html">Advisors</a>
                                                </li>
                                                <li>
                                                    <a href="advisors_details.html">Advisors Details</a>
                                                </li>-->
                                                <li>
                                                    <a href="faq.php">FAQ</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->
