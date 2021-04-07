<?php session_start(); ?>
<!doctype html>
<html lang="en">
<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="../assets/js/modernizr.min.js"></script>
    <style>
        
        .checkbox-custom input[type="checkbox"]:checked + label::before {
        background-color: #A300BD;
        border-color: #A300BD;
}
    </style>
</head>

<body class="account-pages">
    <!-- Begin page -->
    <div class="accountbg" style="background: url('../img/lachlan-dempsey-6VPEOdpFNAs-unsplash.jpg');background-size: cover;background-position: center;"></div>
    <div class="wrapper-page account-page-full">
        <div class="card">
            <div class="card-block">
                <div class="account-box">
                    <div class="card-box p-5">
                        <h2 class="text-uppercase text-center pb-4">
                            <a href="index.html" class="text-success">
                                <span><img src="images/logo_3.png" alt="" height="26"></span>
                            </a>
                        </h2>
                        <form class="form-horizontal" action="../backend/register.php" method="post">
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="username">Full Name</label>
                                    <input class="form-control err_border" type="text" id="username" name="name"placeholder="Michael Zenaty">
                                </div>
                                <!-- name error showing -->
                                <span style="color:red;font-size: 14px; margin-left:15px;"> 
                                    <?php 

                                    if (isset($_SESSION['less_name'])) {
                                        echo $_SESSION['less_name'];
                                        unset($_SESSION['less_name']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                   <?php 

                                    if (isset($_SESSION['empty_name'])) {
                                        echo $_SESSION['empty_name'];
                                        unset($_SESSION['empty_name']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                   <?php 

                                    if (isset($_SESSION['more_name'])) {
                                        echo $_SESSION['more_name'];
                                        unset($_SESSION['more_name']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                   <?php 

                                    if (isset($_SESSION['invalid_name'])) {
                                        echo $_SESSION['invalid_name'];
                                        unset($_SESSION['invalid_name']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                 
                                </span>

                            </div>
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control err_border" type="text" id="emailaddress"  placeholder="john@deo.com" name="email">
                                </div>
                                <!-- email error -->
                                <span style="color:red;font-size: 14px; margin-left:15px;">
                                    <?php 

                                    if (isset($_SESSION['empty_email'])) {
                                        echo $_SESSION['empty_email'];
                                        unset($_SESSION['empty_email']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                 <?php 

                                    if (isset($_SESSION['invalid_email'])) {
                                        echo $_SESSION['invalid_email'];
                                        unset($_SESSION['invalid_email']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                 <?php 

                                    if (isset($_SESSION['exist_email'])) {
                                        echo $_SESSION['exist_email'];
                                        unset($_SESSION['exist_email']);
                                        ?>
                                        <style>
                                            .err_border{
                                                border: 1px solid red;
                                            }
                                        </style>
                                        <?php    
                                    }
                                 ?>
                                </span>

                            </div>
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="">Phone</label>
                                    <input class="form-control err_border" type="text" placeholder="Enter your phone number" name="phone">
                                </div>
                                <!-- phone eror showing -->
                                <span style="color:red;font-size: 14px; margin-left:15px;">
                                      <?php 

                                        if (isset($_SESSION['empty_phone'])) {
                                            echo $_SESSION['empty_phone'];
                                            unset($_SESSION['empty_phone']);
                                            ?>
                                            <style>
                                                .err_border{
                                                    border: 1px solid red;
                                                }
                                            </style>
                                            <?php    
                                        }
                                 ?>
                                 <?php 

                                        if (isset($_SESSION['invalid_phone'])) {
                                            echo $_SESSION['invalid_phone'];
                                            unset($_SESSION['invalid_phone']);
                                            ?>
                                            <style>
                                                .err_border{
                                                    border: 1px solid red;
                                                }
                                            </style>
                                            <?php    
                                        }
                                 ?>

                                </span>
                            </div>
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input class="form-control err_border" type="password" id="password" placeholder="Enter your password" name="pass">
                                </div>
                                <!-- password error -->
                                     <span style="color:red;font-size: 14px; margin-left:15px;">
                                      <?php 

                                        if (isset($_SESSION['invalid_pass'])) {
                                            echo $_SESSION['invalid_pass'];
                                            unset($_SESSION['invalid_pass']);
                                            ?>
                                            <style>
                                                .err_border{
                                                    border: 1px solid red;
                                                }
                                            </style>
                                            <?php    
                                        }
                                 ?>
                                   <?php 

                                        if (isset($_SESSION['empty_pass'])) {
                                            echo $_SESSION['empty_pass'];
                                            unset($_SESSION['empty_pass']);
                                            ?>
                                            <style>
                                                .err_border{
                                                    border: 1px solid red;
                                                }
                                            </style>
                                            <?php    
                                        }
                                 ?>

                            
                                </span>
                            </div>
                          
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <div class="checkbox checkbox-custom">
                                        <input id="remember" type="checkbox" checked="" name='radiobtn'>
                                        <label for="remember">
                                            I accept <a href="#" class="" style="color:#9C06CC">Terms and Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- check error -->
                                       <span style="color:red;font-size: 14px; margin-left:15px;">
                                      <?php 

                                        if (isset($_SESSION['empty_check'])) {
                                            echo $_SESSION['empty_check'];
                                            unset($_SESSION['empty_check']);
                                            ?>
                                            <style>
                                                .err_border{
                                                    border: 1px solid red;
                                                }
                                            </style>
                                            <?php    
                                            }
                                        ?>
                                </span>

                            </div>
                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" style="background: #A300BD; border:#A300BD">Sign Up Free</button>
                                </div>
                            </div>
                        </form>
                        <div class="row m-t-50" style="">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Already have an account? <a href="page-login.php" class="text-dark m-l-5"><b>Sign In</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-t-60 text-center" style="position: relative;">
            <p class="account-copyright"><?php echo date('Y')?>-@copyright By Shajeeb Mahmud</p>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!-- App js -->
    <script src="../assets/js/jquery.core.js"></script>
    <script src="../assets/js/jquery.app.js"></script>
</body>
<!-- Mirrored from coderthemes.com/highdmin/vertical/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->

</html>