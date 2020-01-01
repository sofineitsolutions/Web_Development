<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Landing Page</title>
		
		<!-- Bootstrap -->
		<link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		<!-- CUSTOM CSS -->
		<link href="../css/landing-page.css" rel="stylesheet">
		<!-- FAVICON -->
		<link href="../img/favicon.png" rel="shortcut icon">
		<link href="../https://fonts.googleapis.com/css?family=Playfair+Display|Poppins:300,400,500" rel="stylesheet">
	</head>
	<body class="body-wrapper">
		<?php include("../header.php"); ?>
                <?php include("cont4.php"); ?>


		<!--=========================================
		=            Landing Page Slider            =
		==========================================-->
		<section class="section landing-banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- Heading -->
						<h1><?php echo($h1);  ?>
						<br><?php echo($h2); ?></h1>
						<!-- Description -->
						<p><?php echo($des); ?></p>
						<img class="img-responsive" src="../images/landing-page/landing-components.png" alt="componet-image">
					</div>
				</div>
			</div>
		</section>
		<!--===========================
		=            Demos            =
		============================-->
		<section class="section demos bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="section-title">
							<h2><?php echo($h3); ?></h2>
						</div>
					</div>
					<!-- Demo -->
					<div class="col-md-6">
						<div class="block">
							<!-- Image -->
							<a href="#">
								<img src="../images/landing-page/template.png" alt="">
							</a>
							<!-- Title -->
							<div class="content">
								<h4><?php echo($image); ?></h4>
								<p><?php echo($image1); ?></p>
							</div>
						</div>
					</div>
					<!-- Demo -->
					<div class="col-md-6">
						<div class="block">
							<!-- Image -->
							<a href="#">
								<img src="../images/landing-page/template.png" alt="">
							</a>
							<!-- Title -->
							<div class="content">
								<h4><?php echo($image2); ?></h4>
								<p><?php echo($image3); ?></p>
							</div>
						</div>
					</div>
					<!-- Demo -->
					<div class="col-md-6">
						<div class="block">
							<!-- Image -->
							<a href="#">
								<img src="../images/landing-page/template.png" alt="">
							</a>
							<!-- Title -->
							<div class="content">
								<h4><?php echo($image4); ?></h4>
								<p><?php echo($image5); ?></p>
							</div>
						</div>
					</div>
					<!-- Demo -->
					<div class="col-md-6">
						<div class="block">
							<!-- Image -->
							<a href="#">
								<img src="../images/landing-page/template.png" alt="">
							</a>
							<!-- Title -->
							<div class="content">
								<h4><?php echo($image6); ?></h4>
								<p><?php echo($image7); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--==============================
		=            Elements            =
		===============================-->
		<section class="section elements">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section-title">
							<h2><?php echo($ele); ?></h2>
							<p><?php echo($ele1); ?></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-item">
							<i class="ion-ios-pie-outline"></i>
							<h4><?php echo($ele2); ?></h4>
							<p><?php echo($ele3); ?></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-item">
							<i class="ion-ios-pie-outline"></i>
							<<h4><?php echo($ele2); ?></h4>
							<p><?php echo($ele3); ?></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-item">
							<i class="ion-ios-pie-outline"></i>
							<h4><?php echo($ele2); ?></h4>
							<p><?php echo($ele3); ?></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="feature-item">
							<i class="ion-ios-pie-outline"></i>
							<h4><?php echo($ele2); ?></h4>
							<p><?php echo($ele3); ?></p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="section call-to-action-landing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2><?php echo($end1); ?>
						<br><?php echo($end2); ?></h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#" class="btn btn-blue"><?php echo($b1); ?></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-gray"><?php echo($b2); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
