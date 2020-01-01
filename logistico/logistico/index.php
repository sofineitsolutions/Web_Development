<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportion</title>
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
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include("H.php")?>
   
    <!-- header-end -->

    <!-- slider_area_start -->
    <?php include("variable1.php") ?>
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="slider_text text-center justify-content-center">
                         <?php echo("<p>" . $Title1 ."</p>");?>
                            <?php echo("<h3>". $subtitle1 ."</h3>");?>
                                <a class="boxed-btn3" href="service.html">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="transportaion_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/airplane.png" alt="">
                        </div>
                       <?php echo("<h3>" . $con1 . "</h3>");
                        echo("<p>" . $dec1 . "</p>");?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/live.png" alt="">
                        </div>
                        <?php echo("<h3>".$con2 ."</h3>");
                        echo("<p>" . $dec1 ."</p>"); ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/world.png" alt="">
                        </div>
                        <?php echo("<h3>" . $con3 ."</h3>");
                        echo("<p>" . $dec1 ."</p>");?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Ocean Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/2.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Land Transport</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/3.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Air Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Ocean Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <?php echo("<h3>" . $con4 . "</h3>"); ?>
                       <?php echo("<p>" . $dec4 . "</p>"); ?>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
    <!-- chose_area  -->
    <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="img/about/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                           <?php echo("<h3>" . $con5 . "</h3>");
                            echo("<p>" . $dec5 . "</p>"); ?>
                            <ul>
                                <?php echo("<li>" .$a1 . "</li>");
                                echo("<li>" . $a2 ."</li>");
                                echo("<li>" . $a3 ."</li>"); ?>
                            </ul>

                            <div class="about_btn">
                                <a class="boxed-btn3-line" href="about.html">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ chose_area  -->

    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="offcan_bg">
                <div class="row">
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">42</span> <span>+</span> </h3>
                            <?php echo("<p>".$con6 ."</p>");?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">97</span> <span>+</span> </h3>
                            <?php echo("<p>" . $con7 . "</p>");?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">2342</span></h3>
                            <?php echo("<p>" . $con8 . "</p>");?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">3245</span></h3>
                            <?php echo("<p>" . $con9 ."</p>");?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <?php echo("<h3>" . $con10 . "</h3>"); ?>
                        <?php echo("<p>" .$dec10 ."</p>"); ?>
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product type">Product type</option>
                                            <option value="1">small</option>
                                            <option value="2">standard</option>
                                            <option value="3">high</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product size">Product size</option>
                                            <option value="1">M</option>
                                            <option value="2">L</option>
                                            <option value="3">Xl</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="City of departure">City of departure</option>
                                            <option value="1">departure</option>
                                            <option value="2">departure</option>
                                            <option value="3">departure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Delivery city">City of departure</option>
                                            <option value="1">Delivery</option>
                                            <option value="2">Delivery</option>
                                            <option value="3">Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="submit">Send Estimate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->

    <!-- contact_location  -->
    <div class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                        <?php echo("<p>" . $con11 ."</p>");?>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/support.svg" alt=""> Location</h3>
                        <?php echo("<p> <br>". $con12 ."</p>"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ contact_location  -->


    <!-- footer start -->
    <?php include("F.php"); ?>
    
    <!--/ footer end  -->
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>

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
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>




</body>

</html>