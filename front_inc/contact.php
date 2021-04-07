<?php 
    $select="SELECT * FROM contact";
    $query = mysqli_query($db,$select);
    $assoc = mysqli_fetch_assoc($query);
 ?>
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?= $assoc['description'] ?></p>
                                <h5>OFFICE IN <span>DHAKA</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $assoc['address'] ?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$assoc['phone'] ?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $assoc['email'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="backend/msg-us.php" method='post'>
                                    <?php 
                                        if (isset($_SESSION['msg'])) {
                                            echo $_SESSION['msg'];
                                            
                                        }
                                     ?>
                                    <input type="text" placeholder="your name *" name="name" style="text-transform: capitalize">
                                    <input type="email" placeholder="your email *" name="email" style="text-transform: lowercase">
                                    <textarea name="msg" id="message" placeholder="your message *" style="text-transform: default"></textarea>
                                    <button class="btn" type="submit">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
