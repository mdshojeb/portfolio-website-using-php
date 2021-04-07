<?php error_reporting(0) ?>
<?php require 'session.php' ?>
  <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/smlogo.png" alt="logo" height="25">
                        </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                      <?php 
                        if (isset($_SESSION['img'])) {
                            ?>
                              <img src="img/user/<?php echo $_SESSION['img'] ?>" alt="user-img" title="Mat Helme" width="150" height="70px" style="border-radius: 50%"> 
                            <?php
                        }
                       ?>
                    </div>
                    <h5><a href="#">
                    <?php 
                        if (isset($_SESSION['name'])) {
                            echo $_SESSION['name'];
                        }
                     ?>
                         
                     </a> </h5>
                    <p class="text-muted">
                        <?php 
                        if (isset($_SESSION['role'])) {
                            if ($_SESSION['role'] == 2) {
                                echo 'Admin';
                            }
                            else{
                                echo 'User';
                            }
                        }
                     ?>
                    </p>
                </div>
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <!--<li class="menu-title">Navigation</li>-->
                        <li>
                            <a href="dashboard.php">
                                <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                            </a>
                        </li>
                        <?php 
                            if ($_SESSION['role']==2) {
                                ?>

                             <li>
                            <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Banner Secition</span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="banner.php">Banner</a></li>
                                <li><a href="social.php">Social</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fi-mail"></i><span> About </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="about-me.php">About Me</a></li>
                                <li><a href="education.php">Add Education</a></li>
                                <li><a href="view-education.php">View Education</a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="javascript: void(0);"><i class="fi-mail"></i><span>Services Section</span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="services-title.php">Services Title</a></li>
                                <li><a href="services.php">Add Services</a></li>
                                <li><a href="view-services.php">View Services</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fi-bar-graph-2"></i><span> Portfolio </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="portfolio.php">Add Portfolio item</a></li>
                                <li><a href="view-portfolio.php">Portfolio Overview</a></li>
                                
                            </ul>
                        </li>

                         <?php
                            }
                         ?>
                     <?php 
                        require 'backend/db.php';
                            if ($_SESSION['role']==2) {
                                ?>
                            <li>
                            <a href="contact-section.php"><i class="fi-box"></i><span> Contact Section </span></a>
                            
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Communication
                                
                                <?php 
                                    $sel ="SELECT COUNT(*) as total_unread FROM msg where status=1";
                                    $q= mysqli_query($db,$sel);
                                    $unread = mysqli_fetch_assoc($q);
                                    if ($unread['total_unread']>0) {
                                        ?>
                                        <span class="badge badge-danger badge-pill float-right"><?= $unread['total_unread']?></span>
                                    <?php 
                                    }
                                 ?>
                            </span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="view-msg.php">Message</a></li>
                                <li><a href="view-review.php">View Review</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                                <li><a href="maps-mapael.html">Mapael Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="page-starter.html">Starter Page</a></li>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-logout.html">Logout</a></li>
                                <li><a href="page-recoverpw.html">Recover Password</a></li>
                                <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                <li><a href="page-404.html">Error 404</a></li>
                                <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                <li><a href="page-500.html">Error 500</a></li>
                            </ul>
                        </li>

                            <?php
                            }else{
                                ?>
                                   <li>
                            <a href="review.php"><i class="fi-bar-graph-2"></i><span> Give A Review </span> <span class="menu-arrow"></span></a>
                        </li>

                        <li>
                            <a href="review.php"><i class="fi-bar-graph-2"></i><span> Send Message</span></a>
                        </li>
                        <li>
                            <a href="review.php"><i class="fi-bar-graph-2"></i><span>My Account</span></a>
                        </li>
                        <li>
                            <a href="review.php"><i class="fi-bar-graph-2"></i><span>Setting</span></a>
                        </li>
                        <li>
                            <a href="review.php"><i class="fi-bar-graph-2"></i><span>Logout</span></a>
                        </li>
                                <?php
                            }
                         ?>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        