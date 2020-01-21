<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Services</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<?php include("header.php"); ?>
	<?php include("variable3.php"); ?>
	<!-- End Header Area -->

	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<?php echo("<h1 class='text-white'>" . $title1 ."</h1>");
					echo("<p>" . $subtitle1 . "</p>"); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-section Area -->

	<!-- Start features Area -->
	<section class="features-area section-gap-top" id="news">
		<div class="container">
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<?php echo("<h4>" . $con1 . "</h4>");
						echo("<p>" . $dec1 . "</p>"); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<?php echo("<h4>" . $con2 . "</h4>");
						echo("<p>" . $dec2 . "</p>"); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<?php echo("<h4>"  . $con3 . "</h4>");
						echo("<p>" . $dec3 . "</p> "); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-beach"></i>
						<?php echo("<h4>" . $con4 . "</h4>");
						echo("<p>" . $dec4 . "</p>"); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End features Area -->

	<!-- Start Offer Area -->
	<section class="offer-area relative">
		<div class="container">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-8 offer-right">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-left mb-5">
								<?php echo("<h4>" . $title2 . "</h4>");
								echo("<h2>" . $subtitle2 . "</h2>"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="single-offer">
								<a href="#">
									<?php echo("<h4>" . $con5 . "</h4>"); ?>
								</a>
								<?php echo("<p>" . $dec5 . "</p>"); ?>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-offer">
								<a href="#">
									<?php echo("<h4>" . $con6 . "</h4>"); ?>
								</a>
								<?php echo("<p>" . $dec6 . "</p>"); ?>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-offer">
								<a href="#">
									<?php echo("<h4>" . $con7 . "</h4>"); ?>
								</a>
								<?php echo("<p>" . $dec7 . "</p>"); ?>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-offer">
								<a href="#">
									<?php echo("<h4>" . $con8 . "</h4>"); ?>
								</a>
								<?php echo("<p>" . $dec8 . "</p>"); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Offer Area -->

	<!-- start footer Area -->
	<?php include("footer.php"); ?>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/main.js"></script>
</body>

</html>