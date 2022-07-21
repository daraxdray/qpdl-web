<?php
require_once("loader.php");

$login = new User;
$core = new Core;

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 May 2022 13:59:06 GMT -->

<head>
    <meta charset="utf-8">
    <title>Services | <?php echo $core->site_name ?></title>
    <!-- Stylesheets -->
    <link href="assets2/css/bootstrap.css" rel="stylesheet">
    <link href="assets2/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets2/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets2/css/color.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="assets2/<?php echo $core->favicon ?>">
    <link rel="shortcut icon" href="assets2/images/favicon.png" type="image/x-icon">
    <!-- <link rel="icon" href="assets2/images/favicon.png" type="image/x-icon"> -->

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
       
    <?php include('views/inc/header2.php'); ?>
        <!-- Hidden Sidebar -->
        <section class="hidden-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="content-wrapper">
                    <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                    <div class="text-widget sidebar-widget">
                        <div class="logo"><a href="index.html"><img src="assets2/images/logo.png" alt=""></a></div>
                        <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                    </div>
                    <!-- PDF Widget -->
                    <div class="pdf-widget sidebar-widget">
                        <div class="row">
                            <div class="col-sm-6 column">
                                <div class="content">
                                    <div class="icon"><img src="assets2/images/icons/icon-8.png" alt=""></div>
                                    <h4>Sender <br> Instructions</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 column">
                                <div class="content">
                                    <div class="icon"><img src="assets2/images/icons/icon-8.png" alt=""></div>
                                    <h4>Sender <br> Instructions</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Widget -->
                    <div class="contact-widget">
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-cursor"></span></div>
                            <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-calling"></span></div>
                            <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-mail"></span></div>
                            <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@qpdl.com</a></div>
                        </div>
                    </div>
                    <!-- Link Btn -->
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
                </div>
            </div>
        </section>

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets2/images/background/bg-20.jpg);">
            <div class="background-text">
                <div data-parallax='{"x": 100}'>
                    <div class="text-1">QPDL</div>
                    <div class="text-2">QPDL</div>
                </div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content-wrapper">
                        <div class="title">
                            <h1>Our Services</h1>
                        </div>
                        <ul class="bread-crumb style-two">
                            <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="about.php">Our History <i class="flaticon-up-arrow"></i></a></li>
                            <!-- <li><a href="about.php">Leadership Team<i class="flaticon-up-arrow"></i></a></li> -->
                            <!-- <li><a href="global-networks.html">Global Network <i class="flaticon-up-arrow"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <!-- Services Section -->
    <section class="services-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-12.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Air Freight</h4>
                                    </div>            
                                </div>
                            </div>
                            <div class="lower-content">
                                <!-- <div class="text">Indignation and dislike men who <br> are so beguiled all demoralized by the <br>that all charms.</div> -->
                                <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>Air Freight</a></div>
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-12-2.jpg);">
                                <div>
                                    <div class="content">
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Air Freight</h4>
                                    </div>
                                    <!-- <div class="text">Indignation and dislike men who <br> are so beguiled all demoralized by the <br>that all charms.</div> -->
                                    <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-13.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Ocean Freight</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <!-- <div class="text">Denouncing pleasure praising <br> pain was born and we will give you a <br>account of the system.</div> -->
                                <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>Ocean Freight</a></div>
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-13-2.jpg);">
                                <div>
                                    <div class="content">
                                        <div class="icon"><span class="flaticon-cargo-ship"></span></div>
                                        <h4>Ocean Freight</h4>
                                    </div>
                                    <!-- <div class="text">Denouncing pleasure praising <br> pain was born and we will give you a <br>account of the system.</div> -->
                                    <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-14.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Road Freight</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <!-- <div class="text">Great explorer of the truth the <br> master-builder of human happiness no <br>because it is pleasure.</div> -->
                                <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>Road Freight</a></div>
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-14-2.jpg);">
                                <div>
                                    <div class="content">
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Road Freight</h4>
                                    </div>
                                    <!-- <div class="text">Great explorer of the truth the <br> master-builder of human happiness no <br>because it is pleasure.</div> -->
                                    <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/image-14.jpg" alt="">
                                <div class="content">
                                    <div>
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Cargo Storage</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <!-- <div class="text">Great explorer of the truth the <br> master-builder of human happiness no <br>because it is pleasure.</div> -->
                                <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>Cargo Storage</a></div>
                            </div>
                            <div class="overlay" style="background-image: url(assets/images/resource/image-14-2.jpg);">
                                <div>
                                    <div class="content">
                                        <div class="icon"><span class="flaticon-airplane"></span></div>
                                        <h4>Cargo Storage</h4>
                                    </div>
                                    <!-- <div class="text">Great explorer of the truth the <br> master-builder of human happiness no <br>because it is pleasure.</div> -->
                                    <div class="link"><a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="cta-section-two">
                <div class="wrapper-box">
                    <div class="icon"><img src="assets/images/resource/image-29.jpg" alt=""></div>
                    <div class="text">
                        <h4>Our Effective and Affordable Pricing Plans</h4>
                        <p>Explain to you how all this mistaken idea of denouncing pleasure.</p>
                    </div>
                    <div class="link">
                        <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Our Pricing</span></a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Servcies section two -->
    <section class="services-section-two style-two mx-30">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Value Added Services</div>
                <h2>Deprixa Offers Various Value Added <br>Services in Logisitcs</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="assets/images/resource/image-16.jpg" alt="">
                            <div class="icon"><span class="flaticon-insurance"></span></div>
                        </div>
                        <div class="content">
                            <h4>Cargo Insurance</h4>
                            <!-- <div class="text">There anyone who loves or pursues or desires to obtain <br> pain of itself because it is pain but because occasionally <br> circumstances occur in which toil ...</div> -->
                            <div class="link">
                                <a href="#" class="readmore-link"><span><i class="flaticon-up-arrow"></i>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="assets/images/resource/image-17.jpg" alt="">
                            <div class="icon"><span class="flaticon-import"></span></div>
                        </div>
                        <div class="content">
                            <h4>Customs Clearance</h4>
                            <!-- <div class="text">Blinded by desire, that they cannot foresee the pain and <br>trouble that are bound to ensue; and equal blame belongs <br>those who fail in their duty shrinking ...</div> -->
                            <div class="link">
                                <a href="#" class="readmore-link"><span><i class="flaticon-up-arrow"></i>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>

        <!-- Newsletter -->
        <!-- <section class="newsletter-section style-two">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-5">
                        <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form">
                            <form class="ajax-sub-form" method="post">
                                <div class="form-group">
                                    <i class="far fa-envelope-open"></i>
                                    <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                    <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                    <label class="subscription-label" for="subscription-email"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

      <?php include('views/inc/footer2.php'); ?>

</body>

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 May 2022 14:09:53 GMT -->

</html>