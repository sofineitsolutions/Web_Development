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
    <?php include("variable4.php");
            include("h.php");?>
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
                        <?php echo "<h3>".$title."</h3>";
						 echo"<p>".$des."</p>";
						echo "<a class='main_btn' href='#'>".$button1."</a>";?>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                <?php echo  "<a href='../blog-details.html'><h5>".$social."</h5></a>";?>
                                    <div class="border_line"></div>
                               <?php echo"<p>".$social_life."</p>";?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                 <?php echo   "<a href='../blog-details.html'><h5>".$politics."</h5></a>";?>
                                    <div class="border_line"></div>
                                <?php echo "<p>".$part_politics."</p>";?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                 <?php echo "<a href='../blog-details.html'><h5>".$food."</h5></a>";?>
                                    <div class="border_line"></div>
                                 <?php echo "<p>".$food_finished."</p>";?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                         <?php echo "<a href='#'>".$food1."</a>";
                                         echo"<a class='active href='#>".$tech1."</a>";
                                           echo "<a href='#'>".$politics1."</a>";
                                           echo "<a href='#'>".$lifestyle1."</a>";?>
                                        </div>
                                        <ul class="blog_meta list">
                                        <?php echo "<li><a href='#'>".$name1."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$date1."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$views1."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$comments1."<i class='lnr lnr-bubble'></i></a></li>";?>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
                                        <div class="blog_details">
                                        <?php echo "<a href='../single-blog.html'><h2>".$blog1."</h2></a>";
                                           echo "<p>".$des1."</p>";
                                          echo "<a href='../single-blog.html' class='white_bg_btn'>".$view_more1."</a>";?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                        <?php echo "<a href='#'>".$food2."</a>";
                                         echo"<a class='active href='#>".$tech2."</a>";
                                           echo "<a href='#'>".$politics2."</a>";
                                           echo "<a href='#'>".$lifestyle2."</a>";?>
                                        </div>
                                        <ul class="blog_meta list">
                                        <?php echo "<li><a href='#'>".$name2."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$date2."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$views2."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$comments2."<i class='lnr lnr-bubble'></i></a></li>";?>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-2.jpg" alt="">
                                        <div class="blog_details">
                                        <?php echo "<a href='../single-blog.html'><h2>".$blog2."</h2></a>";
                                            echo "<p>".$des2."</p>";
                                          echo "<a href='../single-blog.html' class='white_bg_btn'>".$view_more2."</a>";?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                        <?php echo "<a href='#'>".$food3."</a>";
                                         echo"<a class='active href='#>".$tech3."</a>";
                                           echo "<a href='#'>".$politics3."</a>";
                                           echo "<a href='#'>".$lifestyle3."</a>";?>
                                        </div>
                                        <ul class="blog_meta list">
                                        <?php echo "<li><a href='#'>".$name3."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$date3."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$views3."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$comments3."<i class='lnr lnr-bubble'></i></a></li>";?>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-3.jpg" alt="">
                                        <div class="blog_details">
                                        <?php echo "<a href='../single-blog.html'><h2>".$blog3."</h2></a>";
                                            echo "<p>".$des3."</p>";
                                          echo "<a href='../single-blog.html' class='white_bg_btn'>".$view_more3."</a>";?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                        <?php echo "<a href='#'>".$food4."</a>";
                                         echo"<a class='active href='#>".$tech4."</a>";
                                           echo "<a href='#'>".$politics4."</a>";
                                           echo "<a href='#'>".$lifestyle4."</a>";?>
                                        </div>
                                        <ul class="blog_meta list">
                                        <?php echo "<li><a href='#'>".$name4."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$date4."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$views4."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$comments4."<i class='lnr lnr-bubble'></i></a></li>";?>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-4.jpg" alt="">
                                        <div class="blog_details">
                                        <?php echo "<a href='../single-blog.html'><h2>".$blog4."</h2></a>";
                                            echo "<p>".$des4."</p>";
                                          echo "<a href='../single-blog.html' class='white_bg_btn'>".$view_more4."</a>";?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                        <?php echo "<a href='#'>".$food5."</a>";
                                         echo"<a class='active href='#>".$tech5."</a>";
                                           echo "<a href='#'>".$politics5."</a>";
                                           echo "<a href='#'>".$lifestyle5."</a>";?>
                                        </div>
                                        <ul class="blog_meta list">
                                        <?php echo "<li><a href='#'>".$name5."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$date5."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$views5."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$comments5."<i class='lnr lnr-bubble'></i></a></li>";?>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-5.jpg" alt="">
                                        <div class="blog_details">
                                        <?php echo "<a href='../single-blog.html'><h2>".$blog5."</h2></a>";
                                            echo "<p>".$des5."</p>";
                                          echo "<a href='../single-blog.html' class='white_bg_btn'>".$view_more5."</a>";?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
                                    <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
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
                                <img class="author_img rounded-circle" src="../img/blog/author.png" alt="">
                               <?php echo "<h4>".$name6."</h4>";
                                echo "<p>".$prof."</p>";?>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <?php echo "<p>".$des6."</p>";?>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                    <a href="../blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                    <a href="../blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                    <a href="../blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                    <a href="../blog-details.html"><h3>Asteroids telescope</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="../img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                            <p>44</p>
                                        </a>
                                    </li>															
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                            <?php echo  "<h4 class='widget_title'>".$news."</h4>";
                                echo "<p>".$des7. "</p>";?>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>	
                                <p class="text-bottom">You can unsubscribe at any time</p>	
                                <div class="br"></div>							
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                              <?php echo "<h4 class='widget_title'>".$tag."</h4>";?>
                                <ul class="list">
                                   <?php echo "<li><a href='#'>".$tech6."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$fash."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$art."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$fash."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$food6."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$tech6."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$lifestyle6."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$art."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$adven."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$food6."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$lifestyle6."</a></li>";?>
                                    <?php echo "<li><a href='#'>".$adven."</a></li>";?>
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
        		<?php echo 	"<a class='btn theme_btn' href='#'>".$insta."</a>";?>
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
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>