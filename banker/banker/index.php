<!doctype html>
<html lang="en">
  <head>
    <title>Banker &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <?php
  	include("H.php");
  ?>
    <?php
                  include("variable1.php"); 
                ?>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
   
  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
              
                 <?php echo("<h1 class='text-uppercase' data-aos='fade-up'>" . $b1_title1 . "</h1>"); ?>
                <?php echo("<p class='mb-5 desc'  data-aos='fade-up' data-aos-delay='100'>" . $b1_subtitle1 . "</p>"); ?>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>

              <div class="slide">
                <?php echo("<h1 class='text-uppercase' data-aos='fade-up'>" . $b1_title2 . "</h1>");
                echo("<p class='mb-5 desc'  data-aos='fade-up' data-aos-delay='100'>" . $b1_subtitle1 . "</p>"); ?>
              </div>

              <div class="slide">
                <?php echo("<h1 class='text-uppercase' data-aos='fade-up'>" . $b1_title3 . "</h1>"); 
                echo("<p class='mb-5 desc'  data-aos='fade-up' data-aos-delay='100'>" . $b1_subtitle1 . "</p>"); ?>
              </div>

            </div>
          </div>
            
        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  

    <div class="site-section" id="next">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <?php echo("<h3 class='card-title'>" . $con1 . "</h3>"); 
            echo("<p>" . $dec1 . "</p>"); ?>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <?php echo("<h3 class='card-title'>" . $con2 . "</h3>");
            echo("<p>" . $dec1 . "</p>"); ?>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <?php echo("<h3 class='card-title'>" . $con3 . "</h3>");
            echo("<p>" . $dec1 . "</p>"); ?>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/about_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <?php echo("<h3 class='h3 mb-4 text-black'>" . $title4 . "</h3>");
              echo("<p>" . $dec1 . "</p>"); ?>
              
            </div>
              
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <?php echo("<li>" . $dec2 . "</li>"); ?>
                <?php echo("<li>" . $dec3 . "</li>"); ?>
                <?php echo("<li>" . $dec4 . "</li>"); ?>
              </ul>
              
            </div>

            <div class="mb-4">
              <form action="#">
                <div class="form-group d-flex align-items-center">
                  <input type="text" class="form-control mr-2" placeholder="Enter your email">
                  <input type="submit" class="btn btn-primary" value="Submit Email">
                </div>
              </form>
            </div>

            
            
          </div>
        </div>
      </div>
    </div>

    <?php include("variable2.php");  ?>
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <?php echo("<h2 class='section-title mb-3' data-aos='fade-up' data-aos-delay=''>" . $title1 . "</h2>");
            echo("<p class='lead' data-aos='fade-up' data-aos-delay='100'>" . $subtitle1 . "</p>");?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/hero_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <?php echo("<h3 class='text-black mb-4'>" . $con1 . "</h3>");

            echo("<p>" . $dec1 . "</p>"); 

            echo("<p>" . $dec2 . "</p>"); ?>
            
          </div>
        </div>    
        
      </div>  
    </div>

    
    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <?php echo("<h2 class='section-title mb-3' data-aos='fade-up' data-aos-delay=''>" . $con2 . "</h2>");
            echo("<p class='lead' data-aos='fade-up' data-aos-delay='100'>" . $dec2 . "</p>"); ?>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_5.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
               <?php  echo("<h3>" . $name1 . "</h3>");
                echo("<span class='position'>" . $post1 . "</span>"); ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_6.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name2 . "</h3>");
                echo("<span class='position'>" . $post2 . "</span>"); ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_7.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name3 . "</h3>");
                echo("<span class='position'>" . $post3 . "</span>");  ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_8.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name4 . "</h3>");
                echo("<span class='position'>" . $post3 . "</span>"); ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name1 . "</h3>");
                echo("<span class='position'>" . $post3 . "</span>"); ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name2 . "</h3>");
                echo("<span class='position'>" . $post4 . "</span>"); ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name3 . "</h3>");
                echo("<span class='position'>" . $post4 . "</span>");  ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <?php echo("<h3>" . $name4 . "</h3>");
                echo("<span class='position'>" . $post4 . "</span>"); ?>
              </div>
            </div>
          </div>


          
        </div>
      </div>
    </section>

    <section class="site-section" id="gallery-section" data-aos="fade">
      

      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center">
            <?php  include("variable3.php");
            echo("<h2 class='section-title mb-3'>" . $title1 . "</h2>"); ?>
          </div>
        </div>

        <div class="row justify-content-center mb-5">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".web">Events</button>
            <button class="btn btn-primary" data-filter=".design">Party</button>
            <button class="btn btn-primary" data-filter=".brand">Holidays</button>
          </div>
        </div>  
        
        <div id="posts" class="row no-gutter">
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_3.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

            <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_4.jpg">
            </a>

          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_3.jpg">
            </a>
          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_4.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          
        </div>
      </div>

    </section>


    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <?php echo("<h2 class='section-title mb-3' data-aos='fade-up' data-aos-delay=''>" . $title2 . "</h2>");
            echo("<p class='lead' data-aos='fade-up' data-aos-delay='100'>" . $dec1 . "</p>"); ?>
          </div>
        </div>
        
        <div class="row align-items-lg-center" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <?php echo("<h2 class='section-title mb-3'>" . $con1 . "</h2>");
                echo("<p>" . $dec2 . "</p>"); ?>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <?php echo("<h2 class='section-title mb-3'>" . $con2 . "</h2>");
                echo("<p>" . $dec2 . "</p>"); ?>
                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <?php echo("<h2 class='section-title mb-3'>" . $con3 . "</h2>");
                echo("<p>" . $dec2 . "</p>"); ?>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <?php include("variable4.php");
            echo("<h2 class='section-title mb-3'>" . $title1 . "</h2>"); ?>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <?php echo("<h3>" . $con1 . "</h3>");
                echo("<p>" . $dec1 . "</p>"); ?>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <?php echo("<h3>" . $con2 . "</h3>");
                echo("<p>" . $dec1 . "</p>"); ?>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/002-rich.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
               <?php echo("<h3>" . $con3 . "</h3>");
                echo("<p>" . $dec1 . "</p>"); ?>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/003-notes.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
               <?php  echo("<h3>" . $con4 . "</h3>");
                echo("<p>" . $dec1 . "</p>"); ?>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <?php echo("<h3>" . $con5 . "</h3>");
                echo("<p>" . $dec1 . "</p>"); ?>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/005-megaphone.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <?php echo("<h3>" . $con6 . "</h3>");
                echo("<p>" . $dec1 . "</p>"); ?>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <?php include("variable5.php");
            echo("<h2 class='section-title mb-3'>" . $title1 . "</h2>"); ?>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <?php echo("<p>&ldquo;" . $dec1 . "&rdquo;</p>"); ?>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
               <?php echo("<p>" . $con1 . "</p>"); ?>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <?php echo("<p>&ldquo;" . $dec2 . "&rdquo;</p>"); ?>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <?php echo("<p>" . $con1 . "</p>");   ?>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <?php echo("<p>&ldquo;" . $dec3 . "&rdquo;</p>"); ?>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <?php echo("<p>" . $con2 . "</p>"); ?>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <?php echo("<p>&ldquo;" . $dec4 . "&rdquo;</p>"); ?>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <?php echo("<p>" . $con3 . "</p>"); ?>
              </figure>

            </div>
          </div>

        </div>
    </section>

    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <?php include("variable6.php");
            echo("<h2 class='section-title mb-3'>" . $title1 . "</h2>"); ?>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <?php echo("<h3 class='text-center text-black'>" . $con1 . "</h3>"); ?>
              <div class="price text-center mb-4 ">
                <span><span>$47</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
               <?php echo("<li>" . $dec1 . "</li>"); ?>
                <?php echo("<li>" . $dec2 . "</li>"); ?>
                <?php echo("<li class='remove'>" . $dec3 . "</li>"); ?>
                <?php echo("<li class='remove'>" . $dec4 . "</li>"); ?>
                <?php echo("<li class='remove'>" . $dec5 . "</li>"); ?>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <?php echo("<h3 class='text-center text-black'>" . $con2 . "</h3>"); ?>
              <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <?php echo("<li>" . $dec1 . "</li>"); ?>
                <?php echo("<li>" . $dec2 . "</li>"); ?>
                <?php echo("<li>" . $dec3 . "</li>"); ?>
                <?php echo("<li>" . $dec4 . "</li>"); ?>
                <?php echo("<li class='remove'>" . $dec5 . "</li>"); ?>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <?php echo("<h3 class='text-center text-black'>" . $con3 . "</h3>");  ?>
              <div class="price text-center mb-4 ">
                <span><span>$750</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <?php echo("<li>" . $dec1 . "</li>"); ?>
                <?php echo("<li>" . $dec2 . "</li>"); ?>
                <?php echo("<li>" . $dec3 . "</li>"); ?>
                <?php echo("<li>" . $dec4 . "</li>"); ?>
                <?php echo("<li>" . $dec5 . "</li>"); ?>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <?php include("variable7.php");
            echo("<h2 class='section-title'>" . $title1 . "</h2>"); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <?php echo("<h3 class='text-black h4 mb-4'>" . $con1 . "</h3>"); 
            echo("<p>" . $dec1 . "</p>"); ?>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php echo("<h3 class='text-black h4 mb-4'>" . $con2 . "</h3>");
              echo("<p>" . $dec1 . "</p>"); ?>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <?php echo("<h3 class='text-black h4 mb-4'>" . $con1 . "</h3>");
            echo("<p>" . $dec1 . "</p>");  ?>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php echo("<h3 class='text-black h4 mb-4'>" . $con2 . "</h3>");
              echo("<p>" . $dec1 . "</p>"); ?>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php echo("<h3 class='text-black h4 mb-4'>" . $con3 . "</h3>"); 
              echo("<p>" . $dec2 . "</p>"); ?>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php echo("<h3 class='text-black h4 mb-4'>" . $con4 . "</h3>");
              echo("<p>" . $dec1 . "</p>"); ?>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <?php echo("<h3 class='text-black h4 mb-4'>" . $con1 . "</h3>");
             echo("<p>" . $dec1 . "</p>"); ?>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <?php echo("<h3 class='text-black h4 mb-4'>" . $con2 . "</h3>"); 
              echo("<p>" . $dec1 . "</p>"); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="about-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/hero_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            

            <div class="row">

              
              
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                  <div>
                   <?php  echo("<h3>" . $con5 . "</h3>");
                    echo("<p>" . $dec3 . "</p>"); ?>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                  <div>
                    <?php echo("<h3>" . $con6 . "</h3>");
                    echo("<p>" . $dec4 . "</p>"); ?>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <?php include("variable8.php");
            echo("<h2 class='section-title mb-3'>" . $title1 . "</h2>"); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
             <?php echo("<h2 class='font-size-regular'><a href='#'>" . $con1 . "</a></h2>");  ?>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <?php echo("<p>" . $dec1 . "</p>"); ?>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </a>
              <?php echo("<h2 class='font-size-regular'><a href='#'>" . $con1 . "</a></h2>"); ?>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <?php echo("<p>" . $dec1 . "</p>"); ?>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <?php echo("<h2 class='font-size-regular'><a href='#'>" . $con1 . "</a></h2>"); ?>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
             <?php echo("<p>" . $dec1 . "</p>");  ?>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <?php include("variable9.php");
            echo("<h2 class='section-title mb-3'>" . $title . "</h2>"); ?>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-primary"></span>
              <?php echo("<span>" . $add . "</span>"); ?>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <?php echo("<a href='#'>" . $no . "</a>"); ?>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-primary"></span>
              <?php echo("<a href='#'>" . $id . "</a>"); ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    
    <?php include("F.php"); ?>
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
  </body>
</html>