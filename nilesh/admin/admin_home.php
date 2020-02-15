<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Portfolio:Nilesh Ran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="../https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="../https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="../https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

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
	<?php include("variable1.php");
	include("header.php");
	include("footer.php");?>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <?php echo	"<h1 id='colorlib-logo'><a href='../index.php'><span class='img' style='background-image: url(../images/nauthor.jpg);'></span>" .$Name."</a></h1>";?>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                <?php echo	"<li class='colorlib-active'><a href='home.php'>".$Home."</a></li>";
				//  echo"<li><a href='../collection.php'>".$c."</a></li>";
				 echo"<li><a href='about.php'>".$About."</a></li>";
				 echo"<li><a href='services.php'>".$Services."</a></li>";
				 echo"<li><a href='blog.php'>".$Blog."</a></li>";?>
				<!-- //  echo"<li><a href='../contact.php'>".$g."</a></li>";?> -->
				</ul>
			</nav>
			<div class="colorlib-footer">
			<!-- <?php echo	"<h3>".$h."</h3>";?> -->
				<div class="d-flex justify-content-center">
					<form action="#"  class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
			 <?php echo "<p class='breadcrumbs'><span class='mr-2'><a href='../index.php'>".$Home."</a></span> 
			 <span class='mr-2'><a href='../contact.php'>".$Contact."</a></span> </p>";?>
	            <h1 class="bread">Admin</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section contact-section">
	      <div class="container">
	       
	        <div class="row block-9">
	          <div class="col-md-6 d-flex">
	            <form action="insert1.php"  method="post" class="bg-light p-5 contact-form">
	              <div class="form-group">
	                <input type="text" class="form-control" name="Name" placeholder="Enter Your description ">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control"  name="title1" placeholder="Enter twitter link">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control"  name="title2" placeholder="Enter facebook link">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control"  name="title3" placeholder="Enter instagram link">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control" name="des" placeholder="Enter Your description ">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control"  name="des1" placeholder="Enter Your description ">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control"  name="read" placeholder="Enter Your description ">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control"  name="twitter" placeholder="Enter twitter link">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control"  name="facebook" placeholder="Enter facebook link">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control"  name="instagram" placeholder="Enter instagram link">
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control" name="follow" placeholder="Enter Your description ">
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
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