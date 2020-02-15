<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Portfolio:Nilesh Rane</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="../stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="../stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="../stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <style>
#more {display: none;}
</style>
<?php include("variable1.php");
include("header.php");
include("footer.php");?>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <?php echo	"<h1 id='colorlib-logo'><a href='index.php'><span class='img' style='background-image: url(../images/nauthor.jpg);'></span>"
        .$Name."</a></h1>";?>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                <?php echo	"<li class='colorlib-active'><a href='index.php'>".$Home."</a></li>";
				 echo"<li><a href='collection.php'>".$Collection."</a></li>";
				 echo"<li><a href='about.php'>".$About."</a></li>";
				 echo"<li><a href='services.php'>".$Services."</a></li>";?>
				 <?php echo"<li><a href='blog.php'>".$Blog."</a></li>";?>
				 <?php echo"<li><a href='contact.php'>".$Contact."</a></li>";
				 ?>
				</ul>
			</nav>
			<div class="colorlib-footer">
			<!-- <?php echo	"<h3>".$h."</h3>";?> -->
				<div class="d-flex justify-content-center">
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex align-items-center js-fullheight">
						<div class="author-image text img d-flex">
							<section class="home-slider js-fullheight owl-carousel">
					      <div class="slider-item js-fullheight" style="background-image: url(../images/nauthor.jpg);">
					      </div>
					      <div class="slider-item js-fullheight" style="background-image:url(../images/nauthor1.jpg);">
					      </div>
						  <div class="slider-item js-fullheight" style="background-image:url(../images/nauthor2.png);">
					      </div>
					    </section>
						</div>
						<div class="author-info text p-3 p-md-5">
							<div class="desc">
							<?php echo	"<span class='subheading'>".$title1."</span>";
							echo"<h1 class='big-letter'>".$Name."</h1>";
							echo"<h1 class='mb-4'><span>".$Name."</span>" .$title2. "<span>".$title3."</span></h1>";?>
							<?php echo "<p class='mb-4'>".$des."<span id='dots'>...</span><span id='more'>".$des1."</span></p><button onclick='myFunction()'id='myBtn'>".$read."</button>";?>
							<script>
							function myFunction() {
							var dots = document.getElementById("dots");
							var moreText = document.getElementById("more");
							var btnText = document.getElementById("myBtn");

							if (dots.style.display === "none") {
								dots.style.display = "inline";
								btnText.innerHTML = "Read more"; 
								moreText.style.display = "none";
							} else {
								dots.style.display = "none";
								btnText.innerHTML = "Read less"; 
								moreText.style.display = "inline";
							}
							}
							</script>
							<!-- <a class="blog_btn" href="#">Read More</a> -->
							<?php echo"<h3 class='signature h1'>".$Name."</h3>";?>
								<ul class="ftco-social mt-3">
								<?php echo	"<li class='ftco-animate'><a href='$twitter'><span class='icon-twitter'></span></a></li>";?>
		              <?php echo"<li class='ftco-animate'><a href='$facebook'><span class='icon-facebook'></span></a></li>";?>
		              <?php echo"<li class='ftco-animate'><a href='$instagram'><span class='icon-instagram'></span></a></li>";?>
		            </ul>
	            </div>
						</div>
					</div>
				</div>
			</section>
			<section class="ftco-section instagram">
				<div class="container">
					<div class="row justify-content-center mb-2 pb-3">
	          <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
	        <?php echo   "<h2 class='mb-4'>".$follow."</h2>";?>
	          </div>
	        </div>  
					<div class="row no-gutters">
		        <div class="col-sm-12 col-md ftco-animate">
		          <a href="../images/p1.jpg" class="insta-img image-popup" style="background-image: url(../images/p1.jpg);">
		            <div class="icon d-flex justify-content-center">
		              <span class="icon-instagram align-self-center"></span>
		            </div>
		          </a>
		        </div>
		        <div class="col-sm-12 col-md ftco-animate">
		          <a href="../images/p2.jpg" class="insta-img image-popup" style="background-image: url(../images/p2.jpg);">
		            <div class="icon d-flex justify-content-center">
		              <span class="icon-instagram align-self-center"></span>
		            </div>
		          </a>
		        </div>
		        <div class="col-sm-12 col-md ftco-animate">
		          <a href="../images/p3.jpg" class="insta-img image-popup" style="background-image: url(../images/p3.jpg);">
		            <div class="icon d-flex justify-content-center">
		              <span class="icon-instagram align-self-center"></span>
		            </div>
		          </a>
		        </div>
		        <div class="col-sm-12 col-md ftco-animate">
		          <a href="../images/p4.jpg" class="insta-img image-popup" style="background-image: url(../images/p4.jpg);">
		            <div class="icon d-flex justify-content-center">
		              <span class="icon-instagram align-self-center"></span>
		            </div>
		          </a>
		        </div>
		        <div class="col-sm-12 col-md ftco-animate">
		          <a href="../images/p5.jpg" class="insta-img image-popup" style="background-image: url(../images/p5.jpg);">
		            <div class="icon d-flex justify-content-center">
		              <span class="icon-instagram align-self-center"></span>
		            </div>
		          </a>
		        </div>
		      </div>
				</div>
			</section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	            <?php echo "<h2 class='ftco-heading-2'>".$footer1."</h2>";?>
	              <ul class="list-unstyled photo">
	                <li><a href="#" class="img" style="background-image: url(../images/p1.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(../images/p2.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(../images/p3.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(../images/p4.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(../images/p5.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(../images/p6.jpg);"></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	             <div class="ftco-footer-widget mb-4">
	            <?php echo  "<h2 class='ftco-heading-2'>".$achievement."</h2>";?>
	              <ul class="list-unstyled categories">
	            <?php echo "<li><a href='#'>".$date1. "<span>".$number1."</span></a></li>";
	             echo  "<li><a href='#'>".$date2. "<span>".$number2."</span></a></li>";
	             echo  "<li><a href='#'>".$date3. "<span>".$number3."</span></a></li>";
	              echo  "<li><a href='#'>".$date4. "<span>".$number4."</span></a></li>";
	              echo  "<li><a href='#'>".$date5. "<span>".$number5."</span></a></li>";?>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            <?php echo	"<h2 class='ftco-heading-2'>".$contact_me."</h2>";?>
	            	<div class="block-23 mb-3">
		              <ul>
                     <?php echo  "<li><span class='icon icon-map-marker'></span><span class='text'>".$addr."</span></li>";
		             echo  "<li><a href='#'><span class='icon icon-phone'></span><span class='text'>".$mobile."</span></a></li>";
		              echo  "<li><a href='#'><span class='icon icon-envelope'></span><span class='text'>".$mailid."</span></a></li>";?>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">

	        <?php echo "<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->"
  .$copyright."<script>document.write(new Date().getFullYear());</script>" .$reserved.
      "<i class='icon-heart' aria-hidden='true'></i>" .$developed. "<a href='https://colorlib.com' target='_blank'>".$name1."</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>";?>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>