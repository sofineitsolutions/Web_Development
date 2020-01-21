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
	<title>About</title>

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
	<?php include("variable2.php"); ?>
	<!-- End Header Area -->

	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<?php echo("<h1 class='text-white'>" . $title1 . "</h1>");
					echo("<p>" . $subtitle1 . "</p>");  ?>
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
						echo("<p>" . $dec1 . "</p>");  ?>
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
						<?php echo("<h4>" . $con3 . "</h4>");
						echo("<p>" . $dec3 . "</p>"); ?>
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

	<!-- Start About Area -->
	<section class="about-area section-gap-bottom">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-7 col-md-12 about-left">
					<img class="img-fluid" src="img/about.png" alt="">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title text-left">
						<?php echo("<h4>" . $title2 . "</h4>");
						echo("<h2>" . $subtitle2 . "</h2>"); ?>
					</div>
					<div>
						<?php echo("<p>" . $dec5 . "</p>"); ?>
					</div>
					<a href="#" class="primary-btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start testimonial Area -->
	<section class="testimonial-area relative section-gap-top bg-white" id="testimonial">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<?php echo("<h4>" . $title3 . "</h4>"); 
						echo("<h2>" . $subtitle3 . "</h2>"); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-testimonial">
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t1.png" alt="">
						</div>
						<div class="desc">
							<?php echo("<p>" . $dec6 . "</p>");
							echo("<h4>" . $name1 . "</h4>"); ?>
							<div class="bottom">
								<?php echo("<p>" . $post1 . "</p>"); ?>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t2.png" alt="">
						</div>
						<div class="desc">
							<?php echo("<p>" . $dec7 . "</p>");
							echo("<h4>" . $name2 . "</h4>"); ?>
							<div class="bottom">
								<?php echo("<p>" . $post2 . "</p>"); ?>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t3.png" alt="">
						</div>
						<div class="desc">
							<?php echo("<p>" . $dec8 . "</p>");
							echo("<h4>" . $name3 . "</h4>"); ?>
							<div class="bottom">
								<?php echo("<p>" . $post3 . "</p>"); ?>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t2.png" alt="">
						</div>
						<div class="desc">
							<?php echo("<p>" . $dec9 . "</p>"); 
							echo("<h4>" . $name4 . "</h4>"); ?>
							<div class="bottom">
								<?php echo("<p>" . $post4 . "</p>"); ?>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t1.png" alt="">
						</div>
						<div class="desc">
							<?php echo("<p>" . $dec10 . "</p>");
							echo("<h4>" . $name5 . "</h4>");  ?>
							<div class="bottom">
								<?php echo("<p>" . $post5 . "</p>"); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->

	<!-- Start brands Area -->
	<section class="brands-area">
		<div class="container no-padding">
			<div class="brand-wrap section-gap">
				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brands/b1.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brands/b2.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brands/b3.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brands/b4.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brands/b5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End brands Area -->

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