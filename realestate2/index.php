<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
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
    <?php include("header.php"); ?>
    <?php include("variable.php"); ?>
    <!-- slider_area_start -->
    <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="slider_text text-center justify-content-center">
                                  <?php echo("<h3>$title</h3>"); ?>
                                  <?php echo("<p>$des</p>"); ?>
                                </div>
                                <div class="property_form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form_wrap d-flex">
                                                        <div class="single-field max_width ">
                                                                <label for="#">Location</label>
                                                                <select class="wide" >
                                                                        <option data-display="NewYork">NewYork</option>
                                                                        <option value="1">Bangladesh</option>
                                                                        <option value="2">India</option>
                                                                </select>
                                                            </div>
                                                        <div class="single-field max_width ">
                                                                <label for="#">Property type</label>
                                                                <select class="wide" >
                                                                        <option data-display="Apartment">Apartment</option>
                                                                        <option value="1">Apartment</option>
                                                                        <option value="2">Apartment</option>
                                                                </select>
                                                            </div>
                                                            <div class="single_field range_slider">
                                                                    <label for="#">Price ($)</label>
                                                                <div id="slider"></div>
                                                            </div>
                                                        <div class="single-field min_width ">
                                                                <label for="#">Bed Room</label>
                                                                <select class="wide" >
                                                                        <option data-display="01">01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                </select>
                                                            </div>
                                                        <div class="single-field min_width ">
                                                                <label for="#">Bath Room</label>
                                                                <select class="wide" >
                                                                        <option data-display="01">01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                </select>
                                                            </div>
                                                            <div class="serach_icon">
                                                                    <a href="#">
                                                                            <i class="ti-search"></i>
                                                                    </a>
                                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- slider_area_end -->

    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <?php echo("<h3>$property</h3>"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/1.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <?php echo("<h3><a href='#'>$pro1</a></h3>"); ?>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag red">
                                    For Rent
                            </div>
                            <img src="img/property/2.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <?php echo("<h3><a href='#'>$pro2</a></h3>"); ?>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">$563/month</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/3.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <?php echo("<h3><a href='#'>$pro3</a></h3>"); ?>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag red">
                                    For Rent
                            </div>
                            <img src="img/property/4.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <?php echo("<h3><a href='#'>$pro4</a></h3>");  ?>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">$563/month</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/5.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <?php echo("<h3><a href='#'>$pro5</a></h3>"); ?>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="img/property/6.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                
                                    <?php echo("<h3><a href='#'>$pro6</a></h3>"); ?>
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>Popular Properties</span>
                                    </div>
                                    <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
    
    <!-- home_details  -->
    <div class="home_details">
        <div class="container">
            <div class="row">   
                <div class="col-xl-12">
                    <div class="home_details_active owl-carousel">
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Sale
                                                    </span>
                                                    <div class="info_header">
                                                            <h3>Blue haven modern home</h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span>Popular Properties</span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                                        </ul>
                                                        <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span>$4567</span>
                                                            <a class="boxed-btn3-line" href="#">View Details</a>
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
        </div>
    </div>
    <!-- /home_details  -->

    <!-- accordion  -->
    <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                                <div class="faq_ask">
                                    <?php echo("<h3>$ask</h3>"); ?>
                                        <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                   <?php echo("$que</span>"); ?>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>$que1</div>"); ?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapse4One">
                                                                  <?php echo("$que1"); ?>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                      <?php echo("<div class='card-body'>$que3
                                                        </div>"); ?>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                  <?php echo("$que4"); ?>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                        <?php echo("<div class='card-body'>$que5
                                                        </div>"); ?>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion_thumb">
                            <img src="img/banner/accordion.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- accordion  -->

    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span  class="counter" >200</span> <span>+</span> </h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >300</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >15</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
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
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
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
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
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

    <?php include("agent.php"); ?>

   <?php include("action.php"); ?>

   <?php include("footer.php"); ?>

    <!-- link that opens popup -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
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
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>