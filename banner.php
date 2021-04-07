<?php include 'inc/header.php';
 
 ?>
 <?php 
    require 'backend/db.php';
    $select = "SELECT * FROM banner";
    $query = mysqli_query($db,$select);
    $assoc = mysqli_fetch_assoc($query);
    
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
                                  <h2>Edit Banner Section</h2>
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
                                <form action="backend/banner-add.php" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="title1">Title 1</label>
                                    <input type="text" class="form-control err" id="title1" name="title1">
                                <!-- Title 1 error showing -->
                                  
                                    <?php 
                                        if (isset($_SESSION['empty_title1'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['empty_title1']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['empty_title1']);
                                        }
                                        if (isset($_SESSION['title1_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['title1_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['title1_err']);
                                        }
                                     ?>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="title2">Title 2</label>
                                    <input type="text" class="form-control err" placeholder="Enter title 2" id="title2" name="title2">
                                    <!-- title2 error showing -->
                                    <?php 
                                        if (isset($_SESSION['empty_title2'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['empty_title2']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['empty_title2']);
                                        }
                                        if (isset($_SESSION['title2_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['title2_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['title2_err']);
                                        }
                                     ?>
                                  </div>
                                  <div class="form-group">
                                    <label for="description">Description</label>
                                  
                                  <textarea name="description" id="description" class="form-control" placeholder="Tell about yourself"></textarea>
                                  <!-- description error showing here -->
                                  <?php 
                                    if (isset($_SESSION['desc_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['desc_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['desc_err']);
                                        }
                                   ?>
                                  </div>
                                  <div class="form-group">
                                      <label for="banner-img">Banner Image</label><br>
                                      <input type="file" class="" style="border:none;" name="image"><br>
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
                                        if (isset($_SESSION['img_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['img_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['img_err']);
                                        }
                                       ?>
                                  </div>
                                <div class="form-group text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
         <?php include 'inc/copyright.php' ?>
        <?php include 'inc/footer.php' ?>
