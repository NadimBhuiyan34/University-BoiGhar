<div class="container-fluid content_full">
    <div class="row">
        <div class="col-md-2 sidebar pd0">
          <div class="side_user">
              <img class="img-responsive" src="images/avatar.png"/>
                <h4><?= $_SESSION['name']; ?></h4>
                <span><i class="fa fa-circle"></i> Online</span>
            </div>
            <h2>MAIN NAVIGATION</h2>
            <ul>
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <?php
                    if($_SESSION['role']=='1'){
                ?>
                <li><a href="all-user.php"><i class="fa fa-user-circle"></i>All Admin User</a></li>
                <?php
                    }
                    if($_SESSION['role']<='2'){
                ?>
                <li><a href="all-customer.php"><i class="fa fa-users"></i> All Customer</a></li>
                <li><a href="all-orderlist.php"><i class="fa fa-cart-arrow-down"></i> All Order List</a></li>
                <li><a href="add-banner.php"><i class="fa fa-newspaper-o"></i> Banner</a></li>
                <?php
                    }
                ?>
                <li><a href="all-earnmoney_order_request.php"><i class="fa fa-first-order"></i> Order Accept Request</a></li>
                <li><a href="all-bestsellbook.php"><i class="fa fa-book"></i> Best Sell Book</a></li>
                <li><a href="select_best_sell_book.php"><i class="fa fa-window-restore"></i> Select for Best Sell</a></li>
                <li><a href="all-newbook.php"><i class="fa fa-book"></i> New Book</a></li>
                <li><a href="all-sechandbook.php"><i class="fa fa-book"></i> Old Book</a></li>
                <li><a href="all-donatebook.php"><i class="fa fa-book"></i> Donate Book</a></li>
                <li><a href="all-donate_book_request.php"><i class="fa fa-dot-circle-o"></i> Donate Book Request</a></li>
                <li><a href="all-active-reqbook.php"><i class="fa fa-book"></i> Requested Books</a></li>
                <li><a href="all-event.php"><i class="fa fa-calendar-check-o"></i> Events</a></li>
                <li><a href="all-message.php"><i class="fa fa-envelope"></i> Message Box</a></li>
                <li><a href="all-testimonil.php"><i class="fa fa-certificate"></i> Testimonil</a></li>
                <li><a href="all-faq.php"><i class="fa fa-question-circle"></i> View FAQ</a></li>
                <li><a href="all-subscriber.php"><i class="fa fa-address-card-o"></i> View Subscriber</a></li>
                <li><a href="calender.php"><i class="fa fa-calendar"></i> Calender</a></li>
                <li><a href="discount.php"><i class="fa fa-gift"></i> Discount Update</a></li>
                <li><a href="return-policy.php"><i class="fa fa-undo"></i> Return Policy</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div><!--sidebar end-->
        <div class="col-md-10 admin-part pd0">
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#">Dashboard</a></li>
            </ol>
