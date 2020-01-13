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
        
    <?php include("variable5.php");
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
                        <form class="row contact_form" action="insert5.php" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="blog_details1" value="<?php echo $blog_details1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="home" value="<?php echo $home;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="blog" value="<?php echo $blog;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="blog_details2" value="<?php echo $blog_details2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="blog_title" value="<?php echo $blog_title;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des1" value="<?php echo $des1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des2" value="<?php echo $des2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des3" value="<?php echo $des3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="food1" value="<?php echo $food1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="tech1" value="<?php echo $tech1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="politics" value="<?php echo $politics;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="lifestyle1" value="<?php echo $lifestyle1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="date" value="<?php echo $date;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="views" value="<?php echo $views;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="lifestyle1" value="<?php echo $lifestyle1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="blog_comments" value="<?php echo $blog_comments;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des4" value="<?php echo $des4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des5" value="<?php echo $des5;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des6" value="<?php echo $des6;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="prev_post" value="<?php echo $prev_post;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="post_name1" value="<?php echo $post_name1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="next_post" value="<?php echo $next_post;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="post_name2" value="<?php echo $post_name2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="comments" value="<?php echo $comments;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name1" value="<?php echo $name1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="date1" value="<?php echo $date1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="c_des1" value="<?php echo $c_des1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name2" value="<?php echo $name2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="date2" value="<?php echo $date2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="c_des2" value="<?php echo $c_des2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name3" value="<?php echo $name3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="date3" value="<?php echo $date3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="c_des3" value="<?php echo $c_des3;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name4"value="<?php echo $name4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="date4" value="<?php echo $date4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="c_des4" value="<?php echo $c_des4;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name5" value="<?php echo $name5;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="date5" value="<?php echo $date5;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="c_des5" value="<?php echo $c_des5;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name6" value="<?php echo $name6;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="prof" value="<?php echo $prof;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des7" value="<?php echo $des7;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="news" value="<?php echo $news;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des8" value="<?php echo $des8;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="tag" value="<?php echo $tag;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="tech2" value="<?php echo $tech2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="lifestyle2" value="<?php echo $lifestyle2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="fash1" value="<?php echo $fash1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="art1" value="<?php echo $art1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="food2" value="<?php echo $food2;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="arch1" value="<?php echo $arch1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="adven1" value="<?php echo $adven1;?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="insta" value="<?php echo $insta;?>">
                                </div>
                            </div>
                            
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Update</button>
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