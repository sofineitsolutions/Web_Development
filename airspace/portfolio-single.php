<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">
  
  <meta name="author" content="Themefisher.com">

  <title>Airspace | Creative Agency Bootstrap template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<?php include("header.php"); ?>
<?php include("cont3.php"); ?>

<section class="portfolio-single-page section-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="portfolio-single-slider owl-carousel owl-theme">
          <div><img src="images/portfolio/portfolio-big-1.jpg"></div>
          <div><img src="images/portfolio/portfolio-big-2.jpg"></div>
          <div><img src="images/portfolio/portfolio-big-3.jpg"></div>
          <div><img src="images/portfolio/portfolio-big-4.jpg"></div>
          <div><img src="images/portfolio/portfolio-big-5.jpg"></div>
          <div><img src="images/portfolio/portfolio-big-6.jpg"></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="project-details mt-50">
          <h4>Project Details</h4>
          <ul>
            <li><span><i class="fa fa-shirtsinbulk "></i> Client</span><strong>Jannie Kelonsky</strong></li>
            <li><span><i class="fa fa-shield "></i> What We Did</span><strong>Website Redesign</strong></li>
            <li><span><i class="fa fa-ils "></i> Tools Used</span><strong>Photoshop,Illustrator</strong></li>
            <li><span><i class="icon-calendar3"></i>Completed on:</span> 17th March 2014</li>
            <li><span><i class="icon-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
            <li><span><i class="icon-link"></i>Client:</span> <a href="#">Google</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="project-content mt-50">
          <h2><?php echo($port);  ?></h2>
          <?php echo($port1);  ?>
          <iframe width="100%" height="400" src="https://www.youtube.com/embed/LKFuXETZUsI" frameborder="0" allowfullscreen></iframe>
          <p><?php echo($port2); ?></p>
        </div>
      </div>
      <div class="col-md-5">
        
      </div>
    </div>
    
  </div>
</section>
<section class="related-projects section-sm bg-gray">
  <div class="container">
    <div class="row">
      <div class="title">
        <h2><?php echo($port3); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="content">
          <img class="img-responsive" src="images/portfolio/portfolio-big-2.jpg">
          <div class="content">
            <h4><?php echo($port4); ?></h4>
            <p><?php echo($port5); ?></p>
            <a href="#" class="btn btn-small">View Case Study</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="content">
          <img class="img-responsive" src="images/portfolio/portfolio-big-3.jpg">
          <div class="content">
            <h4><?php echo($port6); ?></h4>
            <p><?php echo($port7); ?></p>
            <a href="#" class="btn btn-small">View Case Study</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include("footer.php"); ?>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- <script src="js/jquery.counterup.js"></script> -->
    
    <!-- Main jQuery -->
   
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!--  -->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Mixit Up JS -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- <script src="plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->
    <script src="plugins/SyoTimer/build/jquery.syotimer.min.js"></script>


    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>


    
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

    <script src="js/script.js"></script>
    



  </body>
  </html>
