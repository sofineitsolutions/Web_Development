
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Foody &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php include("variable.php");
    include("h.php");?>
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
               <?php echo "<h1 data-aos='fade-up'>".$title1."</h1>";?>
               <?php echo "<p class='mb-5' data-aos='fade-up' data-aos-delay='100'>".$des1."</p>";?>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
              <?php echo "<h1 data-aos='fade-up'>".$title2."</h1>";?>
              <?php echo "<p class='mb-5' data-aos='fade-up' data-aos-delay='100'>".$des2."</p>";?>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 
    

    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
          <?php echo"<h3 class='mb-2 text-primary'>".$Enjoy_Eating."</h3>";
          echo "<p>".$des3."</p>";?>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
            <?php echo"<h3 class='mb-2 text-primary'>".$Fresh_Sea_Foods."</h3>";
          echo "<p>".$des4."</p>";?>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
           <?php echo"<h3 class='mb-2 text-primary'>".$Cup_of_Coffees."</h3>";
          echo "<p>".$des5."</p>";?>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
            <?php echo"<h3 class='mb-2 text-primary'>".$Meat_Eaters."</h3>";
          echo "<p>".$des6."</p>";?>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
            <?php echo "<h2 data-aos='fade-up'>".$stitle1."</h2>";
              echo "<p data-aos='fade-up' data-aos-delay='100'>".$sdes1."</p>";?>
            </div>
          </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <img src="img/dishes_1.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          <div class="col-lg-4">
            <img src="img/about_1.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="img/about_2.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
          </div>
          <div class="col-lg-4">
            <img src="img/dishes_3.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>
      </div>
    </section>

    <section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
            <?php echo"<h2>".$stitle2."</h2>";?>
            </div>
          </div>
        </div>
        <div class="owl-carousel centernonloop">
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
            <?php echo "<p class='dishes-price'>".$price1."</p>";
            echo"<h2 class='dishes-heading'>".$sep_menu1."</h2>";?>
            </div>
            <img src="img/dishes_1.jpg" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="200">
            <div class="text">
            <?php echo"<p class='dishes-price'>".$price2."</p>";
             echo "<h2 class='dishes-heading'>".$sep_menu2."</h2>";?>
            </div>
            <img src="img/dishes_2.jpg" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="300">
            <div class="text">
            <?php echo"<p class='dishes-price'>".$price3."</p>";
              echo"<h2 class='dishes-heading'>".$sep_menu3."</h2>";?>
            </div>
            <img src="img/dishes_3.jpg" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
            <?php echo"<p class='dishes-price'>".$price4."</p>";
             echo "<h2 class='dishes-heading'>".$sep_menu4."</h2>";?>
            </div>
            <img src="img/dishes_4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </section> <!-- .section -->

    <section class="section bg-light  top-slant-white bottom-slant-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
            <?php echo"<h2>".$stitle3."</h2>";?>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');" data-aos="fade"></div>
              <div class="text order-1">
              <?php echo"<h3>".$menu1."</h3>";?>
               <?php echo "<p>".$mdes1."</p>";?>
               <?php echo "<p class='text-primary h3'>".$mprice1."</p>";?>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/dishes_1.jpg');" data-aos="fade"></div>
              <div class="text">
              <?php echo "<h3>".$menu2."</h3>";
              echo "<p>".$mdes2."</p>";
              echo "<p class='text-primary h3'>".$mprice2."</p>";?>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');" data-aos="fade"></div>
              <div class="text order-1">
              <?php echo "<h3>".$menu3."</h3>";
               echo "<p>".$mdes3."</p>";
               echo "<p class='text-primary h3'>".$mprice3."</p>";?>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/dishes_3.jpg');" data-aos="fade"></div>
              <div class="text">
              <?php echo "<h3>".$menu4."</h3>";
               echo "<p>".$mdes4."</p>";
               echo "<p class='text-primary h3'>".$mprice4."</p>";?>
                
              </div>
              
            </div>

          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');" data-aos="fade"></div>
              <div class="text order-1">
              <?php echo "<h3>".$menu5."</h3>";
               echo "<p>".$mdes5."</p>";
               echo "<p class='text-primary h3'>".$mprice5."</p>";?>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/dishes_1.jpg');" data-aos="fade"></div>
              <div class="text">
              <?php echo "<h3>".$menu6."</h3>";
               echo "<p>".$mdes6."</p>";
               echo "<p class='text-primary h3'>".$mprice6."</p>";?>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');" data-aos="fade"></div>
              <div class="text order-1">
              <?php echo "<h3>".$menu7."</h3>";
               echo "<p>".$mdes7."</p>";
               echo "<p class='text-primary h3'>".$mprice7."</p>";?>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/dishes_3.jpg');" data-aos="fade"></div>
              <div class="text">
              <?php echo "<h3>".$menu8."</h3>";
               echo "<p>".$mdes8."</p>";
               echo "<p class='text-primary h3'>".$mprice8."</p>";?>
                
              </div>
              
            </div>

          </div>
        </div>
        

      </div>
    </section> <!-- .section -->

   

    <section class="section relative-higher">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
            <?php echo "<h2>".$stitle4."</h2>";?>
              <!-- <span class="back-text">Testimonial</span> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="owl-carousel centernonloop2">
              <div class="slide" data-aos="fade-left" data-aos-delay="100">
                <blockquote class="testimonial">
                <?php echo "<p>".$tdes1."</p>";?>
                  <div class="d-flex author">
                    <img src="img/person_1.jpg" alt="" class="mr-4">
                    <div class="author-info">
                    <?php echo "<h4>".$tname1."</h4>";?>
                    <?php echo "<p>".$prof1."</p>";?>
                    </div>
                  </div>  
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="200">
                <blockquote class="testimonial">
                <?php echo "<p>".$tdes2."</p>";?>
                  <div class="d-flex author">
                    <img src="img/person_2.jpg" alt="" class="mr-4">
                    <div class="author-info">
                    <?php echo "<h4>".$tname2."</h4>";?>
                    <?php echo "<p>".$prof2."</p>";?>
                    </div>
                  </div>  
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="300">
                <blockquote class="testimonial">
                <?php echo "<p>".$tdes3."</p>";?>
                  <div class="d-flex author">
                    <img src="img/person_3.jpg" alt="" class="mr-4">
                    <div class="author-info">
                    <?php echo "<h4>".$tname3."</h4>";?>
                    <?php echo "<p>".$prof3."</p>";?>
                    </div>
                  </div>  
                </blockquote>
              </div>
            </div>
          </div>
        </div>

        

        
      </div>
    </section> <!-- .section -->

    <section class="section  bg-light top-slant-white">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
            <?php echo "<h2>".$blog."</h2>";?>
              <span class="back-text">Our Blog</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_1.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$lbog1."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>" .$date1."</span>";?> <br>
                </p>
                <?php echo"<p>".$bdes1."</p>";?>
                
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_2.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$lbog2."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>" .$date2."</span>";?>> <br>
                </p>
                <?php echo"<p>".$bdes2."</p>";?>
                
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>

    </section> <!-- .section -->

    <?php include("f.php");?>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    
  </body>
</html>