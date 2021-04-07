 <?php 
    $sel = "SELECT * FROM review";
    $query = mysqli_query($db,$sel);
?>       
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <?php 
                                    foreach ($query as $key => $value) {
                                        if($value['status']==2){?>
                                         <div class="single-testimonial text-center">
                                            <div class="testi-avatar">
                                                <img src="img/user/<?= $value['img']?>" alt="img" width="150px" height="150px" style="border-radius:50%">
                                            </div>
                                            <div class="testi-content text-center">
                                                <h4><span>“</span><?= $value['review'] ?><span>”</span><br><br><span style="font-size: 15px;color:#fff">I am giving SMCREATION</span><br>
                                                <?php 
                                                    $star = $value['rating'];
                                                    if($star <=5) {
                                                        for ($i=0; $i <$star ; $i++) { 
                                                            ?>
                                                            <i class="fas fa-star" style="color:yellow"></i>
                                                            <?php
                                                        }
                                                    }
                                                 ?>
                                             </h4>

                                                <div class="testi-avatar-info">
                                                    <h5><?= $value['name'] ?></h5>
                                                    <span><?= $value['user_status'] ?></span>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                }
                                    }
                                 ?>                               
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="frontend/page-register.php" class="btn btn-success btn-lg">Write A Review</a>
                    </div>

                </div>
            </section>
