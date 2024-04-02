<?php
include "logic.php";
if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $query = "SELECT * FROM blog WHERE `id` = $id";
    $res = $conn->query($query);
    $blogID = $res->fetch_assoc();

    
}
?>

<html lang="en">

<head>

    <title>Saleh Al Saleh</title>
    <meta name="description" content="تقديم  أفضل خدمات قانونية بكل احترافية و شفافية ونزاهة للدفاع عن حقوق ومصالح الموكلين والحفاظ على مكتسباتهم ">
    <meta charset="utf-8">
    <meta name="author" content="Phoenix Code">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="icon" href="assests/images/Logo.gif" type="image/png" sizes="any">
    <link rel="icon" href="assests/images/Logo.gif" type="image/svg+xml">

    <!-- CSS -->
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/style.css">

    <link rel="stylesheet" href="assests/css/style-responsive.css">
    <link rel="stylesheet" href="assests/css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="assests/css/magnific-popup.css">
    <link rel="stylesheet" href="assests/css/owl.carousel.css">
    <link rel="stylesheet" href="assests/css/splitting.css">
    <link rel="stylesheet" href="assests/css/YTPlayer.css">
    <link rel="stylesheet" href="assests/css/demo-main/demo-main.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body class="appear-animate dark-mode">

    <!-- Page Loader -->
    <div class="page-loader dark">
        <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->

    <!-- Skip to Content -->
    <a href="#main" class="btn skip-to-content">Skip to Content</a>
    <!-- End Skip to Content -->

    <!-- Page Wrap -->
    <div class="page bg-dark-1" id="top">

        <!-- Navigation Panel -->
        <!-- Navigation Panel -->
        <nav class="main-nav dark dark-mode transparent stick-fixed wow-menubar">
            <div class="main-nav-sub full-wrapper">

                <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format. 
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                <div class="p-2">

                    <a href="index.php" class="">
                        <img src="assests/images/logo3.gif" alt="" width="150" height="50" />
                        <!-- <img src="assests/images/text.gif" alt="Your Company Logo" width="105" height="34" /> -->
                    </a>

                </div>

                <!-- Mobile Menu Button -->
                <div class="mobile-nav" role="button" tabindex="0">
                    <i class="mobile-nav-icon"></i>
                    <span class="visually-hidden">Menu</span>
                </div>

                <!-- Main Menu -->
                <div class="inner-nav desktop-nav">
                    <ul class="clearlist local-scroll">

                        <!-- Item With Sub -->
                        <li>
                            <a href="index.php" data-i18n="home" class="">Home <i class=""></i></a>



                        </li>
                        <!-- End Item With Sub -->

                        <!-- Item With Sub -->
                        <li>
                            <a href="#" data-i18n="service" class="mn-has-sub">Service <i class="mi-chevron-down"></i></a>

                            <!-- Sub Megamenu -->
                            <ul class="mn-sub mn-has-multi">

                                <li class="mn-sub-multi">
                                    <!-- <span class="mn-group-title">Group 1</span> -->

                                    <ul>
                                        <li>
                                            <a href="legal-consulyation.php" data-i18n="LegalConsultations">Legal
                                                Consultations</a>
                                        </li>
                                        <li>
                                            <a href="preparation-and-drafting-of-legal-documents.php" data-i18n="legalDocuments">Preparation and drafting of legal
                                                documents</a>
                                        </li>
                                        <li>
                                            <a href="legal-procedures-registration-and-legal-credits.php" data-i18n="LegalProcedures">Legal procedures, registration and
                                                legal credits</a>
                                        </li>
                                        <li>
                                            <a href="legal-representation.php" data-i18n="LegalRepresentation">Legal
                                                Representation</a>
                                        </li>

                                    </ul>

                                </li>

                                <!-- <li class="mn-sub-multi"> -->


                               

                            </ul>
                            <!-- End Sub Megamenu -->

                        </li>
                        <!-- End Item With Sub -->

                        <!-- Item With Sub -->
                        <li>
                            <a href="about-us.php" data-i18n="about" class="">About Us <i class=""></i></a>



                        </li>
                        <!-- End Item With Sub -->

                        <!-- Item With Sub -->
                        <li>
                            <a href="contact-us.php" data-i18n="contact" class="">Contact Us</a>
                        </li>
                        <!-- End Item With Sub -->
                        <li>
                            <a href="#" data-i18n="team" class="mn-has-sub active">Team <i class=""></i></a>



                        </li>
                        <!-- Item With Sub -->
                        <li>
                            <a href="blog.php" class="">Blog </a>

                            <!-- Sub -->
                            <ul class="mn-sub">


                            </ul>
                            <!-- End Sub -->

                        </li>
                        <!-- End Item With Sub -->

                    </ul>

                    <ul class="items-end clearlist">
                        <li>



                            <select>
                                <option value="en" selected data-i18n="english">English</option>
                                <option value="ar" data-i18n="arabic">Arabic</option>
                            </select>




                        </li>
                        <!-- End Languages -->
                        <!-- <li><a href="https://wa.link/uaajb8" target="_blank" class="opacity-1 no-hover"><span 
                            data-i18n="FreeLegalAdvice"
                                    class="link-hover-anim underline" data-link-animate="y">
                                    Free Legal
                                    Advice
                                </span></a></li> -->
                        <li><a href="admin/login.php" target="_blank" class="opacity-1 no-hover"><span class="link-hover-anim underline" data-link-animate="y">
                                    Setting Blog
                                </span></a></li>

                    </ul>

                </div>
                <!-- End Main Menu -->

            </div>
        </nav>
        <!-- End Navigation Panel -->
        <!-- End Navigation Panel -->

       
<main id="main">
            
            <!-- Header Section -->
            <section class="page-section bg-dark-1 bg-dark-alpha-80 light-content parallax-5" style="background-image: url(images/full-width-images/section-bg-2.jpg)" id="home">
                <div class="container position-relative pt-30 pt-sm-50">
                    
                    <!-- Section Content -->
                    <div class="text-center">
                        <div class="row">
                            
                            <!-- Page Title -->
                            <div class="col-md-8 offset-md-2">
                                    
                                <h1 class="hs-title-1 mb-20">
                                    <span class="wow charsAnimIn golden-title" data-splitting="chars"><?= $blogID['title'] ?></span>
                                </h1>
                                
                                <!-- Author, Categories, Comments -->
                                <div class="blog-item-data mt-30 mt-sm-10 mb-0 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="d-inline-block me-3">
                                        <a href="#"><i class="mi-clock size-16"></i><span class="visually-hidden">Date:</span> December 25</a>
                                    </div>
                                    <div class="d-inline-block me-3">
                                        <a href="#"><i class="mi-user size-16"></i><span class="visually-hidden">Author:</span> John Doe</a>
                                    </div>
                                    <div class="d-inline-block me-3">
                                        <i class="mi-folder size-16"></i>
                                        <span class="visually-hidden">Categories:</span>
                                        <a href="#">Design</a>, <a href="#">Branding</a>
                                    </div>
                                    <div class="d-inline-block me-3">
                                        <a href="#"><i class="mi-message size-16"></i> 5 Comments</a>
                                    </div>
                                </div>
                                <!-- End Author, Categories, Comments -->
                           
                           </div>
                           <!-- End Page Title -->
                            
                        </div>                            
                    </div>
                    <!-- End Section Content -->
                    
                </div>           
            </section>
            <!-- End Header Section -->
            
            
            <!-- Section -->
            <section class="page-section bg-dark-1 light-content">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <!-- Content -->
                        <div class="col-lg-8 offset-lg-2">
                            
                            <!-- Post -->
                            <div class="blog-item mb-80 mb-xs-40">
                                
                                <div class="blog-item-body">
                                
                                    <!-- Media Gallery -->
                                    <div class="blog-media mb-40 mb-xs-30">
                                        <div class="clearlist content-slider dark-content">
                                            <div>
                                            <img src="<?= "admin/uploads/" . $blogID['image'] ?>" alt="Image Description" />
                                            </div>
                                            
                                        </div>
                                    </div>                                        
                                    
                                    <p class="lead golden-title">
                                    <?= $blogID['title'] ?>
                                    </p> 
                                    
                                    <div class="" >
                                    <?= $blogID['sub'] ?>    
                                    </div>
                                    
                                   

                                </div>
                                
                            </div>
                            <!-- End Post -->
                        
                        
                            
                           
                            
                            
                            
                        </div>
                        <!-- End Content -->
                    
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
         
       
       </main>

        <!-- Footer -->
        <footer class="bg-dark-2 light-content footer z-index-1 position-relative">
            <div class="container position-relative text-center pt-140 pb-80 pb-sm-50">



                <!-- Social Links -->
                <div class="footer-social-links mb-60">
                    <a href="https://www.facebook.com/profile.php?id=100078678734849" title="Facebook" rel="noopener nofollow" target="_blank">
                        <span class="visually-hidden">Facebook</span>
                        <i class="fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/saleh_firm" title="Twitter" rel="noopener nofollow" target="_blank">
                        <span class="visually-hidden">Twitter</span>
                        <i class="fa-twitter"></i>
                    </a>
                    <a href="https://maps.app.goo.gl/dQ3AR3SZioq1kndQ9" title="Google" rel="noopener nofollow" target="_blank">
                        <span class="visually-hidden">Google</span>
                        <i class="fa-google"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/saleh-al-saleh-advocates-and-legal-consutants-4682a0225" title="LinkedIn" rel="noopener nofollow" target="_blank">
                        <span class="visually-hidden">LinkedIn</span>
                        <i class="fa-linkedin"></i>
                    </a>
                    <a href="admin/admin/lo" title="LinkedIn" rel="noopener nofollow" target="_blank">
                        <span class="visually-hidden">LinkedIn</span>
                        <i class="fa-linkedin"></i>
                    </a>

                </div>
                <!-- End Social Links -->

                <!-- Footer Text -->
                <div class="footer-text">

                    <!-- Copyright -->
                    <div>
                        <a href="#">© Saleh-Al-Saleh 2024</a>.
                    </div>
                    <!-- End Copyright -->



                </div>
                <!-- End Footer Text -->

            </div>

        </footer>
        <!-- End Footer -->

    </div>
    <!-- End Page Wrap -->

    <!-- JS -->
    <script src="assests/js/jquery.min.js"></script>
    <script src="assests/js/bootstrap.bundle.min.js"></script>
    <script src="assests/js/plugins.js"></script>
    <script src="assests/js/jquery.ajaxchimp.min.js"></script>
    <script src="assests/js/contact-form.js"></script>
    <script src="assests/js/all.js"></script>
    <script src="lang.js" type="module"></script>
    <!-- End JS -->

</body>

</html>
