<?php include 'inc/header.php';
    error_reporting(0);

   
    require 'backend/db.php';
    $id = $_GET['id'];
    $sel = "SELECT * FROM services  WHERE id='$id'";
    $query = mysqli_query($db,$sel);
    $value = mysqli_fetch_assoc($query);

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
                                  <img src="img/portfolio.png" alt="edit" height="80px">
                                  <h2>Edit Services</h2>
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
                                <form action="backend/update-services.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" value='<?= $value['id']?>' name="id">
                                    <label for="heading" class="">Title</label>
                                    <input type="text" class="form-control <?php echo isset($_SESSION['name_err'])? 'err':'' ?>" id="heading" value="<?= $value['heading']?>" name="heading">
                                    <!-- error showing -->
                                    <?php 
                                        if (isset($_SESSION['name_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['name_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['name_err']);
                                        }
                                        
                                     ?>
                                  </div>
                                  <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea name="description" id="desc" class="form-control <?php echo isset($_SESSION['desc_err'])? 'err':'' ?>"><?=$value['description']?></textarea>
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
                                    <label for="icon">Add Font-Awesome Icon</label>
                                    <input name="icon" id="icon" class="form-control <?php echo isset($_SESSION['icon_err'])? 'err':'' ?>"value="<?= $value['img']?>"/>
                                    <!-- error showing -->
                                    <?php 
                                        if (isset($_SESSION['icon_err'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['icon_err']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['icon_err']);
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