  <?php 

    //selecting data from banner Table
    $select = "SELECT * FROM about_me";
    $query = mysqli_query($db,$select);
    $assoc = mysqli_fetch_assoc($query);

    // selecting data from education Table
    $sel = "SELECT * FROM education";
    $q = mysqli_query($db,$sel);

?>
<section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="<?= 'img/banner/'.$assoc['image'] ?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2><?php echo $assoc['title'] ?></h2>
                            </div>
                            <div class="about-content">
                                <p><?php echo nl2br($assoc['description']) ?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <?php 
                                foreach ($q as $key => $value) {
                                    ?>
                                    <div class="education">
                                        <div class="year"><?= $value['year'] ?></div>
                                        <div class="line"></div>
                                        <div class="location">
                                            <span><?=  $value['name']?></span>
                                            <div class="progressWrapper">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?php echo $value['result'].'%'; ?>" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                             ?>
                            <!-- End Education Item -->
                        
                        </div>
                    </div>
                </div>
            </section>