 <?php 
 if (isset($_POST['login'])){

    $result = $login->cdp_login($_POST['username'], $_POST['password']);


         
    if ($result){
        header("location: index.php");

    }
}


?>
 
 <!-- Preloader -->
 <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Top -->
            <div class="header-top" >
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="left-column">
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <div class="search-box">
                                <form class="search-form">
                                    <input type="search" placeholder="Search...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="location">
                                <span class="flaticon-cursor"></span>
                                <form action="#" class="location-switcher">
                                    <select class="selectpicker">
                                        <option value="1"><?= $core->c_address ?></option>
                                        <!-- <option value="2">New York</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Boston</option> -->
                                    </select>
                                </form>
                            </div>
                            <div class="phone-number"><i class="flaticon-calling"></i><a href="tel:(+61)32456789"></a><?php echo $core->c_phone ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="msgholder2 text-center " style="position: absolute; margin:0px 20%; width:100%;height:300;">
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
            <!-- Header Upper -->
            <div class="header-upper " >
                <div class="auto-container " >    
                    <div class="inner-container" >
                        
                        <!--Logo-->
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo">
                                <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="assets/' . $core->logo . '" alt="' . $core->site_name . '"  width="120" height="45"/>' : $core->site_name; ?></a>
                            </div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets2/images/icons/icon-bar-2.png" alt=""></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li><a href="index.php">Home</a>
                                                <!-- <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                                <li><a href="index-4.html">Home Page 04</a></li>
                                                <li><a href="onepage.html">Onepage</a></li>
                                            </ul> -->
                                            </li>
                                            <li><a href="about.php">About Us</a>
                                                <!-- <ul>
                                                <li><a href="about.html">About Company</a></li>
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="team.html">Leadership Team</a></li>
                                                <li><a href="global-networks.html">Global Networks</a></li>
                                            </ul> -->
                                            </li>
                                            <li><a href="services.php">Services</a>
                                        
                                                <!-- <ul> -->
                                                    <!-- <li><a href="services.php#air-freight"> Air Freight </a></li> -->
                                                    <!-- <li><a href="ocean-freight.php">Ocean Freight </a></li> -->
                                                    <!-- <li><a href="road-freight.php">Road Freight </a></li> -->
                                                    <!-- <li><a href="train-freight.php">Train Freight </a></li> -->
                                                    <!-- <li><a href="warehousing.php">Warehousing </a></li> -->
                                                    <!-- <li class="active"><a href="packaging.php">Packaging</a></li> -->
                                                <!-- </ul> -->
                                            </li>
                                            <li class="d-sm-none d-block">
                                                <a href="#myModalLoginUser" data-toggle="modal"
                            data-target="#myModalLoginUser">Sign In</a>
                                    </li>
                                <li class="d-sm-none"><a href="sign-up.php" >Sign up</a>
                                    </li>
                                <li class="d-sm-none"><a href="drivers_register.php" >Driver Signup</a>
                                    </li>
                                            <!-- <li class="dropdown"><a href="#">SignIn</a>
                                        
                                               
                                            </li> -->
                                            <!-- <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">3 Columns Grid </a></li>
                                                <li><a href="blog-2.html">3 Columns Sidebar</a></li>
                                                <li><a href="blog-3.html">Large Image</a></li>
                                                <li><a href="blog-details.html">Single Post</a></li>
                                            </ul>
                                        </li> -->
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="sign-in"><a href="#myModalLoginUser" data-toggle="modal"
                            data-target="#myModalLoginUser"><i class="flaticon-delivery-man"></i>Sign In</a>
                                </div>
                                <div class="sign-in"><a href="sign-up.php" ><i class="flaticon-delivery-man"></i>Sign up</a>
                                </div>
                                <div class="sign-in"><a href="drivers_register.php" ><i class="flaticon-delivery-man"></i>Driver Signup</a>
                                </div>
                                <!-- <div class="language">
                                <span class="icon"><img src="assets2/images/resource/flags/de.png" alt=""></span>
                                <form action="#" class="language-switcher">
                                    <select class="selectpicker">
                                        <option value="1">Eng</option>
                                        <option value="2">Fre</option>
                                        <option value="3">Ita</option>
                                        <option value="4">Spa</option>
                                    </select>
                                </form>
                            </div> -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo">
                                <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="assets/' . $core->logo . '" alt="' . $core->site_name . '"  width="120" height="45"/>' : $core->site_name; ?></a>
                                </div>
                            </div>
                            <div class="right-column">
                                <!--Nav Box-->
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><img src="assets2/images/icons/icon-bar-2.png" alt=""></div>

                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light">
                                    </nav>
                                </div>
                                <div class="navbar-right-info">
                                    <div class="sign-in">
                                        
                                        <a href="#myModalLoginUser" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#myModalLoginUser"><i class="flaticon-delivery-man"></i>Sign In</a>
                                    </div>
                                    <div class="sign-in"><a href="sign-up.php" ><i class="flaticon-delivery-man"></i>Register</a>
                                </div>
                                    <!-- <div class="language">
                                        <span class="icon"><img src="assets2/images/resource/flags/de.png" alt=""></span>
                                        <form action="#" class="language-switcher">
                                            <select class="selectpicker">
                                                <option value="1">Eng</option>
                                                <option value="2">Fre</option>
                                                <option value="3">Ita</option>
                                                <option value="4">Spa</option>
                                            </select>
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-remove"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo">
                    <a class="logo" href="index.php"><?php echo ($core->logo) ? '<img src="assets/' . $core->logo . '" alt="' . $core->site_name . '"  width="120" height="45"/>' : $core->site_name; ?></a>
                    </div>
                    
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        
                    </div>
                    <div class="p-5 text-center align-left m-auto bg-secondary"><a href="tracking.php" class="text-white" >TRACKING</a>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>

                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->
