
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
                                  <h2>Write A Review</h2>
                                </div>
                                <form action="backend/review-add.php" method="post">
                                  <div class="form-group">
                                    
                                    <?php 
                                        if (isset($_SESSION['insert'])) {
                                            
                                            ?>
                                            <div class="alert alert-success alert-dismissible" style="margin-top:10px;">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                                </button>
                                                <strong><?php echo $_SESSION['insert']; ?></strong>
                                            </div>
                                            <?php
                                            unset($_SESSION['insert']);
                                        }
                                     ?>
                                    <label for="label">Write What You Want</label>
                                    <textarea name="review" id="label" class="form-control err"placeholder="Maximum character is 200"></textarea>
                                    <!-- social media error -->
                                    <span style= "color:red; font-size:15px;margin-left:5px">
                                        <?php 
                                        if (isset($_SESSION['err'])) {
                                            echo $_SESSION['err'];?>
                                            <style>
                                                .err{border:1px solid red;}
                                            </style>
                                            <?php
                                            unset($_SESSION['err']);
                                        }
                                     ?>
                                    </span>
                                     </div>
                                <div class="form-group mt-3">
                                    I am giving you <input type="number" max="5" class="err"name="rating"> Star out of 5!
                                </div>
                                 <span style= "color:red; font-size:15px;margin-left:5px">
                                        <?php 
                                        if (isset($_SESSION['rate'])) {
                                            echo $_SESSION['rate'];?>
                                            <style>
                                                .err{border:1px solid red;}
                                            </style>
                                            <?php
                                            unset($_SESSION['rate']);
                                        }
                                     ?>

                                <div class="form-group text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg">Add to Banner</button>
                                </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
         <?php include 'inc/copyright.php' ?>
        <?php include 'inc/footer.php' ?>