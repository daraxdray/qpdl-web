  <!--Main Footer-->
  <footer class="main-footer">
            <div class="upper-box">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="widget contact-widget style-two">
                                <h4>Do You Have Any Question? Please <br> Contact Our Team</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text"><strong>Phone</strong><a href="tel:<?= $core->c_phone ?>"><?= $core->c_phone ?></a> , <a href="tel:<?= $core->cell_phone ?>"><?= $core->cell_phone ?></a></div>
                                                
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text"><strong>Email</strong><a href="email:<?= $core->site_email ?>"> <?= $core->site_email ?></a></div>
                                            </div>
                                            <ul class="social-icon">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div>
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                                <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                                <div class="text"><span>Sunday-Closed</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget links-widget">
                                        <h4 class="widget_title">Useful Links</h4>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="about.php">About Company</a></li>
                                                <li><a href="contact.php">Get In Touch</a></li>
                                                <!-- <li><a href="#">Industries Served</a></li> -->
                                                <li><a href="services.php">Our Services</a></li>
                                                <!-- <li><a href="#">Pricing & Plans</a></li> -->
                                                <li><a href="terms_condition.php">Terms & Conditions</a></li>
                                                <li><a href="privacy-policy.php">Privacy Policy </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="widget instagram-widget">
                                        <h4 class="widget_title">Our Gallery</h4>
                                        <div class="wrapper-box">
                                            <div class="image">
                                                <img src="assets2/images/gallery/gallery-1.jpg" alt="">
                                                <div class="overlay-link"><a href="assets2/images/gallery/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                            </div>
                                            <div class="image">
                                                <img src="assets2/images/gallery/gallery-2.jpg" alt="">
                                                <div class="overlay-link"><a href="assets2/images/gallery/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                            </div>
                                            <div class="image">
                                                <img src="assets2/images/gallery/gallery-3.jpg" alt="">
                                                <div class="overlay-link"><a href="assets2/images/gallery/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                            </div>
                                            <div class="image">
                                                <img src="assets2/images/gallery/gallery-4.jpg" alt="">
                                                <div class="overlay-link"><a href="assets2/images/gallery/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                            </div>
                                            <div class="image">
                                                <img src="assets2/images/gallery/gallery-5.jpg" alt="">
                                                <div class="overlay-link"><a href="assets2/images/gallery/gallery-5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                            </div>
                                            <div class="image">
                                                <img src="assets2/images/gallery/gallery-6.jpg" alt="">
                                                <div class="overlay-link"><a href="assets2/images/gallery/gallery-6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                            </div> -->
                                        <!-- </div>/.gallery-wrapper -->
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer-->
        <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="copyright-text">Copyright © <?= Date('Y') ?> <a href="#"> <?=  $core->site_name ?></a> All Rights Reserved.</div>
                <ul class="menu">
                    <li><a href="terms_condition.php">Terms & Conditions</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy </a></li>
                    <li><a href="#">  Sitemap</a></li>
                </ul>
            </div>            
        </div>
    </div>
	
    </div>
    <!--End pagewrapper-->
    <?php include('views/modals/modal_login.php'); ?>
    
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

    <script src="assets2/js/jquery.js"></script>
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/bootstrap-select.min.js"></script>
    <script src="assets2/js/jquery.fancybox.js"></script>
    <script src="assets2/js/isotope.js"></script>
    <script src="assets2/js/owl.js"></script>
    <script src="assets2/js/appear.js"></script>
    <script src="assets2/js/wow.js"></script>
    <script src="assets2/js/lazyload.js"></script>
    <script src="assets2/js/scrollbar.js"></script>
    <script src="assets2/js/TweenMax.min.js"></script>
    <script src="assets2/js/swiper.min.js"></script>
    <script src="assets2/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets2/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets2/js/parallax-scroll.js"></script>

    <script src="assets2/js/script.js"></script>
    <script src="dataJs/tracking.js"></script>
