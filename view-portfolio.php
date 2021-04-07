<?php 
    require 'backend/db.php';
    
    $select = "SELECT * FROM portfolio";
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
                                  <h2>Portfolio Overview</h2>
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
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sl = 1; 
                                            foreach ($query as $key => $value) {
                                                ?>
                                                 <tr>
                                                    <td><?= $sl++?></td>
                                                    <td><?= $value['catagory'] ?></td>
                                                    <td><img src="img/portfolio/<?= $value['img'] ?>" alt="img" width="50px" height="50px"></td>
                                                    <td><?= $value['heading'] ?></td>
                                                    <td><?= substr($value['description'],0,50).'[...]' ?></td>
                                                    <td>
                                        <a href="edit-portfolio.php?id=<?= $value['id'] ?>"><img src="img/writing.png" alt="" style="height:25px; margin:5px"></a>
                                              
                                        <a href="backend/portfolio-delete.php?id=<?= $value['id'] ?>"><img src="img/delete.png" alt="" style="height:25px; margin:5px"></i></a>
                                       

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