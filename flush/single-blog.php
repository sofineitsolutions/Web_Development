<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Flash Photography</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
    <?php include("variable.php");
            include("h.php");?>
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
						<?php echo "<h2>".$i1."</h2>";?>
							<div class="page_link">
							<?php echo	"<a href='index.html'>".$z."</a>";
							echo"<a href='blog.html'>".$i2."</a>";
							echo	"<a href='single-blog.html'>".$i1."</a>";?>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                    <?php echo "<a href='#'>".$mm."</a>";
                                         echo"<a class='active href='#>".$nn."</a>";
                                           echo "<a href='#'>".$oo."</a>";
                                           echo "<a href='#'>".$pp."</a>";?>
                                    </div>
                                    <ul class="blog_meta list">
                                    <?php echo "<li><a href='#'>".$qq."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$rr."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$ss."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$tt."<i class='lnr lnr-bubble'></i></a></li>";?>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                            <?php echo "<a href='single-blog.html'><h2>".$uu."</h2></a>";
                                           echo "<p>".$vv."</p>";
                            echo "<p>".$i3."</p>";
                            echo "<p>".$i3."</p>";?>
                            </div>
                            <div class="col-lg-12">
                            <?php echo "<div class='quotes'>".$i4."</div>";?>
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                    </div>	
                                    <div class="col-lg-12 mt-25">
                                    <?php echo "<p>".$i5."</p>";?>
                                    <?php echo "<p>".$i5."</p>";?>											
                                    </div>									
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                    <?php echo "<p>".$i6."</p>";
                                     echo "<a href='#'><h4>".$i7."</h4></a>";?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                     <<?php echo "<p>".$i8."</p>";
                                      echo"<a href='#'><h4>".$i9."</h4></a>";?>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>
                        <div class="comments-area">
                        <?php echo "<h4>".$i10."</h4>";?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$j1."</a></h5>";
                                         echo "<p class='date'>".$j2."</p>";
                                         echo "<p class='comment'>".$j3."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <?php echo "<a href='' class='btn-reply text-uppercase'>".$j4."</a>";?> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$j5."</a></h5>";
                                          echo "<p class='date'>".$j6. "</p>";
                                            echo "<p class='comment'>" .$j7."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    <?php echo "<a href='' class='btn-reply text-uppercase'>".$j4."</a>";?> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$j8."</a></h5>";
                                            echo "<p class='date'>".$j6. "</p>";
                                            echo "<p class='comment'>" .$j7."</p>";?>
                                       </div>
                                    </div>
                                    <div class="reply-btn">
                                    <?php echo "<a href='' class='btn-reply text-uppercase'>".$j4."</a>";?> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c4.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$j9."</a></h5>";
                                            echo "<p class='date'>".$j6. "</p>";
                                            echo "<p class='comment'>" .$j7."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    <?php echo "<a href='' class='btn-reply text-uppercase'>".$j4."</a>";?> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c5.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$j10."</a></h5>";
                                            echo "<p class='date'>".$j6. "</p>";
                                            echo "<p class='comment'>" .$j7."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    <?php echo "<a href='' class='btn-reply text-uppercase'>".$j4."</a>";?> 
                                    </div>
                                </div>
                            </div>	                                             				
                        </div>
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form>
                                <div class="form-group form-inline">
                                  <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                  </div>										
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                            <?php echo "<a href='#' class='primary-btn submit_btn'>".$k1."</a>";?>	
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <?php echo"<h4>".$k2."</h4>";
                            echo "<p>".$k3."</p>";?>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <?php echo "<p>".$k4."</p>";?>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                        <?php echo "<h3 class='widget_title'>".$k5."</h3>";?>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                    <?php echo "<a href='blog-details.html'><h3>".$b1."</h3></a>";
                                        echo "<p>".$b2."</p>";?>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                    <?php echo "<a href='blog-details.html'><h3>".$b3."</h3></a>";?>
                                        <?php echo "<p>".$b2."</p>";?>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                    <?php echo "<a href='blog-details.html'><h3>".$b4."</h3></a>";?>
                                    <?php echo "<p>".$b5."</p>";?>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                    <?php echo "<a href='blog-details.html'><h3>".$b6."</h3></a>";?>
                                    <?php echo "<p>".$b7."</p>";?>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                            <?php echo "<h4 class='widget_title'>".$b8."</h4>";?>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$b9."</p>";
                                            echo "<p>".$b10."</p>";?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$c1."</p>";
                                            echo "<p>".$c2."</p>";?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$c3."</p>";
                                            echo "<p>".$c4."</p>";?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$c5."</p>";
                                            echo "<p>".$c6."</p>";?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$c7."</p>";
                                            echo "<p>".$c8."</p>";?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$c9."</p>";
                                            echo "<p>".$c10."</p>";?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <?php echo "<p>".$d1."</p>";
                                            echo "<p>".$d2."</p>";?>
                                        </a>
                                    </li>															
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                            <?php echo  "<h4 class='widget_title'>".$d3."</h4>";
                                echo "<p>".$d4.
                                "</p>";?>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <?php echo "<a href='#' class='bbtns'>".$d5."</a>";?>
                                </div>	
                                <?php echo "<p class='text-bottom'>".$d6."</p>";?>	
                                <div class="br"></div>							
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                            <?php echo "<h4 class='widget_title'>".$d7."</h4>";?>
                                <ul class="list">
                                   <?php echo "<li><a href='#'>".$b9."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c3."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c9."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c3."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c7."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$b9."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c5."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$d1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c7."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$c1."</a></li>";?>
                                    <?php echo "<li><a href='#'>".$d1."</a></li>";?>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
        <!--================Instagram Area =================-->
        <section class="instagram_area">
        	<div class="container box_1620">
        		<div class="insta_btn">
                <?php echo 	"<a class='btn theme_btn' href='#'>".$p."</a>";?>
        		</div>
        		<div class="instagram_image row m0">
        			<a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a>
        			<a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a>
        		</div>
        	</div>
        </section>
        <!--================End Instagram Area =================-->
        
        <?php include("f.php");?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>