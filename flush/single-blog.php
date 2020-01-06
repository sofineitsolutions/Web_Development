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
						<?php echo "<h2>".$blog_details1."</h2>";?>
							<div class="page_link">
							<?php echo	"<a href='../index.html'>".$home."</a>";
							echo"<a href='../blog.html'>".$blog."</a>";
							echo	"<a href='../single-blog.html'>".$blog_details2."</a>";?>
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
                                    <img class="img-fluid" src="../img/blog/feature-img1.jpg" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                    <?php echo "<a href='#'>".$food1."</a>";
                                         echo"<a class='active href='#>".$tech1."</a>";
                                           echo "<a href='#'>".$politics."</a>";
                                           echo "<a href='#'>".$lifestyle1."</a>";?>
                                    </div>
                                    <ul class="blog_meta list">
                                    <?php echo "<li><a href='#'>".$name."<i class='lnr lnr-user'></i></a></li>";
                                        echo "<li><a href='#'>".$date."<i class='lnr lnr-calendar-full'></i></a></li>";
                                         echo "<li><a href='#'>".$views."<i class='lnr lnr-eye'></i></a></li>";
                                          echo "<li><a href='#'>".$blog_comments."<i class='lnr lnr-bubble'></i></a></li>";?>
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
                            <?php echo "<a href='../single-blog.html'><h2>".$blog_title."</h2></a>";
                                           echo "<p>".$des1."</p>";
                            echo "<p>".$des2."</p>";
                            echo "<p>".$des3."</p>";?>
                            </div>
                            <div class="col-lg-12">
                            <?php echo "<div class='quotes'>".$des4."</div>";?>
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-fluid" src="../img/blog/post-img1.jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../img/blog/post-img2.jpg" alt="">
                                    </div>	
                                    <div class="col-lg-12 mt-25">
                                    <?php echo "<p>".$des5."</p>";?>
                                    <?php echo "<p>".$des6."</p>";?>											
                                    </div>									
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="../img/blog/prev.jpg" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                    <?php echo "<p>".$prev_post."</p>";
                                     echo "<a href='#'><h4>".$post_name1."</h4></a>";?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                     <<?php echo "<p>".$next_post."</p>";
                                      echo"<a href='#'><h4>".$post_name2."</h4></a>";?>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="../img/blog/next.jpg" alt=""></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>
                        <div class="comments-area">
                        <?php echo "<h4>".$comments."</h4>";?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$name1."</a></h5>";
                                         echo "<p class='date'>".$date1."</p>";
                                         echo "<p class='comment'>".$c_des1."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$name2."</a></h5>";
                                          echo "<p class='date'>".$date2. "</p>";
                                            echo "<p class='comment'>" .$c_des2."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$name3."</a></h5>";
                                            echo "<p class='date'>".$date3. "</p>";
                                            echo "<p class='comment'>" .$c_des3."</p>";?>
                                       </div>
                                    </div>
                                    <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../img/blog/c4.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$name4."</a></h5>";
                                            echo "<p class='date'>".$date4. "</p>";
                                            echo "<p class='comment'>" .$c_des4."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../img/blog/c5.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                        <?php echo "<h5><a href='#'>".$name5."</a></h5>";
                                            echo "<p class='date'>".$date5. "</p>";
                                            echo "<p class='comment'>" .$c_des5."</p>";?>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a> 
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
                                <a href="#" class="primary-btn submit_btn">Post Comment</a>	
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
                                <img class="author_img rounded-circle" src="../img/blog/author.png" alt="">
                            <?php echo"<h4>".$name6."</h4>";
                            echo "<p>".$prof."</p>";?>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <?php echo "<p>".$des7."</p>";?>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="../img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="../blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="../img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="../blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="../img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="../blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="../img/blog/popular-post/post4.jpg" alt="post">
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
                                echo "<p>".$des8.
                                "</p>";?>
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
                                   <?php echo "<li><a href='#'>".$tech2."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$fash1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$arch1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$fash1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$food2."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$tech2."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$lifestyle2."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$art1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$adven1."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$food2."</a></li>";?>
                                     <?php echo "<li><a href='#'>".$lifestyle2."</a></li>";?>
                                    <?php echo "<li><a href='#'>".$adven1."</a></li>";?>
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
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="../js/mail-script.js"></script>
        <script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="../vendors/counter-up/jquery.counterup.js"></script>
        <script src="../js/theme.js"></script>
    </body>
</html>