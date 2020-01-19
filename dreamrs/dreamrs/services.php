<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Real_state || Services</title>
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
    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::menu part start::-->
   <?php include("header.php"); ?>
   <?php include("variable3.php"); ?>
    <!--::menu part end::-->

    <!--::breadcrumb part start::-->
    <section class="breadcrumb blog_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <?php echo("<h2>" . $title1 . "</h2>"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::breadcrumb part start::-->

    <!--::service part end::-->
    <section class="service_part section-padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="section_tittle">
                        <?php echo("<h2>" . $title2 . "</h2>"); ?>
                    </div>
                    <div class="service_part_iner">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_service_text ">
                                    <img src="img/icon/service_1.svg" alt="">
                                    <?php echo("<h4>" . $con1 . "</h4>");
                                    echo("<p>" . $dec1 . "</p>"); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_service_text">
                                    <img src="img/icon/service_2.svg" alt="">
                                    <?php echo("<h4>" . $con2 . "</h4>");
                                    echo("<p>" . $dec2 . "</p>"); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_service_text">
                                    <img src="img/icon/service_3.svg" alt="">
                                    <?php echo("<h4>" . $con3 . "</h4>");
                                    echo("<p>" . $dec3 . "</p>"); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_service_text">
                                    <img src="img/icon/service_4.svg" alt="">
                                    <?php echo("<h4>" . $con4 . "</h4>");
                                    echo("<p>" . $dec4 . "</p>"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-10">
                    <div class="service_text">
                        <?php echo("<h2>" . $title3 . "</h2>"); 
                        echo("<p>" . $dec5 . "</p>"); ?>
                        <a href="service.html" class="btn_1">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::service part end::-->


    <!--::review_part start::-->
    <section class="review_part padding_bottom">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-sm-6">
                    <div class="section_tittle text-center">
                        <?php echo("<h2>" . $title4 . "</h2>"); ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-sm-8">
                    <!-- THUMBNAILS -->
                    <div class="slider-nav-thumbnails">
                        <div class="slider-thumbnails">
                            <img src="img/client/client_1.png" alt="slideimg" class="image">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_2.png" alt="slideimg" class="image">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_3.png" alt="slideimg" class="image">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_2.png" alt="slideimg" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-10">
                    <!-- MAIN SLIDES -->
                    <div class="slider">
                        <div data-index="1">
                            <div class="client_review_text text-center">
                                <?php echo("<h3>" . $name1 . "</h3>"); 
                                echo("<h5>" . $post1 . "</h5>"); 
                                echo("<p>" . $dec6 . "</p>"); ?>
                            </div>
                        </div>
                        <div data-index="2">
                            <div class="client_review_text text-center">
                                <?php echo("<h3>" . $name2 . "</h3>");
                                echo("<h5>" . $post2 . "</h5>");
                                echo("<p>" . $dec7 . "</p>"); ?>
                            </div>
                        </div>
                        <div data-index="3">
                            <div class="client_review_text text-center">
                                <?php echo("<h3>" . $name3 . "</h3>");
                                echo("<h5>" . $post3 . "</h5>");
                                echo("<p>" . $dec8 . "</p>"); ?>
                            </div>
                        </div>
                        <div data-index="4">
                            <div class="client_review_text text-center">
                                <?php echo("<h3>" . $name4 . "</h3>");
                                echo("<h5>" . $post4 . "</h5>");
                                echo("<p>" . $dec9 . "</p>"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <!--::footer_part start::-->
   <?php include("footer.php"); ?>
    <!--::footer_part end::-->

    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.easing.min.js"></script>
    <!--masonry js-->
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.js"></script>
    <!--form validation js-->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>