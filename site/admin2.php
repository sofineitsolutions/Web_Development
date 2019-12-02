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


<?php include("cont.php"); ?>
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1><?php echo($tit13); ?></h1>
          <p><?php echo($des13); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <form id="contact-form"  action="insert1.php" method="POST">
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        
                         <div class="form-group">
                            <input name="tit" type="text" class="form-control" placeholder="Enter title">
                        </div>
                         <div class="form-group">
                            <input name="t1" type="text" class="form-control" placeholder="Heading">
                        </div>
                        <div class="form-group">
                            <input name="block1" type="text" class="form-control" placeholder="description1">
                        </div>
                        <div class="form-group">
                            <input name="t2" type="text" class="form-control" placeholder="Heading1">
                        </div>
                        <div class="form-group">
                            <input name="service1" type="text" class="form-control" placeholder="service`">
                        </div>
                        <div class="form-group">
                            <input name="t3" type="text" class="form-control" placeholder="Heading2">
                        </div>
                        <div class="form-group">
                            <input name="service2" type="text" class="form-control" placeholder="service1">
                        </div>
                        <div class="form-group">
                            <input name="t4" type="text" class="form-control" placeholder="Heading3">
                        </div>
                        <div class="form-group">
                            <input name="service3" type="text" class="form-control" placeholder="service2">
                        </div>
                        <div class="form-group">
                            <input name="cus_new" type="text" class="form-control" placeholder="Customer_heading">
                        </div>
                       <div class="form-group">
                            <input name="l1" type="text" class="form-control" placeholder="l1">
                        </div>
                        <div class="form-group">
                            <input name="service4" type="text" class="form-control" placeholder="service4">
                        </div>
                        <div class="form-group">
                            <input name="l2" type="text" class="form-control" placeholder="l2">
                        </div>
                        <div class="form-group">
                            <input name="service5" type="text" class="form-control" placeholder="service5">
                        </div>
                        <div class="form-group">
                            <input name="why" type="text" class="form-control" placeholder="why">
                        </div>
                         <div class="form-group">
                            <input name="service6" type="text" class="form-control" placeholder="service6">
                        </div>
                        <div class="form-group">
                            <input name="s1" type="text" class="form-control" placeholder="s1">
                        </div>
                        <div class="form-group">
                            <input name="s2" type="text" class="form-control" placeholder="s2">
                        </div>
                        <div class="form-group">
                            <input name="s3" type="text" class="form-control" placeholder="s3">
                        </div>
                        <div class="form-group">
                            <input name="s4" type="text" class="form-control" placeholder="s4">
                        </div>
                        <div class="form-group">
                            <input name="s5" type="text" class="form-control" placeholder="s5">
                        </div>
                        <div class="form-group">
                            <input name="s6" type="text" class="form-control" placeholder="s6">
                        </div>
                        <div class="form-group">
                            <input name="s7" type="text" class="form-control" placeholder="s7">
                        </div>
                        <div class="form-group">
                            <input name="s8" type="text" class="form-control" placeholder="s8">
                        </div>
                         <div class="form-group">
                            <input name="service6" type="text" class="form-control" placeholder="service6">
                        </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        
                            <button class="btn btn-default" type="submit" >Submit</button>
                   </div> 
                </div>
                <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
                 </div>
                </div>
            </form>
        </div>
       </div>

 
            
</section>

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
