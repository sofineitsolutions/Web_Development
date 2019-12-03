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
<?php include("variable4.php"); ?>

<section class="alerts section">
	<div class="container">
		<div class="row">
			<div class="section-title text-center">
				<h2><?php echo($tit);  ?></h2>
			</div>
		</div>
		<div class="row mt-30">
			<div class="col-xs-12">
	            <div class="alertPart">
		            <div class="alert alert-success alert-common" role="alert"><i class="tf-ion-thumbsup"></i><span>Well done!</span> <?php echo($msg1); ?></div>
		            <div class="alert alert-info alert-common" role="alert"><i class="tf-ion-android-checkbox-outline"></i><span>Warning!</span> <?php echo($msg2);  ?></div>
		            <div class="alert alert-warning alert-common" role="alert"><i class="tf-ion-alert-circled"></i><span>Warning!</span> <?php echo($msg3); ?></div>
		            <div class="alert alert-danger alert-common" role="alert"><i class="tf-ion-close-circled"></i><span>Warning!</span> <?php echo($msg4); ?></div>
	            </div>
	            <div class="alertPart mt-50">
		            <div class="alert alert-success alert-common alert-solid" role="alert"><i class="tf-ion-thumbsup"></i><span>Well done!</span> <?php echo($msg5); ?></div>
		            <div class="alert alert-info alert-common alert-solid" role="alert"><i class="tf-ion-android-checkbox-outline"></i><span>Warning!</span> <?php echo($msg6);  ?></div>
		            <div class="alert alert-warning alert-common alert-solid" role="alert"><i class="tf-ion-alert-circled"></i><span>Warning!</span> <?php echo($msg7); ?></div>
		            <div class="alert alert-danger alert-common alert-solid" role="alert"><i class="tf-ion-close-circled"></i><span>Warning!</span> <?php echo($msg8); ?></div>
	            </div>
	            <div class="alertPart mt-50">
		            <div class="alert alert-success alert-common alert-dismissible " role="alert">
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            	<i class="tf-ion-thumbsup"></i><span>Well done!</span> <?php echo($msg9); ?>
		            </div>
		            <div class="alert alert-info alert-common alert-dismissible" role="alert">
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            	<i class="tf-ion-android-checkbox-outline"></i><span>Warning!</span> <?php echo($msg10); ?>
		            </div>
		            <div class="alert alert-warning alert-common alert-dismissible" role="alert">
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            	<i class="tf-ion-alert-circled"></i><span>Warning!</span> <?php echo($msg11); ?>
		            </div>
		            <div class="alert alert-danger alert-common alert-dismissible" role="alert">
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            	<i class="tf-ion-close-circled"></i><span>Warning!</span> <?php echo($msg12); ?>
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
