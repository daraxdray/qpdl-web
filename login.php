<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA PRO -  Integrated Web Shipping System                         *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: support@jaom.info                                              *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************


require_once("loader.php");

$login = new User;
$core = new Core;

if(isset($_GET['driver_app'])){
    $_SESSION['driver_app'] == true;
}
if ($login->cdp_loginCheck() == true){

   header("location: index.php");

}

if (isset($_POST['login'])){

    $result = $login->cdp_login($_POST['username'], $_POST['password']);


         
    if ($result){
        header("location: index.php");

    }
}


?>


<!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Courier DEPRIXA-Integral Web System">
    <meta name="author" content="Jaomweb">
    <meta name="description" content="">
        <!-- favicon -->
    <title>Login | <?php echo $core->site_name ?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/<?php echo $core->favicon ?>">
    <!-- Bootstrap -->
    <link href="assets/css_main_deprixa/main_deprixa/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="assets/css_main_deprixa/main_deprixa/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" /> 
    <!-- Main css --> 
    <link href="assets/css_main_deprixa/main_deprixa/css/style.css" rel="stylesheet" type="text/css" />



    </head>

<body>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        <?php if(!isset($_GET['driver_app'])) {?>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky " style="background-color: black;">
            <div class="container">
                <!-- Logo container-->
                <div>
                   <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="assets/'.$core->logo.'" alt="'.$core->site_name.'"  width="190" height="45"/>': $core->site_name;?></a>
                </div>    
                <div class="buy-button ml-3 mr-3" >
                    <a href="drivers_register.php" class="btn btn-warning"><i class="mdi mdi-account-alert  icons"></i> <?php echo $lang['left112'] ?> as Driver</a>
                </div><!--end login button-->             
                <div class="buy-button">
                    <a href="sign-up.php" class="btn btn-light"><i class="mdi mdi-account-alert ml-2 icons"></i> <?php echo $lang['left112'] ?></a>
                </div><!--end login button-->
              


                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.php" class="text-white"><?php echo $lang['left111'] ?></a></li>
                        <li><a href="#aboutUs" class="text-white"></i> About us</a></li>
                        
                        <li><a href="tracking.php" class="text-white"><i class="mdi mdi-package-variant-closed"></i> <?php echo $lang['left113'] ?></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Navbar End -->
        <?php } ?>
                <!-- Hero Start -->
        <section class="bg-home " >
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row align-items-center">
                        <?php if(!isset($_GET['driver_app'])) {?>
                            <div class="col-lg-8 col-md-6">
                                <div >   
                                    <img src="assets/css_main_deprixa/images/user/logistics-bro.png" class="img-fluid"  height="400px" width="500" alt="">
                                    
                                        <h1>Bringing your package to your doorstep</h1>
                                
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="login-page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4"><?php echo $core->site_name ?>, <?php echo $lang['left114'] ?></h4>  
                                    </div>
                                    <div id="msgholder2">
                                     <?php 
                                        if (isset($login)) {
                                            if ($login->errors) {            
                                             ?>
                                        <div class="alert alert-danger" id="success-alert">
                                            <p><span class="icon-minus-sign"></span>
                                                <i class="close icon-remove-circle"></i>
                                                <span>Error!</span>
                                                <?php 
                                                foreach ($login->errors as $error) {

                                                  echo $error;

                                                }?>
                                            </p>
                                        </div>
                                        <?php
                                            }
                                        }
                                        ?>         
                                    </div>
                                    <div id="loader" style="display:none"></div>
                                    <form class="login-form"  method="post" name="login_form<?php if(isset($_GET['driver_app'])) {?>?driver_app=true <?php } ?>" id="login-form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label><?php echo $lang['left115'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5" placeholder="<?php echo $lang['left116'] ?>" name="username" id="username" required="">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label><?php echo $lang['left117'] ?> <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="<?php echo $lang['left118'] ?>" name="password" id="password" required="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <p class="float-right forgot-pass"><a href="forgot-password.php" class="text-dark font-weight-bold"><?php echo $lang['left119'] ?></a></p>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><?php echo $lang['left120'] ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-0">
                                                <button class="btn btn-warning rounded w-100"><?php echo $lang['left121'] ?></button>
                                                <input name="login" type="hidden" value="1" />
                                            </div>
                       
                                            <div class="col-12 text-center">
                                            <?php if(!isset($_GET['driver_app'])) {?>
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2"><?php echo $lang['left122'] ?></small> <a href="sign-up.php" class="text-dark font-weight-bold"><?php echo $lang['left123'] ?></a></p>
                                                <?php } else { ?>
                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2"><?php echo $lang['left122'] ?></small> <a href="drivers_register.php" class="text-dark font-weight-bold"><?php echo $lang['left123'] ?></a></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div><!---->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
       
        <!-- <section class="bg-home" id="aboutUs"> -->
             <!-- About Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="assets/css_main_deprixa/images/user/about.jpg" alt="">
                    <div class="bg-warning text-dark text-center p-4">
                        <h3 class="m-0">25+ Years Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-warning text-uppercase font-weight-bold">About Us</h6>
                    <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                    <p class="mb-4">QPD Logistics is an international freight forwarding company. We provide logistics solutions to meet the ever growing needs of supply chains within, to and from the African continent. At QPD, we do more than just logistics. Our team members can help solve any challenge in Logistics to ensure your supply chains remain resilient. Our network spans the entire globe to ensure your needs are adequately met.</p>
                    <div class="d-flex align-items-center pt-2"> -->
                        <!-- <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button> -->
                        <!-- <h5 class="font-weight-bold m-0 ml-4">Play Video</h5> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
        <!-- Video Modal -->
        <!-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>         -->
                        <!-- 16:9 aspect ratio -->
                        <!-- <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->
        <!-- </section> -->
        <!-- <section> -->
            <!-- Services Start -->
            <!-- <div class="container-fluid pt-5">
                <div class="container">
                    <div class="text-center pb-2">
                        <h6 class="text-warning text-uppercase font-weight-bold">Our Services</h6>
                        <h1 class="mb-4">Best Logistic Services</h1>
                    </div>
                    <div class="row pb-3">
                        <div class="col-lg-3 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center bg-warning mb-4 p-4">
                                <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                                <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                            </div>
                            <p>Your goods can get to you using our air media from different location around the world to your doorstep</p>
                            <a class="border-bottom text-decoration-none" href="">Read More</a>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center bg-warning mb-4 p-4">
                                <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                                <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                            </div>
                            <p>We also provide logistic services on the ocean - with assurance of speed and security</p>
                            <a class="border-bottom text-decoration-none" href="">Read More</a>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center bg-warning mb-4 p-4">
                                <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                                <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                            </div>
                            <p>Our land transport is also available for you, easy, faster and safe</p>
                            <a class="border-bottom text-decoration-none" href="">Read More</a>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center bg-warning mb-4 p-4">
                                <i class="fa fa-2x fa-store text-dark pr-3"></i>
                                <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                            </div>
                            <p>Our cargo delivery are always on time and just close to you anywhere </p>
                            <a class="border-bottom text-decoration-none" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Services End -->

        <!-- </section> -->
        <!--end section-->


         <!-- Footer Start -->
    <!-- <div class="container-fluid  text-white mt-5 py-5 px-sm-3 px-md-5" style="background-color: black;">
        <div class="row pt-5">
        <div class="col-lg-5 col-md-6 mb-5">
                <div>
                   <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="assets/logo.jpg" width="300" height="200" alt="'.$core->site_name.'"  />': $core->site_name;?></a>
                </div>                 
                
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-warning mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-warning mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
        <footer class="text-center">
            &copy <?php //echo date('Y') . ' ' . $core->site_name; ?> - <?php //echo $lang['foot'] ?>
        </footer> -->
        <!-- Hero End -->

        <!-- Back to top -->
        <!-- <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a> -->
        <!-- Back to top -->
      

        <!-- javascript -->
        <script src="assets/css_main_deprixa/main_deprixa/js/jquery.min.js"></script>
        <script src="assets/css_main_deprixa/main_deprixa/js/bootstrap.bundle.min.js"></script>
        <script src="assets/css_main_deprixa/main_deprixa/js/jquery.easing.min.js"></script>
        <script src="assets/css_main_deprixa/main_deprixa/js/scrollspy.min.js"></script>
        <!-- Main Js -->
        <script src="assets/css_main_deprixa/main_deprixa/js/app.js"></script> 

    </body>

</html>
