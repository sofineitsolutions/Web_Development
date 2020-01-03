<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ararat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
   <?php include("header.php"); ?>
   <?php include("variable3.php"); ?>
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg overlay2">
        <div class="bradcam_text">
           <?php echo("<h3>" . $title1 . "</h3>");  ?>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- lastest_project_strat -->
    <div class="lastest_project">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <span class="sub_heading">Project view</span>
                        <?php echo("<h3>" . $title2 . "</h3>");  ?>
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dubai, UAE</span>
                       <?php echo("<h4>" . $subtitle1 . "</h4>");
                        echo("<p>" . $dec1 . "</p>"); ?>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dhaka, Bangladesh</span>
                        <?php echo("<h4>" . $subtitle2 . "</h4>");
                        echo("<p>" . $dec2 . "</p>"); ?>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dubai, UAE</span>
                        <?php echo("<h4>" . $subtitle3 . "</h4>");
                        echo("<p>" . $dec3 . "</p>"); ?>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dhaka, Bangladesh</span>
                        <?php echo("<h4>" . $subtitle4 . "</h4>");
                        echo("<p>" . $dec4 . "</p>"); ?>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lastest_project_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area testimonial_bg overlay2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <?php echo("<p>" . $con1 . "</p>"); ?>
                                <div class="author_name">
                                    <?php echo("<h4>" . $name1 . "</h4>");
                                    echo("<span>" . $post1 . "</span>"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <?php echo("<p>" . $con2 . "</p>"); ?>
                                <div class="author_name">
                                    <?php echo("<h4>" . $name2 . "</h4>");
                                    echo("<span>" . $post2 . "</span>"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <?php echo("<p>" . $con3 . "</p>"); ?>
                                <div class="author_name">
                                    <?php echo("<h4>" . $name3 . "</h4>");
                                    echo("<span>" . $post3 . "</span>"); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- messege_area_start -->
    <div class="messege_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="messege_thumb">
                        <img src="img/testmonial/mesege.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title mb-20">
                        <span class="sub_heading">Contact Us</span>
                        <h3>Send your message</h3>
                        <div class="seperator"></div>
                    </div>
                    <form action="#" class="messege">
                        <input type="email" placeholder="Your Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Messege"></textarea>
                        <button class="boxed-btn">SEND US</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- messege_area_end -->

    <!-- footer_start -->
    <?php include("footer.php"); ?>
    <!-- footer_end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>