<?php
   require_once('functions/function.php');
   get_header();
 ?>
 <div class="image-donate" style="background:#ecf2f9;">
   <div class="container py-5">
   <div class="row mt-5">
     <div class="col-md-6">
       <div class="card text-center" style="width:600px;height:500px;">
  <div class="card-header">
  </div>
  <div class="card-body">
   <img src="uploads/donatebook1.jpg" class="responsive img-fluid" alt="">
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
     </div>
     <div class="col-md-6">
       <div class="card text-center" style="width:600px;height:500px;">
  <div class="card-header">
  </div>
  <div class="card-body">
   <img src="uploads/dbook1.jpg" class="responsive img-fluid" alt="">
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
     </div>
   </div>

 </div>
 </div>
 <div class="background-donatebook" style="background:#ecf2f9;">
   <div class="container bg-info py-2" style="height:80px; width:800px;padding-top:40px;">
     <h1 class="text-center text-white mb-5" style="font-family: 'Abril Fatface', cursive;"><i class="fab fa-centos"></i> Donate your Unused books</h1>
   </div>
 </div>
 <div class="area" style="background:#ecf2f9;display: flex;align-items: center;justify-content: center;">
 <div class="donate-area" style="width:600px;height:580px; margin-top:40px;background:#fff; padding:10px;margin-bottom: 40px;">
   <div class="row">
     <div class="col-md-12" >
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
      <div class="panel panel-primary">
             <div class="panel-heading">
                 <div class="col-md-12 heading_title">

                  </div>
                 <div class="clearfix"></div>
             </div>
           <div class="panel-body">
               <?php
                   if(!empty($_POST)){
                       $book_title=$_POST['book_title'];
                       $book_author=$_POST['book_author'];
                       $book_subtitle=$_POST['book_subtitle'];
                       $book_category=$_POST['book_category'];
                       $book_doner=$_POST['book_doner'];
                       $image=$_FILES['pic'];
                       $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                       if(!empty($book_title)){

                           $insert="INSERT INTO adm_donatebook(book_title,book_author,book_subtitle,book_category,book_doner,book_img)
                           VALUES('$book_title','$book_author','$book_subtitle','$book_category','$book_doner','$imageName')";
                           if(mysqli_query($con,$insert)){
                               move_uploaded_file($image['tmp_name'],'admin/uploads/'.$imageName);
                               echo "Successfully Published";
                           }else{
                               echo "Failed publish";
                           }

                       }else{
                             echo "Please, enter New book title";
                       }
                   }
               ?>
               <div class="form-group">
                 <label for="" class="col-sm-3 control-label">Book Title</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" name="book_title">
                 </div>
               </div>
               <div class="form-group">
                 <label for="" class="col-sm-3 control-label">Book Author</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" name="book_author">
                 </div>
               </div>
               <div class="form-group">
                 <label for="" class="col-sm-3 control-label">Book Subtitle</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" name="book_subtitle">
                 </div>
               </div>
               <div class="form-group">
                 <label for="" class="col-sm-3 control-label">Book Category</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" name="book_category">
                 </div>
               </div>
               <div class="form-group">
                 <label for="" class="col-sm-3 control-label">Donated By</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" name="book_doner">
                 </div>
               </div>
               <div class="form-group">
                 <label for="" class="col-sm-3 control-label">Book Cover image()</label>
                 <div class="col-sm-8">
                   <input type="file" name="pic">
                 </div>
               </div>
           </div>
           <div class="panel-footer text-center">
             <button class="btn btn-sm btn-primary" style="background:#006666;color:#fff;">Publish</button>
           </div>
         </div>
         </form>
     </div><!--col-md-12 end-->
 </div>
</div>
 </div>
<?php
   get_footer();
 ?>
