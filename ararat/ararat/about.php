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
   <?php include("header.php");  ?>
   <?php include("variable2.php") ?>
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg overlay2">
        <div class="bradcam_text">
            <?php echo("<h3>" . $title1 . "</h3>"); ?>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="img/about/1.png" alt="">
                        <div class="exprience">
                            <h1>25</h1>
                            <span>Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                            <span class="sub_heading">About Us</span>
                            <?php echo("<h3>" . $subtitle1 . "</h3>"); ?>
                            <div class="seperator"></div>
                        </div>
                        <?php echo("<p>" . $dec1 . "</p>");  ?>
                        <ul class="about_list">
                            <?php echo("<li>" . $con1 . "</li>");
                            echo("<li>" . $con2 . "</li>"); ?>
                        </ul>
                        <a href="#" class="boxed-btn">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->
    <!-- lastest_project_strat -->
    <div class="lastest_project">
        <div class="container">
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title padding-right">
                        <span class="sub_heading">About Us</span>
                        <?php echo("<h3>" . $subtitle2 . "</h3>"); ?>
                        <div class="seperator"></div>
                        <?php echo("<p>" . $dec2 . "</p>"); ?>
                        <div class="mission_contact">
                            <a href="#" class="boxed-btn large-width">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/about/mission.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lastest_project_end -->

    <!-- youtube_video_area_start -->
    <div class="youtube_video_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="youtube_video youtube_bg">
                        <div class="youtube_play_btn">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=E_-lMZDi7Uw">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- youtube_video_area_end -->

    <!-- dream_service_start -->
    <div class="team_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95">
                        <span class="sub_heading">Our Team members</span>
                        <?php echo("<h3>" . $subtitle3 . "</h3>"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_team text-center">
                        <div class="thumb team_1">
                            <div class="author_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php echo("<h3>" . $name1 . "</h3>");
                        echo("<p>" . $post1 . "</p>"); ?>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_team text-center">
                            <div class="thumb team_2">
                                    <div class="author_links">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                        <?php echo("<h3>" . $name2 . "</h3>");
                        echo("<p>" . $post2 . "</p>"); ?>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_team text-center">
                            <div class="thumb team_3">
                                    <div class="author_links">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                        <?php echo("<h3>" . $name3 . "</h3>");
                        echo("<p>" . $post3 . "</p>"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dream_service_end -->


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
                                <?php echo("<p>" . $dec3 . "</p>");  ?>
                                <div class="author_name">
                                    <?php echo("<h4>" . $name4 . "</h4>");
                                    echo("<span>" . $post4 . "</span>"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <?php echo("<p>" . $dec4 . "</p>"); ?>
                                <div class="author_name">
                                    <?php echo("<h4>" . $name5 . "</h4>");
                                    echo("<span>" . $post5 . "</span>"); ?>
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
                                    <?php echo("<h4>" . $name6 . "</h4>");
                                    echo("<span>" . $post6 . "</span>"); ?>
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