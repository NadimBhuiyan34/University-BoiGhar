<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All Donate Books
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="add-donatebook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add donate book</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                		<tr>
                      	<th>Book Title</th>
                        <th>Book Subtitle</th>
                        <th>Book Category</th>
                        <th>Book Doner</th>
                        <th>Book Image</th>
                        <th>Manage</th>
                    </tr>
                	</thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM adm_donatebook ORDER BY donate_id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                    	<tr>
                        	<td><?= substr($data['book_title'],0,25);?>...</td>
                          <td><?= substr($data['book_subtitle'],0,35);?>...</td>
                          <td><?= $data['book_category']; ?></td>
                          <td><?= $data['book_doner']; ?></td>
                          <td>
                              <?php
                                if($data['book_img']!=''){
                              ?>
                                <img width="50" src="uploads/<?= $data['book_img']; ?>" alt="Image"/>
                              <?php
                                }else{
                              ?>
                                <img width="50" src="images/avatar.png" alt="Image"/>
                              <?php } ?>
                          </td>
                          <td>
                          	<a href="view-donatebook.php?v=<?= $data['donate_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                              <a href="edit-donatebook.php?ed=<?= $data['donate_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-donatebook.php?dbookdel=<?= $data['donate_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <button onclick="window.print()" class="btn btn-sm btn-info" type="button">PDF</button>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <button onclick="window.print()" class="btn btn-sm btn-success" type="button">PRINT</button>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
  }else{
      echo "Access Denied! You have no permission access this page.";
  }
?>
