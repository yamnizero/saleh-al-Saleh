<?php
    include "logic.php"
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
        <?php include('navbar.php') ?>
        <!-- End Navigation Panel -->

        <main id="main">

            <!-- Home Section -->
            <section class="page-section bg-dark-alpha-60 light-content parallax-5"
                style="background-image: url(images/full-width-images/section-bg-13.jpg)" id="home">
                <div class="container position-relative pt-sm-40">

                    <div class="text-center">
                        <h1 class="hs-title-4 font-alt mb-0 golden-title" ><span class="wow charsAnimInLong-1"
                                data-splitting="chars">Blog</span></h1>
                    </div>

                </div>
            </section>
            <!-- End Home Section -->


            <!-- About Section -->
            <section class="page-section bg-dark-1 light-content pb-0" id="about">
                <div class="container">

                        <div class="container mt-5" >
                            <div class="text-center">
                                <a href="create.php" class="btn btn-outline-dark">Create New Post</a>
                            </div>
                        </div>

                        

                </div>
                  
            </section>

            
                <!-- Blog Section -->
                <section class="page-section bg-dark-1 light-content ">
                    <div class="container">
                        
                        <!-- Blog Grid --> 
                        <div class="row mt-n50 mt-sm-n30 mb-50 mb-sm-30 wow fadeInUp" data-wow-offset="0">
                            
                            <!-- Post Item -->
                            <?php foreach($query as $q){?>
                                <div class="post-prev-2 col-md-6 col-lg-4 mt-50 mt-sm-30">
                                
                                <div class="post-prev-2-img">
                                    <a href="strong-blog-single-dark.html"><img src="<?= "uploads/".$q['image']?>" alt="Image Description" /></a>
                                </div>
                                
                                <h5 class="post-prev-2-title golden-title"><a href="#"><?= $q['title']?></a></h5>
                                <p ><?= $q['sub']?></p>
                                
                                <div class="post-prev-2-info">
                                <?= $q['created']?>
                                </div>
                                    
                            </div>

                            <?php }?>
                            <!-- End Post Item -->   
                            
                           
                            
                           
                        </div>
                        <!-- End Blog Grid -->
                        
                        
                        
                    </div>
                    <!-- Pagination -->
                    <!-- <div class="pagination justify-content-center">
                            <a href="#"><i class="mi-chevron-left"></i><span class="visually-hidden">Previous page</span></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="no-active">...</span>
                            <a href="#">9</a>
                            <a href="#"><i class="mi-chevron-right"></i><span class="visually-hidden">Next page</span></a>
                        </div> -->
                        <!-- End Pagination -->
                </section>
                <!-- End Blog Section -->
            <!-- End About Section -->
              <!-- Marquee Text Line -->
              <div class="marquee marquee-style-1 bg-dark-2">
                <div class="marquee-track marquee-animation">
                    <div>saleh-al-Saleh</div>
                    <div class="golden-title" aria-hidden="true">بناء الإنسان أفضل الاستثمارات فوق أرضنا، وهو الركيزة الأساسية لعملية التنمية</div>
                    <div class="golden-title"   aria-hidden="true">إن أكبر استثمار للمال هو استثماره في بناء أجيال من المتعلّمين والمثقفين.</div>
                    <div class="golden-title"  aria-hidden="true">إن الإزدهار الحقيقي للدولة هو شبابها.</div>
                    <div class="golden-title"  aria-hidden="true">لقد تعلّمنا من هذا الازدهار أن نبني دولتنا من خلال التعليم والمعرفة وأن نرعى أجيالاً من الرجال والنساء المتعلمين</div>
                    <div class="golden-title"  aria-hidden="true">بناء الإنسان أفضل الاستثمارات فوق أرضنا، وهو الركيزة الأساسية لعملية التنمية</div>
                    <div class="golden-title"  aria-hidden="true">يجب التزود بالعلوم الحديثة والمعارف الواسعة والإقبال عليها بروح عالية، ورغبة صادقة على طرق مجالات العمل كافة، حتى تتمكّن دولة الإمارات خلال الألفية الثالثة من تحقيق نقلة حضارية واسعة.</div>
                    <div class="golden-title"  aria-hidden="true">إن التعليم يمثل أولوية وطنية قصوى، كما أن الاستثمار في الإنسان هو الاستثمار الحقيقي الذي ننشده.</div>
                    <div class="golden-title"  aria-hidden="true">إن الثروة الحقيقية والمكسب الفعلي للوطن يكمن في الشباب الذي يتسلّح بالعلم والمعرفة، باعتبارهما وسيلة ومنهجا يسعى من خلالهما إلى بناء الوطن، وتعزيز منعته، في كلّ موقع من مواقع العطاء والبناء.</div>
                    <div class="golden-title"  aria-hidden="true">لا مكان في المستقبل لمن يفتقد العلم والمعرفة</div>
                    <div class="golden-title"  aria-hidden="true">إن الوطن ينتظر منا الكثير والشعب يتطلع إلى أعمالنا</div>
                    <div class="golden-title"  aria-hidden="true">علينا أن نكافح ونحرص على دفع مسيرة العمل في هذا الوطن والدفاع عنه بنفس الروح والشجاعة التي يتحلى بها أسلافنا</div>
                    <div class="golden-title"  aria-hidden="true">إن رصيد أي أمة متقدمة هو أبناؤها المتعلمون وإن تقدم الشعوب والأمم إنما يقاس بمستوى التعليم وانتشاره</div>
                    <div class="golden-title"  aria-hidden="true">إن رفع مستوى المواطن والدولة ككل فوق كل شيء، والدولة مثل الشجرة التي يجب أن تحظى بعناية مواطنيها وحرصهم على تنميتها، وكل مواطن عليه أن يحترم وطنه</div>

                </div>
            </div>
            <!-- End Marquee Text Line -->
        <!-- Z -->  
            <!-- <section >
                <div class="scrollZaid text">
                    <div>
                        إن التعليم يمثل أولوية وطنية قصوى،
                        كما أن الاستثمار في الإنسان هو الاستثمار الحقيقي الذي ننشده.
                    </div>
                    <div>
                        لا مكان في المستقبل لمن
                        يفتقد العلم والمعرفة.
                    </div>
                </div>
                <div class="scrollZaid text2">
                    <div>
                        
                        بناء الإنسان أفضل الاستثمارات فوق أرضنا
                        وهو الركيزة الأساسية لعملية التنمية.
                        
                    </div>
                    <div>
                        إن هدفنا الأساسي في دولة الإمارات هو بناء الوطن والمواطن، وإن الجزء الأكبر إن هدفنا الأساسي في دولة الإمارات هو بناء الوطن والمواطن، وإن الجزء الأكبر من دخل البلاد يسخر لتعويض ما فاتنا واللحاق بركب الأمم المتقدّمة التي سبقتنا،
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                </div>
                <div class="scrollZaid text3">
                    <div>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                    <div>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                </div>
                <div class="scrollZaid text4">
                    <div>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                    <div>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                </div>
                <div class="scrollZaid text5">
                    <div>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                    <div>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                        Online <span>Tutorials - </span> Online <span></span>Tutorials - </span>
                    </div>
                </div>
            </section> -->
            


            <!-- Experience Section -->
            
            <!-- End Experience Section -->


            <!-- Divider -->
            <hr class="white opacity-015 mt-0 mb-0" />
            <!-- End Divider -->


        


           


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