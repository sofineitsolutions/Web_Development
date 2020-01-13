<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <title>Flash Photography</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
    </head>
    <body>
    <?php include("variable3.php");
        include("../h.php");?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
						<?php echo	"<h2>".$project_details."</h2>";?>
							<div class="page_link">
							<?php echo	"<a href='../index.html'>".$home."</a>";?>
							<?php echo	"<a href='../projects.html'>".$projects."</a>";?>
							<?php echo	"<a href='../project-details.html'>".$project_details1."</a>";?>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Portfolio Details Area =================-->
        <section class="portfolio_details_area p_120">
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-6">
							<div class="left_img">
								<img class="img-fluid" src="../img/project-details-1.jpg" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="portfolio_right_text">
							<?php echo	"<h4>".$colorlib_name."</h4>";
							echo "<p>".$des1."</p>";?>
								<ul class="list">
								<?php echo	"<li><span>".$rating."</span>: <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'>";?>
                                   </i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
								<?php echo "<li><span>".$client."</span>:  colorlib</li>";?>
								<?php echo	"<li><span>".$website."</span>:  colorlib.com</li>";?>
								<?php echo	"<li><span>".$completed."</span>:  17 Aug 2018</li>";?>
								</ul>
								<ul class="list social_details">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				   <?php echo"<p>".$des2."</p>";?>
       				<?php echo "<p>".$des3."</p>";?>
        		</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->
        
        <!--================Instagram Area =================-->
        <section class="instagram_area">
        	<div class="container box_1620">
        		<div class="insta_btn">
        		<?php echo	"<a class='btn theme_btn' href='#'>".$insta."</a>";?>
        		</div>
        		<div class="instagram_image row m0">
        			<a href="#"><img src="../img/instagram/ins-1.jpg" alt=""></a>
        			<a href="#"><img src="../img/instagram/ins-2.jpg" alt=""></a>
        			<a href="#"><img src="../img/instagram/ins-3.jpg" alt=""></a>
        			<a href="#"><img src="../img/instagram/ins-4.jpg" alt=""></a>
        			<a href="#"><img src="../img/instagram/ins-5.jpg" alt=""></a>
        			<a href="#"><img src="../img/instagram/ins-6.jpg" alt=""></a>
        		</div>
        	</div>
        </section>
        <!--================End Instagram Area =================--> 
      <?php include("../f.php");?> 
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/stellar.js"></script>
        <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="../vendors/counter-up/jquery.counterup.js"></script>
        <script src="../js/mail-script.js"></script>
        <script src="../js/theme.js"></script>
    </body>
</html>