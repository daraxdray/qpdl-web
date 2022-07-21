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

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 May 2022 13:59:06 GMT -->

<head>
    <meta charset="utf-8">
    <title>Privacy Policy | <?php echo $core->site_name ?></title>
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
                            <h1>Privacy Policy</h1>
                        </div>
                        <ul class="bread-crumb style-two">
                            <!-- <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li> -->
                            <!-- <li><a href="history.html">Our History <i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="team.html">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                            <li><a href="global-networks.html">Global Network <i class="flaticon-up-arrow"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    
    <!-- Project details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="image-block">
                <div class="image"><img src="assets/images/resource/project-21.jpg" alt=""></div>
                <div class="project-info">
                    <h4>Serving you the best way.</h4>
                    <!-- <div class="text">Explain to you how all this mistaken idea.</div> -->
                </div>
            </div>
            <div class="text-block">
                <h3>Our Privacy Policy</h3>
                <div class="text">
                The handling of the goods shall be subject to the conditions stated herein unless specifically varied by the Carrier.

Charges and Billing

The consideration payable to the Carrier by the Shipper for the handling of goods and related services, will be in accordance with the standard tarrifs of the Carrier, to be paid as determined by the Carrier from time to time.
The Carrier standard tarrifs are available on request.
Conditions of goods

The onus of proving the quantity, type, physical properties and composition and the condition of the goods and/or the condition of any container at the time of receipt thereof by the Carrier shall at all times remain with the Shipper, and no delivery note, receipt or other document furnished or signed at such time by or on behalf of the Carrier shall constitute conclusive proof thereof
Right to inspection

The Carrier has a right to inspect the goods without prior notice to the Shipper, which includes the right to open and examine the goods.
Receiver is to ensure 100% inspection of goods, acknowledge condition of goods before departure at point of collection from courier.
Deliveries & Undeliverables

Shipments shall not be delivered to Postal codes, but to the Receiver’s address given by the Shipper (which in the case of mail services shall be deemed to be the nearest receiving postal service and in the case of a central receiving area will be delivered to that area), not necessarily to the named Receiver personally. If the Shipment is deemed to be unacceptable, or Receiver cannot be reasonably identied, QPD Logistics shall use reasonable efforts to return the Shipment to Shipper at Shipper’s cost, failing which the Shipment may be disposed of by QPD Logistics without incurring any liability whatsoever.
Carrier lien

As security for money owed for the handling of the goods, the Carrier shall have a lien over all goods in its possession or under its control.
If any money owed to the Carrier is not paid by the Shipper within seven (7) days after they have become due, the Carrier shall be entitled without further notice to dispose of such goods in any way whatsoever.
Shipper's warranties The Shipper shall indemnify and hold the Carrier harmless for any loss or damage arising out of the Shipper’s failure to comply with any applicable laws or regulations, and the for the Shipper’s breach of the following warranties and representations:

All information, descriptions, values and other particulars furnished to the carrier is complete and accurate;
The goods are the Shipper's sole property or the Shipper is authorized by the person owning the goods to enter into this agreement;
The waybill has been signed by the Shipper’s authorized representative and the terms and conditions in this Agreement constitute binding and enforceable obligations on the Shipper
The shipment is properly marked, addressed and packed to ensure safe transportation with ordinary care in handling
All applicable customs, import, export and other laws and regulations have been complied with.
Dangerous goods

Shipper warrants that all goods handled are to be so handled in the ordinary way and are not dangerous goods
The Carrier will not handle any dangerous, corrosive, noxious, hazardous, inammable or explosive goods or any goods which in its opinion are likely to cause damage.
The Shipper shall be liable for all losses or damage caused to the Carrier and/or third parties by all dangerous goods
If, in the opinion of the Carrier any goods become a danger to any person or property, the Carrier shall be entitled to and without notice to the Shipper take such any steps as it in its sole discretion in respect of the goods. In such event the Carrier shall:
Not be liable under any circumstances for the value of the goods or for any other loss or damage sustained bythe Shipper or owner as a result of such steps
Still be entitled to recover from the Shipper its remuneration for the handling of the goods together with any costs incurred by the Carrier.
Perishable goods

Perishable goods which are not taken up immediately upon arrival at their destination or which are insuciently marked or otherwise not identifiable may be disposed of without notice to the Shipper.
Route

When carrying goods, the Carrier shall in its sole discretion decide what route to follow.
Carrier obligations

It will be deemed that the Carrier has discharged all its obligations in terms hereof, once the Carrier has delivered or handed the goods to the receiver stated in the waybill at the receiver's address or at any other address the Carrier has been requested to deliver to.
Carrier liability for damage or loss

The Carrier will only be liable for direct loss and damage only and this shall be limited to the sum of N2,000.00 (Two Thousand Naira) only. All other types of loss or damage are excluded and this includes but is not limited to lost profits, income, interest, and future business. The Carrier shall not be liable for any loss or damage that is special or indirect, even if the risks associated with such loss or damage was communicated directly or indirectly to the Carrier before or after the acceptance of the shipment.
Claims are limited to one claim per shipment, settlement of which will be full and final settlement for all loss or damage in connection therewith.
If the Shipper regards the limits provided in Clauses 12.1 and 12.2 as insufficient, then the Shipper must make a special declaration of value and take out insurance on the shipment as directed by the Carrier’s staff so as to benefit from the recovery of a larger sum subject to the investigation and subsequent approval by the Carrier’s management.
All claims must be submitted in writing to QPD Logistics within fourteen (14) days from the date that QPD Logistics accepted the shipment, failing which QPD Logistics shall have no liability whatsoever.
Subcontracting

The Carrier reserves the right to employ sub-contractors to act for it, and shall have no responsibility or liability to the Shipper for any acts of commissions or omissions of such third parties.
Applicable law

The applicable Law regarding this agreement are the Laws of the Federal Republic of Nigeria.
Notices

Notices shall be served on the address stipulated on the waybill.
General Terms

These terms constitutes the sole record of the agreement between the parties. The Carrier shall not be bound by any express or implied term, representation, warranty, promise or the like not recorded herein.
No relaxation or indulgence which the Carrier may grant to the Shipper shall constitute a waiver of the rights of the Carrier regardless of when it arose.
Customs Duties and Taxes

Please note that customs duties and taxes may apply to your items in the destination country.
QPD Logistics has no control over these charges as these tariffs are determined by the customs of the destination country.
QPD Logistics shall not be responsible for any delays arising from customs border control.
Shipper and receiver are responsible for providing all documentation needed for customs clearance. In the event the shipper or receiver fails to provide this, the shipper will be charged for the return of the shipment to the origin.
Received sir

Regards,
Show quoted text.
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="image-block-two">
                        <div class="image">
                            <img src="assets/images/resource/project-22.jpg" alt="">
                            <h4>Challenges</h4>
                        </div>
                        <div class="content">
                            <div class="text">Foresee the pain and trouble that are bound to ensue; and equal <br> blame belongs to those who fail.</div>
                            <ul class="list">
                                <li>Rationally encounter consequences that are extremely. </li>
                                <li>Pain can procure him some great pleasure. </li>
                                <li>Ever undertakes laborious physical exercise.</li>
                                <li>Find fault with a man who chooses to enjoy pleasure. </li>
                            </ul>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-block-two">
                        <div class="image">
                            <img src="assets/images/resource/project-23.jpg" alt="">
                            <h4>Solutions</h4>
                        </div>
                        <div class="content">
                            <div class="text">Indignation and dislike men who are so beguiled & demoralized by the charms of pleasure of the moment.</div>
                        <ul class="list style-two">
                            <li>Obligations of business it will frequently </li>
                            <li>Do what we like best, every pleasure is to be welcomed. </li>
                            <li>Foresee the pain and trouble that are bound. </li>
                            <li>Business it will frequently occur that pleasures repudiated.</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
             -->
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