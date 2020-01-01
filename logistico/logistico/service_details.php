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
    
       <?php include("H.php"); ?>
   
    <!-- header-end -->

    <!-- bradcam_area  -->
    <?php include("variable4.php"); ?>
    <div class="bradcam_area bradcam_area2  bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <?php echo("<h3>".$con1."</h3>");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- service_details_start  -->
    <div class="service_details_area">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4">
                            <div class="service_details_left">
                                <?php echo("<h3>".$con2."</h3>"); ?>
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class=" active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                        role="tab" aria-controls="v-pills-home" aria-selected="true">Ocean Freight</a>
                                    <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Land Transport</a>
                                    <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Air Freight</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="service_details_info">
                                        <?php echo("<h3>".$con3 ."</h3>");
                                        echo("<p>".$dec1."</p>");
                                        echo("<p>".$dec2."</p>");
                                        echo("<p>".$dec3."</p>"); ?>
                                    </div>
                                    <div class="service_thumb">
                                        <img class="img-fluid" src="img/service/service_details.png" alt="">
                                    </div>
                                    <div class="accordion_area">
                                        <div class="faq_ask">
                                            <?php echo("<h3>".$con4."</h3>");?>
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseTwo' aria-expanded='false'
                                                                aria-controls='collapseTwo'>".$con5."<span>".$con6."</span>");?>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>".$dec4."</div>");?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseOne' aria-expanded='false'
                                                                aria-controls='collapseOne'>".$con7."</button>");?>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                        data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>".$dec5."</div>");?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseThree' aria-expanded='false'
                                                                aria-controls='collapseThree'>".$con8 ."</button>");?>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                        data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>".$dec6."</div>");?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download_brochure d-flex align-items-center justify-content-between">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <?php echo("<h3>".$con9."</h3>");
                                                echo("<p>".$con10."</p>");?>
                                            </div>
                                        </div>
                                        <div class="download_right">
                                            <a class="boxed-btn3-line" href="#">Download Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="service_details_info">
                                        <?php echo("<h3>".$con3 ."</h3>");
                                        echo("<p>".$dec1."</p>");
                                        echo("<p>".$dec2."</p>");
                                        echo("<p>".$dec3."</p>"); ?>
                                    <div class="service_thumb">
                                        <img class="img-fluid" src="img/service/service_details.png" alt="">
                                    </div>
                                    <div class="accordion_area">
                                        <div class="faq_ask">
                                           <?php echo("<h3>".$con4."</h3>");?>
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo1">
                                                        <h5 class="mb-0">
                                                            <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseTwo' aria-expanded='false'
                                                                aria-controls='collapseTwo'>".$con5."<span>".$con6."</span>");?>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                                        data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>".$dec4."</div>");?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne2">
                                                        <h5 class="mb-0">
                                                           <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseOne' aria-expanded='false'
                                                                aria-controls='collapseOne'>".$con7."</button>");?>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                                                        data-parent="#accordion" style="">
                                                         <?php echo("<div class='card-body'>".$dec5."</div>");?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree3">
                                                        <h5 class="mb-0">
                                                            <?php echo("<div class='card-body'>".$dec6."</div>");?>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3"
                                                        data-parent="#accordion" style="">
                                                         <div class="download_text">
                                                <?php echo("<h3>".$con9."</h3>");
                                                echo("<p>".$con10."</p>");?>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download_brochure d-flex align-items-center justify-content-between">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <?php echo("<h3>".$con9."</h3>");
                                                echo("<p>".$con10."</p>");?>
                                            </div>
                                        </div>
                                        <div class="download_right">
                                            <a class="boxed-btn3-line" href="#">Download Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="service_details_info">
                                        <?php echo("<h3>".$con3 ."</h3>");
                                        echo("<p>".$dec1."</p>");
                                        echo("<p>".$dec2."</p>");
                                        echo("<p>".$dec3."</p>"); ?>
                                    </div>
                                    <div class="service_thumb">
                                        <img class="img-fluid" src="img/service/service_details.png" alt="">
                                    </div>
                                    <div class="accordion_area">
                                        <div class="faq_ask">
                                           <?php echo("<h3>".$con4."</h3>");?>
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwoa">
                                                        <h5 class="mb-0">
                                                           <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseTwo' aria-expanded='false'
                                                                aria-controls='collapseTwo'>".$con5."<span>".$con6."</span>");?>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwoa" class="collapse" aria-labelledby="headingTwoa"
                                                        data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>".$dec4."</div>");?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                           <?php echo("<button class='btn btn-link collapsed' data-toggle='collapse'
                                                                data-target='#collapseOne' aria-expanded='false'
                                                                aria-controls='collapseOne'>".$con7."</button>");?>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOneb" class="collapse" aria-labelledby="headingOneb"
                                                        data-parent="#accordion" style="">
                                                         <?php echo("<div class='card-body'>".$dec5."</div>");?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <?php echo("<div class='card-body'>".$dec6."</div>");?>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThreev" class="collapse" aria-labelledby="headingThreev"
                                                        data-parent="#accordion" style="">
                                                         <div class="download_text">
                                                <?php echo("<h3>".$con9."</h3>");
                                                echo("<p>".$con10."</p>");?>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download_brochure d-flex align-items-center justify-content-between">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                               <?php echo("<h3>".$con9."</h3>");
                                                echo("<p>".$con10."</p>");?>
                                            </div>
                                        </div>
                                        <div class="download_right">
                                            <a class="boxed-btn3-line" href="#">Download Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- service_details_start  -->

    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get free Estimate</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing.</p>
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
                        <p>600/D, Kings road, Green lane
                            NewYork-2563</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/support.svg" alt=""> Location</h3>
                        <p>+10 267 3563 4562 <br>
                            support@logistico.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ contact_location  -->


    <!-- footer start -->
    <?php include("F.php");?>
    <!--/ footer end  -->

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