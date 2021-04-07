<?php include 'inc/header.php';


 ?>
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
                                  <h2>My Account</h2>
                                </div>
                                 <?php 
                                        if (isset($_SESSION['success'])) {
                                            
                                            ?>
                                            <div class="alert alert-success alert-dismissible" style="margin-top:10px;">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                                </button>
                                                <strong><?php echo $_SESSION['success']; ?></strong>
                                            </div>
                                            <?php
                                            unset($_SESSION['success']);
                                        }
                                     ?>
                                <h5>Name : <?php echo $_SESSION['name'] ?></h5>
                                <h5>Email : <?php echo $_SESSION['email'] ?></h5>
                                <h5>Phone : <?php echo $_SESSION['phone'] ?></h5>
                                <h5>Role : <?= $_SESSION['role']==2?'Admin':'User'; ?></h5>
                                <form action="backend/myaccount-edit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="degree" class="">Status</label>
                                    <input type="text" class="form-control <?php echo isset($_SESSION['name_err'])? 'err':'' ?>" id="degree" placeholder="Enter title" name='status'>
                                  </div>
                                  <div class="row">
                                      <div class="form-group col">
                                        <label for="" class="">Upload Your Image</label>
                                        <input type="file" class="form-control" id="year"name="image">
                                        <!-- error showing -->
                                         <?php 
                                        if (isset($_SESSION['empty_image'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['empty_image']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['empty_image']);
                                        }
                                     ?>
                                      </div>
                                  
                                  </div>
                                <div class="form-group text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg">Add</button>
                                </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
         <?php include 'inc/copyright.php' ?>
        <?php include 'inc/footer.php' ?>