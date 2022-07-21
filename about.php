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
    <title>About Us | <?php echo $core->site_name ?></title>
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
                        <div class="logo"><a href="index.php"><img src="assets2/images/logo.png" alt=""></a></div>
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
                    <form method="post" action="index.php">
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
                            <h1>About Company</h1>
                        </div>
                        <ul class="bread-crumb style-two">
                            <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li>
                            <!-- <li><a href="history.html">Our History <i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="team.html">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="global-networks.html">Global Network <i class="flaticon-up-arrow"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Who we are -->
        <section class="who-we-are-section">
            <div class="top-content">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sec-title mb-30">
                                <div class="sub-title">QPDL Logistics</div>
                                <h2>Provide a <br> Reliable Services <br> in all areas of Logistics</h2>
                            </div>
                            <div class="experience-year">
                                <div class="icon"><i class="flaticon-package-1"></i></div>
                                <!-- <div class="content">
                                    <h3>78 <span>+ Years</span></h3>
                                    <h5>Experience In Logistics</h5>
                                </div> -->

                            </div>
                            <!-- <div class="link mb-30"><a href="about.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Our History</span></a></div> -->
                        </div>
                        <div class="col-lg-8">
                            <div class="image mb-30"><img src="assets2/images/resource/image-d.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overview">
                <div class="auto-container">
                    <div class="wrapper-box">
                        <h2>Deprixa operates accross the world, and are part <br> of a reliable, global integrated network.</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text">
                                    <p>We ensure that our clients are satisfied with our pickup up and delivery services, shipping services, and warehouse storage service.</p>
                                    <p>We operate both on air, land, sea and cargo.</p>
                                </div>
                                <div class="author-info wow fadeInUp" data-wow-duration="1500ms">
                                    <!-- <div class=" -->
                                    <!-- <div class="signature"><img src="assets2/images/resource/sign.png" alt=""></div> -->
                                    <div>
                                        <!-- <div class="author-title">Roman Primera </div>
                                        <div class="designation">CEO & Founder of Deprixa</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row m-10">
                                    <!--Column-->
                                    <div class="column counter-column col-md-3">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="105">0</span><span>+</span>
                                                </div>
                                                <h4>Parcel <br> Delivered</h4>
                                                <h5>Total</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    <div class="column counter-column col-md-3">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="50">0</span><span>+</span>
                                                </div>
                                                <h5>Air</h5>
                                                <div class="icon"><span class="flaticon-airplane"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    <div class="column counter-column col-md-3">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="icon"><span class="flaticon-cargo-ship-1"></span></div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="80">0</span><span>+</span>
                                                </div>
                                                <h5>Ocean</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    <div class="column counter-column col-md-3">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="870">0</span><span>+</span>
                                                </div>
                                                <h5>Road</h5>
                                                <div class="icon"><span class="flaticon-box-1"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statement -->
        <section class="statement-section pt-0">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image"><img src="assets2/images/resource/image-35.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content">
                            <div class="badge"><img src="assets2/images/resource/badge-3.png" alt=""></div>
                            <!-- Tab panes -->
                            <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                    <div class="text-block">
                                        <div class="sec-title mb-30">
                                            <div class="sub-title">Statements</div>
                                            <h2>Mission Statement</h2>
                                        </div>
                                        <div class="text">Continualy ensure security, speed and customer satisfaction is acheived.</div>
                                    </div>
                                </div>
                                <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                    <div class="text-block">
                                        <div class="sec-title mb-30">
                                            <div class="sub-title">Statements</div>
                                            <h2>Vision Statement</h2>
                                        </div>
                                        <div class="text">To take a lead in both international and local deliveries that will transform the image of the logistic company.</div>
                                    </div>
                                </div>
                                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                    <div class="text-block">
                                        <div class="sec-title mb-30">
                                            <div class="sub-title">Statements</div>
                                            <h2>Company Value</h2>
                                        </div>
                                        <div class="text">Transparency, integrity, confidentiality, and peace.</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                        <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                        <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                        <h4><i class="flaticon-up-arrow"></i>Value</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Whychooseus section four -->
        <section class="whychooseus-section-four" style="background-image: url(assets2/images/background/bg-23.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="sub-title">Why Choose Us</div>
                    <h2>6 Reasons Why to Choose Our <br> Freight Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 whychooseus-block-four">
                        <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                            <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                            <h4>Trasparent Pricing</h4>
                            <!-- <div class="text">Indignation dislike men who
                                so beguiled all demoralized by the charms.</div> -->
                            <div class="count">01</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 whychooseus-block-four">
                        <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                            <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                            <h4>On - Time Delivery</h4>
                            <!-- <div class="text">Foresee the pain & trouble that are bound ensue equal belongs to fail duty.</div> -->
                            <div class="count">02</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 whychooseus-block-four">
                        <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                            <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                            <h4>Real Time Tracking</h4>
                            <!-- <div class="text">Indignation dislike men who
                                so beguiled all demoralized by the charms.</div> -->
                            <div class="count">03</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 whychooseus-block-four">
                        <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                            <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                            <h4>24/7 Online Support</h4>
                            <!-- <div class="text">Foresee the pain & trouble that are bound ensue equal belongs to fail duty.</div>
                            <div class="count">04</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certificate section -->
        <!-- <section class="certificate-section">
            <div class="auto-container">
                <div class="sec-top row m-0 justify-content-md-between align-items-center">
                    <div class="sec-title">
                        <div class="sub-title">Certifications</div>
                        <h2>Our Professional Certifications</h2>
                    </div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i> More Awards</a>
                    </div>
                </div>
                <div class="row">
                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                        <div class="col-lg-12 certificate-block">
                            <div class="inner-box">
                                <div class="image"><img src="assets2/images/resource/certificate-1.jpg" alt=""></div>
                                <div class="content">
                                    <h4>iso 9001</h4>
                                    <div class="text">Quality Services Provider</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 certificate-block">
                            <div class="inner-box">
                                <div class="image"><img src="assets2/images/resource/certificate-2.jpg" alt=""></div>
                                <div class="content">
                                    <h4>iso 14001</h4>
                                    <div class="text">Environment Friendly</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 certificate-block">
                            <div class="inner-box">
                                <div class="image"><img src="assets2/images/resource/certificate-3.jpg" alt=""></div>
                                <div class="content">
                                    <h4>iso 22301</h4>
                                    <div class="text">Business Continuity Service</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

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