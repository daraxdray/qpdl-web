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
    <title>Contact Us | <?php echo $core->site_name ?></title>
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
                            <h1>Contact Us</h1>
                        </div>
                        <ul class="bread-crumb style-two">
                            <!-- <li class="active"><a href="about.html">About Company <i class="flaticon-up-arrow"></i></a></li> -->
                            <!-- <li><a href="history.html">Our History <i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="team.html">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="global-networks.html">Global Network <i class="flaticon-up-arrow"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        
    <!-- Contact Info section two -->
    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="nav-tabs-wrapper">
                <div class="nav nav-tabs tab-btn-style-two">
                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                        <ul class="item">
                            <li><a class="active" data-toggle="tab" href="#tab-one">
                                <h4><?= $core->c_city ?></h4>
                            </a></li>
                        </ul>
                        <!-- <ul class="item">
                            <li><a data-toggle="tab" href="#tab-two">
                                <h4>Melbourne</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-three">
                                <h4>Houston</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a class="active" data-toggle="tab" href="#tab-four">
                                <h4>Hoxton - HO</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-five">
                                <h4>Melbourne</h4>
                            </a></li>
                        </ul>
                        <ul class="item">
                            <li><a data-toggle="tab" href="#tab-six">
                                <h4>Houston</h4>
                            </a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane active fadeInUp animated" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span><?= $core->c_address ?>, <br> <?= $core->c_city ?>,  <?= $core->c_country ?></h4>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:<?= $core->c_phone ?>"><?= $core->c_phone ?>,</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790"><?= $core->site_email ?>,</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <!-- <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div> -->
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one" data-toggle="modal"
                            data-target="#myModalLoginUser"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fadeInUp animated active" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@deprixa.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@deprixa.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@deprixa.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-five" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@deprixa.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-six" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span>Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61)32456789</a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">info@deprixa.com</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Get a Quote</div>
                                <h2>Start Your Shipping</h2>
                            </div>
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by <br> the charms of pleasure of the moment.</div>
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Get A Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Contact form section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Drop a line</div>
            
                <h2>We’re Always Here for You</h2>
                <div class="text">Please do not hesitate to contact us if you require further information about our logisitc service.</div>
            </div>
              <!-- Action part -->
                    <!-- Button group part -->
                    <div class="bg-light p-15">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- <div id="loader" style="display:none"></div> -->
                                        <div id="resultados_ajax"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->

            <!--Contact Form-->
            <div class="contact-form">
            
                    <form class="form-horizontal form-material" id="send_support" name="send_support" method="post">
                    <div class="row">
                    <input class="form-control" name="title" type="hidden" disabled="disabled" value="<?php echo $core->site_email; ?>" placeholder="<?php echo $lang['send-news3'] ?>" readonly="readonly">
                        <div class="form-group col-md-6">
                            <input type="text" name="full_name" value="" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="subject" value="" placeholder="Subject" required>
                        </div>                        
                        <div class="form-group col-md-4">
                            <input type="hidden" name="recipient" id="recipient" value="support" required>
                            <input type="text" name="email" value="" placeholder="Your Email" required>
                        </div>                        
                        <div class="form-group col-md-4">
                            <input type="text" name="phone" value="" placeholder="Phone Number" required>
                        </div>                        
                        <div class="form-group col-md-4">
                            <select class="selectpicker" name="email_type">
                                <option value="*">Enquire About</option>
                                <option value=".category-1">Air </option>
                                <option value=".category-3">Land</option>
                                <option value=".category-4">Cargo</option>
                                <option value=".category-4">Ocean</option>
                                <option value=".category-4">Home Pickup</option>
                                <option value=".category-4">Others</option>
                            </select>
                        </div>                        
                        <div class="form-group col-md-12">
                            <textarea placeholder="Message" name="body" id="summernote" style="margin-top: 30px;">
														
                            </textarea>
                        </div>                        
                        <div class="form-group text-center col-md-12">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-one" type="submit"  name="dosubmit" data-loading-text="Please wait..."><span><i class="flaticon-up-arrow"></i>Send Message</span></button>
                            
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->
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
      <script src="dataJs/newsletter.js"></script>
</body>

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 May 2022 14:09:53 GMT -->

</html>