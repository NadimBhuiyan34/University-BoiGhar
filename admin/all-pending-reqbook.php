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
                    Pending Requested Books order
                 </div>
                 <div class="col-md-3 text-right">
                  <a href="all-active-reqbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Active Order </a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                		<tr>
                      	<th>Book Title</th>
                        <th>Book Author</th>
                        <th>Book Edition</th>
                        <th>Book Quantity</th>
                        <th>Buyer Phone</th>
                        <th>Buyer Address</th>
                        <th>Book Image</th>
                        <th>Manage</th>
                    </tr>
                	</thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM adm_pen_reqbook ORDER BY id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                    	<tr>
                        	<td><?= substr($data['req_title'],0,10);?>...</td>
                          <td><?= substr($data['req_author'],0,5);?>...</td>
                          <td><?= $data['req_edition']; ?></td>
                          <td><?= $data['req_quantity']; ?></td>
                          <td><?= $data['req_phone']; ?></td>
                          <td><?= substr($data['req_address'],0,5);?>...</td>
                          <td>
                              <?php
                                if($data['req_bookimg']!=''){
                              ?>
                                <img width="50" src="uploads/<?= $data['req_bookimg']; ?>" alt="Image"/>
                              <?php
                                }else{
                              ?>
                                <img width="50" src="images/avatar.png" alt="Image"/>
                              <?php } ?>
                          </td>
                          <td>
                            <a href="approve-pen-reqbook.php?app=<?= $data['id']; ?>"><i class="fa fa-check-square fa-lg"></i></a>
                          	<a href="view-pen-reqbook.php?v=<?= $data['id']; ?>"><i class="fa fa-eye fa-lg"></i></a>
                              <a href="edit-pen-reqbook.php?ed=<?= $data['id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-pen-reqbook.php?del=<?= $data['id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <button onclick="window.print()" class="btn btn-sm btn-primary" type="button">PDF</button>
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
