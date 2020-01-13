<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="../width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="../image/png">
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
    <?php include("variable2.php");
            include("../h.php");?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
						<h2>Contact Us</h2>
							<div class="page_link">
								<a href="index.html">Home</a>
								<a href="contact.html">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <!-- <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div> -->
                <div class="row">
                    
                    <div class="col-lg-9">
                        <form class="row contact_form" action="insert2.php" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="projects" value="<?php echo $projects;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="home" value="<?php echo $home;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="projects1" value="<?php echo $projects1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="world1" value="<?php echo $world1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des1" value="<?php echo $des1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="button1" value="<?php echo $button1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="world2" value="<?php echo $world2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des2" value="<?php echo $des2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="button2" value="<?php echo $button2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="world3" value="<?php echo $world3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des3" value="<?php echo $des3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="button3" value="<?php echo $button3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="world4" value="<?php echo $world4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des4" value="<?php echo $des4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="button4" value="<?php echo $button4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="insta" value="<?php echo $insta;?>">
                                </div>
                                <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                                </div>
                                <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">update</button>
                                </div>
                            </form>
                         </div>
                    </div>
                </div>
         </section>
        <!--================Contact Area =================-->
        <!-- Modals error -->
        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
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
        <script src="../vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/mail-script.js"></script>
        <script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="../vendors/counter-up/jquery.counterup.js"></script>
        <!-- contact js -->
        <script src="../js/jquery.form.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/contact.js"></script>
        <!--gmaps Js-->
        <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="../js/gmaps.min.js"></script>
        <script src="../js/theme.js"></script>
    </body>
</html>