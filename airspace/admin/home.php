<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aviato E-Commerce Template</title>
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/home.css">
</head>
<body>
<?php include("cont2.php"); ?>
	<section class="hero-area overly">
		<div class="animated-bg"></div>
			<div class="block">
				<h1><?php echo($tit2); ?></h1>
				<p><?php echo($des2); ?></p>
				<a href="#" class="btn btn-main mt-30"><?php echo($button); ?></a>
		
			</div>
		<div id="mouse-scroll">
			<a data-scroll href="#templates">
				<div class="mouse"  >
					<div class="mouse-in"></div>
				</div>
			</a>
		</div>
	</section>

	<section class="template-list" id='templates'>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="template-item text-center">
						<span class="ticker"><?php echo($logo); ?></span>
						<a href="../template/blog.html">
							<img src="../images/home/template-previews/blog-dark.png" alt="" class="img-responsive">
						</a>
						<h4><?php echo($logo1); ?></h4>
						<p><?php echo($logo2); ?></p>
					</div>
				</div>
				
			</div>
		</div>
	</section>



	<section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><?php echo($fame1); ?></h2>
					<a href="../https://themefisher.com/contact" class="btn btn-buy-button"><?php echo($fame2); ?></a>
				</div>
			</div>
		</div>
	</section>
	


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<p>Design and Developed By <a href="../http://www.themefisher.com">Themefisher</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>



<script src="../plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>

<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>
