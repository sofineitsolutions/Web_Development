<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Heaven x</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <?php include("header.php"); ?>
    <?php include("variable1.php"); ?>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <?php echo("<h5>" . $title1 . "</h5>"); ?>
                            <?php echo("<h1>" . $title2 . "</h1>"); ?>
                            <?php echo("<p>" . $subtitle1 . "</p>"); ?>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="banner_text_iner">
                            <?php echo("<h5>" . $title3 . "</h5>");
                            echo("<h1>" . $title4 . "</h1>"); 
                            echo("<p>" . $subtitle2 . "</p>"); ?>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="banner_text_iner">
                            <?php echo("<h5>" . $title5 . "</h5>");
                            echo("<h1>" . $title6 . "</h1>"); 
                            echo("<p>" . $subtitle3 . "</p>"); ?>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nav next"><a href="#"><span class="flaticon-left-arrow"></span></a></div>
                    <div class="nav prev"><a href="#"><span class="flaticon-right-arrow"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- banner part start-->
    <div class="our_speciality">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_special_part border_left">
                        <img src="img/icon/special_1.svg" alt="">
                        <div class="single_special_text">
                            <?php echo("<h3>" . $con1 . "</h3>"); 
                            echo("<p>" . $dec1 . "</p>"); ?>
                        </div>
                    </div>
                    <div class="single_special_part border_left">
                        <img src="img/icon/special_2.svg" alt="">
                        <div class="single_special_text">
                            <?php echo("<h3>" . $con2 . "</h3>"); 
                            echo("<p>" . $dec2 . "</p>"); ?>
                        </div>
                    </div>
                    <div class="single_special_part border_left">
                        <img src="img/icon/special_3.svg" alt="">
                        <div class="single_special_text">
                            <?php echo("<h3>" . $con3 . "</h3>"); 
                            echo("<p>" . $dec3 . "</p>"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner part start-->

    <!-- about part start-->
    <div class="about_part section_bg">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-4 col-md-6">
                    <div class="about_part_text">
                        <?php echo("<h2>" . $title7 . "</h2>");
                        echo("<p>" . $dec4 . "</p>"); ?>
                        <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span> </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about_img">
                        <img src="img/about_overlay.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about part end-->


    <!-- service part start-->
    <section class="service_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <?php echo("<h2>" . $title8 . "</h2>"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service_slider owl-carousel">
                        <div class="single_service_slide">
                            <div class="row justify-content-end align-items-center single_service">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_2.png" alt="#">
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <?php echo("<h3>" . $con4 . "</h3>"); 
                                        echo("<p>" . $dec5 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt_less_115 single_service">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <?php echo("<h3>" . $con5 . "</h3>");
                                        echo("<p>" . $dec6 . "</p>"); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_1.png" alt="#">
                                </div>
                            </div>
                        </div>
                        <div class="single_service_slide">
                            <div class="row justify-content-end align-items-center single_service">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_1.png" alt="#">
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <?php echo("<h3>" . $con6 . "</h3>");
                                        echo("<p>" . $dec7 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt_less_115 single_service">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <?php echo("<h3>" . $con7 . "</h3>");
                                        echo("<p>" . $dec8 . "</p>"); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_2.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service part end-->

    <!-- project_part part start-->
    <section class="project_part padding_bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="section_tittle">
                        <?php echo("<h2>" . $title9 . "</h2>"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project_slider owl-carousel">
                        <div class="single_project_slide">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/project/project_1.png" alt="#">
                                    <div class="single_project_text">
                                        <img src="img/client/client_2.png" class="client_img" alt="">
                                        <?php echo("<a href='#' class='admin_name'>" . $name1 . "</a>"); 
                                        echo("<span>" . $post1 . "</span>");
                                        echo("<p>" . $dec9 . "</p>"); ?>
                                        <a href="single_project.html" class="btn_1">learn more <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/project/project_2.png" alt="#">
                                    <div class="single_project_text">
                                        <img src="img/client/client_3.png" class="client_img" alt="">
                                        <?php echo("<a href='#' class='admin_name'>" . $name2 . "</a>");
                                        echo("<span>" . $post2 . "</span>");
                                        echo("<p>" . $dec10 . "</p>"); ?>
                                        <a href="single_project.html" class="btn_1">learn more <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_project_slide">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/project/project_1.png" alt="#">
                                    <div class="single_project_text">
                                        <img src="img/client/client_2.png" class="client_img" alt="">
                                        <?php echo("<a href='#' class='admin_name'>" . $name3 . "</a>"); 
                                        echo("<span>" . $post3 . "</span>");
                                        echo("<p>" . $dec11 . "</p>"); ?>
                                        <a href="single_project.html" class="btn_1">learn more <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/project/project_2.png" alt="#">
                                    <div class="single_project_text">
                                        <img src="img/client/client_3.png" class="client_img" alt="">
                                        <?php echo("<a href='#' class='admin_name'>" . $name4 . "</a>");
                                     echo("<span>" . $post4 . "</span>"); 
                                        echo("<p>" . $dec12 . "</p>"); ?>
                                        <a href="single_project.html" class="btn_1">learn more <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project_part part end-->

    <!-- blog part start-->
    <section class="blog_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="section_tittle">
                        <?php echo("<h2>" . $title10 . "</h2>");
                        echo("<p>" . $dec13 . "</p>"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_post_slider owl-carousel">
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href="blog.html"><img src="img/blog/blog_1.png" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <?php echo("<h4> <a href='blog.html'>" . $name5 ."</a></h4>");
                                            echo("<p>" . $post5 . "</p>"); ?>
                                            <span>May 02 2019</span>
                                        </div>
                                        <?php echo("<p>" . $dec14 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href="blog.html"><img src="img/blog/blog_1.png" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <?php echo("<h4> <a href='blog.html'>" . $name6 . "</a></h4>");
                                            echo("<p>" . $post6 . "</p>"); ?>
                                            <span>May 02 2019</span>
                                        </div>
                                        <?php echo("<p>" . $dec15 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href="blog.html"><img src="img/blog/blog_1.png" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <?php echo("<h4> <a href='blog.html'>" . $name7 . "</a></h4>");
                                            echo("<p>" . $post7 . "</p>"); ?>
                                            <span>May 02 2019</span>
                                        </div>
                                        <?php echo("<p>" . $dec16 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog part end-->

    <!-- contact us part start-->
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_us_iner">
                        <div class="row justify-content-around">
                            <div class="col-lg-4">
                                <div class="contact_us_left_text">
                                    <h4>Melbourne</h4>
                                    <span>Australia</span>
                                    <p>324 King Heaven tower, House no, 15 King building
                                        Melbourne ,VIC-222, Australia</p>
                                    <p>Email: infoheaven@gmail.com <br>Phone no: 23113 6456 888</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact_us_right_text">
                                    <h5>Call Directly;</h5>
                                    <h2>(23131 65465 54)</h2>
                                    <h5>Brand Office</h5>
                                    <span>324 King Heaven tower, House no, 15 King
                                        Melbourne ,VIC-222, Australia</span>
                                    <h5>Working Hours:</h5>
                                    <p>Monday - Friday / 9.00 PM - 5.00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us part end-->

    <!-- map us part start-->
    <section class="map_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map_iner">
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map us part end-->

    <!-- footer part start-->
    <?php include("footer.php"); ?>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
    </script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>