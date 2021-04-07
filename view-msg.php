<?php 
    require 'backend/db.php';
    
    $select = "SELECT * FROM msg order by id desc";
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
                                  <h2>Message Overview</h2>
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
                                 <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sl = 1; 
                                            foreach ($query as $key => $value) {
                                                
                                                  ?>
                                                   <tr style="<?= $value['status']==1?'background: #E9ECEF':'background: #fff'; ?>">
                                                    <td><?= $sl++?></td>
                                                    <td><?= $value['name'] ?></td>
                                                    
                                                    <td><?= $value['email'] ?></td>
                                                    <td><?= substr($value['msg'],0,50).'[...]' ?></td>
                                                    <td>
                                        <a href="msg-read.php?id=<?= $value['id'] ?>" style="<?= $value['status']==1?'background:#DB574C;color:#fff;padding:5px;border-radius:3px':'background:#AAAEB4;color:#fff;padding:5px;border-radius:3px '; ?>"><?= $value['status']==1?'Unread':'Read' ?></a>
                                              
                                        <a href="backend/msg-delete.php?id=<?=$value['id'] ?>"style="background:#FC324E;padding:5px;color:#fff;border-radius:2px;">Delete</a>
                                        
                                            </td>
                                            
                                          </tr>
                                        <?php

                                        
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