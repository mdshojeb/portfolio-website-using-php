<?php include 'inc/header.php';

    require 'backend/db.php';
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
                                  <h2>About Me</h2>
                                </div>
                                 <?php 
                                        if (isset($_SESSION['update'])) {
                                            
                                            ?>
                                            <div class="alert alert-success alert-dismissible" style="margin-top:10px;">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                                </button>
                                                <strong><?php echo $_SESSION['update']; ?></strong>
                                            </div>
                                            <?php
                                            unset($_SESSION['update']);
                                        }
                                     ?>
                                      <?php 
                                        if (isset($_SESSION['empty'])) {
                                            
                                            ?>
                                            <div class="alert alert-danger alert-dismissible" style="margin-top:10px;">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                                </button>
                                                <strong><?php echo $_SESSION['empty']; ?></strong>
                                            </div>
                                            <?php
                                            unset($_SESSION['empty']);
                                        }
                                     ?>
                                <form action="backend/about-me-add.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="">Title</label>
                                    <input type="text" class="form-control err" id="link" placeholder="Enter title" name="title">
                                    <!-- error showing -->
                                    <?php 
                                        if (isset($_SESSION['empty_title'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['empty_title']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['empty_title']);
                                        }
                                        if (isset($_SESSION['title_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['title_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['title_err']);
                                        }
                                     ?>
                                  </div>
                                  <div class="form-group">
                                    <label for="description" class="">About Yourself</label>
                                    <textarea name="desc" id="description"class="form-control err" placeholder="Tell about yourself"></textarea>
                                    <!-- error showing -->
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
                                      <label for="banner-img">About Image</label><br>
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