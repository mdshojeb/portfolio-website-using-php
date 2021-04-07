<?php 
    require 'backend/db.php';
    
    $select = "SELECT * FROM review";
    $query = mysqli_query($db,$select);
    
 ?>
<?php include 'inc/header.php';?>
        <!-- ========== Left Sidebar Start ========== -->
      <?php include 'inc/sidebar.php' ?>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
            <!-- Top Bar start -->
            <?php include 'inc/topbar.php' ?>
            <!-- Top Bar End -->
            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="jumbotron text-center">
                                  <h2>Review Overview</h2>
                                </div>
                                <?php 
                                   if (isset($_SESSION['delete'])) {
                                           ?>
                                            <div class="alert alert-success alert-dismissible" style="margin-top:10px;">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                                </button>
                                                <strong><?php echo $_SESSION['delete']; ?></strong>
                                            </div>
                                            <?php
                                            unset($_SESSION['delete']);
                                        }
                                     ?>
                                 <table class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th>SL</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Review</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sl = 1; 
                                            foreach ($query as $key => $value) {
                                               if ($value['status']==1) {
                                                 ?>
                                                     <tr>
                                                    <td><?= $sl++?></td>
                                                    
                                                    <td><img src="img/user/<?= $value['img'] ?>" alt="img" width="80px" height="80px" style="border-radius:50%"></td>
                                                    <td><?= $value['name'] ?></td>
                                                    <td><?= $value['user_status'] ?></td>
                                                    <td><?= substr($value['review'],0,50).'[...]' ?></td>
                                                    <td>
                                        <a href="backend/edit-review.php?id=<?= $value['id'] ?>" style="background:#E98F2D;padding:5px;color:#fff;border-radius:2px">Approve</a>
                                              
                                        <a href="backend/review-delete.php?id=<?=$value['id'] ?>"style="background:#FC324E;padding:5px;color:#fff;border-radius:2px;">Delete</a>
                                        
                                            </td>
                                            
                                          </tr>

                                        <?php
                                         } else {
                                           ?>
                                                   <tr>
                                                    <td><?= $sl++?></td>
                                                    
                                                    <td><img src="img/user/<?= $value['img'] ?>" alt="img" width="80px" height="80px" style="border-radius:50%"></td>
                                                    <td><?= $value['name'] ?></td>
                                                    <td><?= $value['user_status'] ?></td>
                                                    <td><?= substr($value['review'],0,50).'[...]' ?></td>
                                                    <td>
                                            <a style="background:#AAAEB4;padding:5px;color:#fff;border-radius:2px">Approved</a>
                                              
                                        <a href="#" data-toggle="modal" data-target="#myModal" style="background:#FC324E;padding:5px;color:#fff;border-radius:2px;">Delete</a>
                                         <!-- The Modal -->
                                              <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                  
                                                    <!-- Modal Header -->
                                                    <div class="modal-header bg-dark text-light">
                                                      <h5 class="modal-title">Confirmation</h5>
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    
                                                    <!-- Modal body -->
                                                    <div class="modal-body text-center">
                                                      <h4 class="text-danger">Are you really want to delete this item <br>permanantly?</h4>
                                                    </div>
                                                    
                                                    <!-- Modal footer -->
                                                    <div class="text-center m-3">
                                                      <a href="backend/review-delete.php?id=<?= $value['id'] ?>" class="btn btn-primary">Confirm</a>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal" href="">Close</button>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                              </div>

                                            </td>
                                            
                                          </tr>

                                           <?php
                                         }
                                               
                                    }
                                 ?>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
         <?php include 'inc/copyright.php' ?>
        <?php include 'inc/footer.php' ?>