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
    <?php include("variable7.php"); ?>
    <!-- header-end -->
   
    <!-- details_slider_area_start -->
    <div class="details_slider_area">
        <div class="details_active owl-carousel">
            <div class="single_details details_bg_1"></div>
            <div class="single_details details_bg_1"></div>
            <div class="single_details details_bg_1"></div>
            <div class="single_details details_bg_1"></div>
        </div>
    </div>
    <!-- details_slider_area_end -->

    <!-- project_details_start -->
    <div class="project_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="project_details_left">
                        <div class="single_details">
                                <?php echo("<h3>" . $title1 . "</h3>"); ?>
                                <?php echo("<p>" . $dec1 . "</p>"); ?>
                        </div>
                        <div class="single_details">
                                <?php echo("<h3>" . $title2 . "</h3>");
                                echo("<p>" . $dec2 . "</p>"); ?>
                        </div>
                        <div class="single_details">
                                <?php echo("<h3>" . $title3 . "</h3>");
                                echo("<p>" . $dec3 . "</p>"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="projects_details_info">
                        <div class="details_thumb">
                            <img src="img/project/details_info.png" alt="">
                        </div>
                        <div class="details_info">
                            <h3>Project info</h3>
                            <div class="details_info_list">
                                <div class="single_details_info d-flex justify-content-between align-items-center">
                                   <span class="left_info">client</span>
                                   <span class="right_info">Colorlib</span>
                                </div>
                                <div class="single_details_info d-flex justify-content-between align-items-center">
                                   <span class="left_info">Categories:</span>
                                   <span class="right_info">Exterior</span>
                                </div>
                                <div class="single_details_info d-flex justify-content-between align-items-center">
                                   <span class="left_info">Date:</span>
                                   <span class="right_info">July 14th, 2019</span>
                                </div>
                                <div class="single_details_info d-flex justify-content-between align-items-center">
                                   <span class="left_info">Rating:</span>
                                   <span class="right_info star">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="single_details_info d-flex justify-content-between align-items-center">
                                   <span class="left_info">Website:</span>
                                   <span class="right_info"><a href="#">examplesite.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project_share">
                        <div class="single_details_info d-flex justify-content-between align-items-center">
                            <span class="left_info">Share Project:</span>
                            <span class="right_info">
                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                <a href="#"> <i class="fa fa-instagram"></i> </a>
                                <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project_details_end -->

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
                                <?php echo("<p>" . $dec4 . "</p>"); ?>
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
                                <?php echo("<p>" . $dec5 . "</p>"); ?>
                                <div class="author_name">
                                    <?php echo("<h4>" . $name2 . "</h4>"); 
                                    echo("<span>" . $post1 . "</span>"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <?php echo("<p>" . $dec6 . "</p>"); ?>
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