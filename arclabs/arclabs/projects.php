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
	<title>Projects</title>

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
	<?php include("variable4.php"); ?>
	<!-- End Header Area -->

	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<?php echo("<h1 class='text-white'>" . $title1 . "</h1>");
					echo("<p>" . $subtitle1 . "</p>"); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-section Area -->

	<!-- Start Project Area -->
	<section class="project-area section-gap-top" id="project">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<?php echo("<h4>" . $title2 . "</h4>");
						echo("<h2>" . $subtitle2 . "</h2>"); ?>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="filters mb-5">
						<ul>
							<?php echo("<li class='active' data-filter='.all'>" . $con1 . "</li>"); ?>
							<?php echo("<li data-filter='.popular'>" . $con2 . "</li>"); ?>
							<?php echo("<li data-filter='.latest'>" . $con3 . "</li>"); ?>
							<?php echo("<li data-filter='.following'>"  .$con4 . "</li>"); ?>
							<?php echo("<li data-filter='.upcoming'>" . $con5 . "</li>"); ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="filters-content">
				<div class="row grid">
					<div class="col-lg-4 col-md-6 grid-sizer"></div>

					<div class="col-lg-4 col-md-6 grid-item all following" data-wow-delay="0s">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p1.png" alt="">
								</div>
								<div class="middle">
									<?php echo("<h4>" . $con6 . "</h4>"); 
									echo("<div class='cat'>" . $dec1 . "</div>"); ?>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-8 grid-item col-md-6 all upcoming latest">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p2.png" alt="">
								</div>
								<div class="middle">
									<?php echo("<h4>" . $con7 . "</h4>");
									echo("<div class='cat'>" . $dec2 . "</div>"); ?>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-8 grid-item col-md-6 all popular">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p3.png" alt="">
								</div>
								<div class="middle">
									<?php echo("<h4>" . $con8 . "</h4>");
									echo("<div class='cat'>" . $dec3 . "</div>"); ?>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 grid-item col-md-6 all latest following">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p4.png" alt="">
								</div>
								<div class="middle">
									<?php echo("<h4>" . $con9 . "</h4>");
									echo("<div class='cat'>" . $dec4 . "</div>"); ?>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Project Area -->

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