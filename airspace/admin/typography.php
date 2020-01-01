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
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="../plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="../plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="../plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body id="body">
<?php include("../header.php"); ?>
<?php include("variable7.php"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
				<?php echo("<h1 class='page-name'>$title</h1>"); ?>
					<ol class='breadcrumb'>
					<?php echo("<li><a href='#'>$dir</a></li>
						<li class='active'>$dir1</li>");  ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="typography page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center"><?php echo($heading); ?></h1>
				<hr>
				<h1><?php echo($tag1); ?></h1>
				<h2><?php echo($tag2); ?></h2>
				<h3><?php echo($tag3); ?></h3>
				<h4><?php echo($tag4); ?></h4>
				<h5><?php echo($tag5); ?></h5>
				<h6><?php echo($tag6); ?></h6>
				<h1 class="text-center mt-20"><?php echo($heading1); ?></h1>
				<hr>
				<p><?php echo($para); ?></p>
				<h1 class="text-center mt-20"><?php echo($heading2); ?></h1>
				<hr>
				<BLOCKQUOTE>
					<?php echo($blog); ?>
				</BLOCKQUOTE>
				
			</div>
		</div>
	</div>
</section>

<?php include("../footer.php"); ?>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- <script src="js/jquery.counterup.js"></script> -->
    
    <!-- Main jQuery -->
   
    <script src="../https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="../plugins/slick-carousel/slick/slick.min.js"></script>
    <!--  -->
    <script src="../plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Mixit Up JS -->
    <script src="../plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- <script src="plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->
    <script src="../plugins/SyoTimer/build/jquery.syotimer.min.js"></script>


    <!-- Form Validator -->
    <script src="../http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="../http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>


    
    <!-- Google Map -->
    <script src="../plugins/google-map/map.js"></script>
    <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

    <script src="../js/script.js"></script>
    



  </body>
  </html>
