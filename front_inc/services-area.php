 <?php 
 	// require '../backend/db.php';
 	//selecting data from service_section table
 	$select = "SELECT * FROM service_section";
    $query = mysqli_query($db,$select);
    $service = mysqli_fetch_assoc($query);

    //selecting data from services table
 	$sel = "SELECT * FROM services";
    $q = mysqli_query($db,$sel);
    
 
  ?>
 <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span style="text-transform:uppercase"><?= $service['short_title'] ?></span>
                                <h2><?php echo $service['head_title'] ?></h2>
                            </div>
                        </div>
                    </div>
                    <!-- services Item will show here -->
					<div class="row">
						<?php 
							foreach ($q as $key => $value) {
								?>
								<div class="col-lg-4 col-md-6">
									<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
		                                <i class="<?php echo $value['img'] ?>"></i>
										<h3><?php echo $value['heading'] ?></h3>
										<p><?php echo $value['description']?></p>
									</div>
								</div>
								<?php
							}
						 ?>
					</div>
				</div>
			</section>