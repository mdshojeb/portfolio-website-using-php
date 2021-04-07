<?php include 'inc/header.php';
    error_reporting(0);

   
    require 'backend/db.php';
    $id = $_GET['id'];
    $sel = "SELECT * FROM education  WHERE id='$id'";
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
                                  <h2>Edit Education</h2>
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
                                <form action="backend/update-education.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?= $value['id']?>" name="id">
                                <div class="form-group">
                                    <label for="degree" class="">Cirtification In</label>
                                    <input type="text" class="form-control <?php echo isset($_SESSION['name_err'])? 'err':'' ?>" id="degree" placeholder="Enter title" name="cir_name" value="<?= $value['name'] ?>">
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
                                  <div class="row">
                                      <div class="form-group col">
                                        <label for="year" class="">Year</label>
                                        <input type="text" class="form-control <?php echo isset($_SESSION['year_empty'])? 'err':'' ?>" id="year" placeholder="Pass Year" name="year" value="<?= $value['year']?>">
                                        <!-- error showing -->
                                         <?php 
                                        if (isset($_SESSION['year_empty'])) {
                                            ?>
                                            <span style='color:red;font-size:15px;margin-left:10px'>
                                                <?php echo $_SESSION['year_empty']; ?>
                                            </span>
                                            <style>.err{border:1px solid red;}</style>
                                            <?php
                                            unset($_SESSION['year_empty']);
                                        }
                                     ?>
                                      </div>
                                      <div class="form-group col">
                                        <label for="result" class="">Result(%)</label>
                                        <input type="number" class="form-control <?php echo isset($_SESSION['result_empty'])? 'err':'' ?>" id="result" placeholder="Result" min="10" max="100" name="result" value="<?= $value['result']?>">
                                        <!-- error showing -->
                                          <?php 
                                            if (isset($_SESSION['result_empty'])) {
                                                ?>
                                                <span style='color:red;font-size:15px;margin-left:10px'>
                                                    <?php echo $_SESSION['result_empty']; ?>
                                                </span>
                                                <style>.err{border:1px solid red;}</style>
                                                <?php
                                                unset($_SESSION['result_empty']);
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