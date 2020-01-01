
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
    <?php include("variable4.php");
          include("h.php");?>
    <div class="slider-wrap">
      <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Foody News</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente et sed quasi.</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    <!-- END slider -->
    </div> 
    <section class="section bg-light pt-0 bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_1.jpg');"></a>
              <div class="text">
               <?php echo "<h3><a href='single.html'>".$news1."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>".$date1."</span> <br>";?>
                </p>
                <?php echo "<p>".$des1."</p>";?>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_2.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$news2."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>".$date2."</span> <br>";?>
                </p>
                <?php echo "<p>".$des2."</p>";?>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_3.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$news3."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>".$date3."</span> <br>";?>
                </p>
                <?php echo "<p>".$des3."</p>";?>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_4.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$news4."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>".$date4."</span> <br>";?>
                </p>
                <?php echo "<p>".$des4."</p>";?>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_5.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$news5."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>".$date5."</span> <br>";?>
                </p>
                <?php echo "<p>".$des5."</p>";?>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_2.jpg');"></a>
              <div class="text">
              <?php echo "<h3><a href='single.html'>".$news6."</a></h3>";?>
                <p class="sched-time">
                <?php echo "<span><span class='fa fa-calendar'></span>".$date6."</span> <br>";?>
                </p>
                <?php echo "<p>".$des6."</p>";?>
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5" data-aos="fade-up">
          <div class="col-12 text-center">
            <a href="#" class="p-3">1</a>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <span class="p-3">...</span>
            <a href="#" class="p-3">5</a>
          </div>
        </div>
      </div>
    </section>
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