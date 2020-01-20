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
   <?php include("variable2.php"); ?>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <?php echo("<h2>" . $title1 . "</h2>"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- home tips start-->
    <section class="home_tips padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="home_tips_text text-center">
                        <?php echo("<h1>" . $title2 . "</h1>");
                        echo("<p>" . $subtitle1 . "</p>"); ?>
                    </div>
                    <div class="home_tips_video_popup">
                        <img src="img/video_popup.png" alt="#">
                        <div class="extends_video">
                            <div class="intro_video_iner text-center d-flex align-items-center">
                                <div class="intro_video_icon">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <i class="fas fa-caret-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home tips start-->

    <div class="overlay_section">

    </div>

    <!-- single special page item start -->
    <section class="single_page_special">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_page_special_item owl-carousel">
                        <div class="single_slide_item">
                            <img src="img/icon/special_1.svg" alt="">
                            <div class="single_special_text">
                                <?php echo("<h3>" . $con1 . "</h3>");
                                echo("<p>" . $dec1 . "</p>"); ?>
                            </div>
                        </div>
                        <div class="single_slide_item">
                            <img src="img/icon/special_2.svg" alt="">
                            <div class="single_special_text">
                                <?php echo("<h3>" . $con2 . "</h3>");
                                echo("<p>" . $dec2 . "</p>"); ?>
                            </div>
                        </div>
                        <div class="single_slide_item">
                            <img src="img/icon/special_3.svg" alt="">
                            <div class="single_special_text">
                                <?php echo("<h3>" . $con3 . "</h3>");
                                echo("<p>" . $dec3 . "</p>"); ?>
                            </div>
                        </div>
                        <div class="single_slide_item">
                            <img src="img/icon/special_1.svg" alt="">
                            <div class="single_special_text">
                                <?php echo("<h3>" . $con4 . "</h3>");
                                echo("<p>" . $dec4 . "</p>"); ?>
                            </div>
                        </div>
                        <div class="single_slide_item">
                            <img src="img/icon/special_3.svg" alt="">
                            <div class="single_special_text">
                                <?php echo("<h3>" . $con5 . "</h3>");
                                echo("<p>" . $dec5 . "</p>"); ?>
                            </div>
                        </div>
                        <div class="single_slide_item">
                            <img src="img/icon/special_2.svg" alt="">
                            <div class="single_special_text">
                                <?php echo("<h3>" . $con6 . "</h3>");
                                echo("<p>" . $dec6 . "</p>"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single special page item end -->

    <!-- blog part start-->
    <section class="blog_part single_page_blog">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="section_tittle">
                        <?php echo("<h2>" . $title3 . "</h2>");
                        echo("<p>" . $subtitle2 . "</p>"); ?>
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
                                        <img src="img/blog/blog_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <?php echo("<h4>" . $name1 . "</h4>"); 
                                            echo("<p>" . $post1 . "</p>");  ?>
                                            <span>May 02 2019</span>
                                        </div>
                                        <?php echo("<p>" . $dec7 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <img src="img/blog/blog_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <?php echo("<h4>" . $name2 . "</h4>");
                                            echo("<p>" . $post2 . "</p>"); ?>
                                            <span>May 02 2019</span>
                                        </div>
                                        <?php echo("<p>" . $dec8 . "</p>"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <img src="img/blog/blog_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <?php echo("<h4>" . $name3 . "</h4>");
                                            echo("<p>" . $post3 . "</p>"); ?>
                                            <span>May 02 2019</span>
                                        </div>
                                        <?php echo("<p>" . $dec9 . "</p>"); ?>
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