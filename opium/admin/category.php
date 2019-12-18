<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <title>Opium Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
    </head>
    <body>
        
        <?php include("../header.php"); ?>
         <?php include("variable3.php"); ?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
        	<div class="container">
				<div class="row banner_inner">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="banner_content text-center">
							<h2>Category Page</h2>
							<div class="page_link">
								<a href="../index.html">Home</a>
								<a href="../category.html">Category</a>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Home Banner Area =================-->
        
         <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="blog_style1">
                                <div class="blog_img">
                                    <img class="img-fluid" src="../img/home-blog/blog-1.jpg" alt="">
                                </div>
                                <div class="blog_text">
                                    <div class="blog_text_inner">
                                        <div class="cat">
                                            <?php echo("<a class='cat_btn' href='#'>$blog</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag</h4></a>"); ?>
                                        <?php echo("<p>$blog_des</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                    </div>
                                </div>
                            </article>
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="blog_style1 small">
                                        <div class="blog_img">
                                            <img class="img-fluid" src="../img/home-blog/blog-small-1.jpg" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <div class="blog_text_inner">
                                                <div class="cat">
                                                    <?php echo("<a class='cat_btn' href='#'>$blog1</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date1</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no1</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag1</h4></a>"); ?>
                                        <?php echo("<p>$blog_des1</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6">
                                    <article class="blog_style1 small">
                                        <div class="blog_img">
                                            <img class="img-fluid" src="../img/home-blog/blog-small-2.jpg" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <div class="blog_text_inner">
                                                <div class="cat">
                                                    <?php echo("<a class='cat_btn' href='#'>$blog2</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date2</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no2</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag2</h4></a>"); ?>
                                        <?php echo("<p>$blog_des2</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <article class="blog_style1">
                                <div class="blog_img">
                                    <img class="img-fluid" src="../img/home-blog/blog-2.jpg" alt="">
                                </div>
                                <div class="blog_text">
                                    <div class="blog_text_inner">
                                        <div class="cat">
                                            <?php echo("<a class='cat_btn' href='#'>$blog3</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date3</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no3</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag3</h4></a>"); ?>
                                        <?php echo("<p>$blog_des3</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                    </div>
                                </div>
                            </article>
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="blog_style1 small">
                                        <div class="blog_img">
                                            <img class="img-fluid" src="../img/home-blog/blog-small-3.jpg" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <div class="blog_text_inner">
                                                <div class="cat">
                                                    <?php echo("<a class='cat_btn' href='#'>$blog4</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date4</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no4</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag4</h4></a>"); ?>
                                        <?php echo("<p>$blog_des4</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6">
                                    <article class="blog_style1 small">
                                        <div class="blog_img">
                                            <img class="img-fluid" src="../img/home-blog/blog-small-4.jpg" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <div class="blog_text_inner">
                                                <div class="cat">
                                                    <?php echo("<a class='cat_btn' href='#'>$blog5</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date5</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no5</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag5</h4></a>"); ?>
                                        <?php echo("<p>$blog_des5</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="blog_style1 small">
                                        <div class="blog_img">
                                            <img class="img-fluid" src="../img/home-blog/blog-small-5.jpg" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <div class="blog_text_inner">
                                                <div class="cat">
                                                    <?php echo("<a class='cat_btn' href='#'>$blog6</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date6</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no6</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag6</h4></a>"); ?>
                                        <?php echo("<p>$blog_des6</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6">
                                    <article class="blog_style1 small">
                                        <div class="blog_img">
                                            <img class="img-fluid" src="../img/home-blog/blog-small-6.jpg" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <div class="blog_text_inner">
                                                <div class="cat">
                                                    <?php echo("<a class='cat_btn' href='#'>$blog7</a>"); ?>
                                    <?php echo("<a href='#'><i class='fa fa-calendar' aria-hidden='true'></i>$blog_date7</a>"); ?>
                                            <?php echo("<a href='#'><i class='fa fa-comments-o' aria-hidden='true'></i>$blog_no7</a>"); ?>
                                        </div>
                                        <?php echo("<a href='#'><h4>$blog_tag7</h4></a>"); ?>
                                        <?php echo("<p>$blog_des7</p>"); ?>
                                        <a class="blog_btn" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
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
                                <img class="author_img img-fluid" src="../img/blog/author.png" alt="">
                           <?php echo("<h4>$bloger</h4>
                                <p>$post</p>
                                <p>$bloger_blog</p>"); ?>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
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
                                <div class="media post_item ">
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
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns"><i class="lnr lnr-arrow-right"></i></a>
                                </div>  
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
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
     <?php include("../footer.php"); ?>
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/stellar.js"></script>
        <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../vendors/isotope/isotope-min.js"></script>
        <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../vendors/jquery-ui/jquery-ui.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/mail-script.js"></script>
        <script src="../js/theme.js"></script>
    </body>
</html>