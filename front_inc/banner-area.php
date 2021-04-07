  <?php 
    // require 'backend/db.php';
    //selecting data from banner Table
    $select = "SELECT * FROM banner";
    $query = mysqli_query($db,$select);
    $assoc = mysqli_fetch_assoc($query);
    //selecting data from social media table
    $sel = "SELECT * FROM social_media";
    $q = mysqli_query($db,$sel);
    
  ?>

 <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $assoc['title1'] ?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $assoc['title2'] ?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $assoc['description'] ?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php 
                                            foreach ($q as $key => $value) {
                                                ?>
                                                <li><a href="<?= $value['link']?>"><i class="<?= $value['label'] ?>"></i></a></li>
                                                <?php
                                            }
                                         ?>
                                        
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="<?php echo 'img/banner/'.$assoc['image'] ?>" alt="banner Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>