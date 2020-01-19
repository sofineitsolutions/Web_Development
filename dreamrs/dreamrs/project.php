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
   <?php include("variable6.php"); ?>
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

    <!--::project part start::-->
    <section class="portfolio_area section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle">
                        <?php echo("<h2>" . $title2 . "</h2>"); ?>
                    </div>
                    <div class="portfolio-filter">
                        <?php echo("<h2>" . $subtitle1 . "</h2>"); ?>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li>
                                <?php echo("<a class='active' id='Architecture-tab' data-toggle='tab' href='#Architecture'
                                    role='tab' aria-controls='Architecture' aria-selected='true'>" . $con1 . "</a>"); ?>
                            </li>
                            <li>
                                <?php echo("<a id='Interior-tab' data-toggle='tab' href='#Interior' role='tab'
                                    aria-controls='Interior' aria-selected='false'>" . $con2 . "</a>"); ?>
                            </li>
                            <li>
                                <?php echo("<a id='Exterior-tab' data-toggle='tab' href='#Exterior' role='tab'
                                    aria-controls='Exterior' aria-selected='false'>" . $con3 . "</a>"); ?>
                            </li>
                            <li>
                                <?php echo("<a id='Landing-tab' data-toggle='tab' href='#Landing' role='tab' aria-controls='Landing'
                                    aria-selected='false'>" . $con4 . "</a>"); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio_item tab-content" id="myTabContent">
                        <div class="row align-items-center justify-content-between tab-pane fade show active"
                            id="Architecture" role="tabpanel" aria-labelledby="Architecture-tab">
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <div class="portfolio_box">
                                    <a href="img/project-1.png" class="img-gal">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="img/project-1.png" alt="">
                                        </div>
                                    </a>
                                    <div class="short_info">
                                        <p>Exclusive Project</p>
                                        <?php echo("<h4><a href='#'>" . $dec1 . "</a></h4>"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-2.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-2.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec2 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-3.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>Exclusive Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec3 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between tab-pane fade" id="Interior"
                            role="tabpanel" aria-labelledby="Interior-tab">
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <div class="portfolio_box">
                                    <a href="img/project-2.png" class="img-gal">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="img/project-2.png" alt="">
                                        </div>
                                    </a>
                                    <div class="short_info">
                                        <p>new Project</p>
                                        <?php echo("<h4><a href='#'>" . $dec4 . "</a></h4>"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-1.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-1.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec5 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-3.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec6 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between tab-pane fade" id="Exterior"
                            role="tabpanel" aria-labelledby="Exterior-tab">
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <div class="portfolio_box">
                                    <a href="img/project-3.png" class="img-gal">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                        </div>
                                    </a>
                                    <div class="short_info">
                                        <p>new Project</p>
                                        <?php echo("<h4><a href='#'>" . $dec7 . "</a></h4>"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-2.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-2.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec8 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-1.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-1.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec9 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between tab-pane fade" id="Landing"
                            role="tabpanel" aria-labelledby="Landing-tab">
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <div class="portfolio_box">
                                    <a href="img/project-1.png" class="img-gal">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="img/project-1.png" alt="">
                                        </div>
                                    </a>
                                    <div class="short_info">
                                        <p>new Project</p>
                                        <?php echo("<h4><a href='#'>" . $dec10 . "</a></h4>"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-4.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-5.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec11 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                                        <div class="portfolio_box">
                                            <a href="img/project-3.png" class="img-gal">
                                                <div class="single_portfolio">
                                                    <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                                </div>
                                            </a>
                                            <div class="short_info">
                                                <p>new Project</p>
                                                <?php echo("<h4><a href='#'>" . $dec12 . "</a></h4>"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::project part end::-->

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