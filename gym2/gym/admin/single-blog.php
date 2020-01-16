<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>gym</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
   <!-- Place favicon.ico in the root directory -->
   <!-- CSS here -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/owl.carousel.min.css">
   <link rel="stylesheet" href="../css/magnific-popup.css">
   <link rel="stylesheet" href="../css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/themify-icons.css">
   <link rel="stylesheet" href="../css/nice-select.css">
   <link rel="stylesheet" href="../css/flaticon.css">
   <link rel="stylesheet" href="../css/gijgo.css">
   <link rel="stylesheet" href="../css/animate.css">
   <link rel="stylesheet" href="../css/slicknav.css">
   <link rel="stylesheet" href="../css/style.css">
   <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
   <?php include("../h.php");
    include("variable4.php");?>
     <!-- bradcam_area -->
     <div class="bradcam_area">
             <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
                     <div class="container">
                         <div class="row align-items-center justify-content-center">
                             <div class="col-xl-12">
                                 <div class="bradcam_text text-center">
                                 <?php echo "<h3>".$title1."</h3>";?>
                                 </div>
                             </div>
                         </div>
                     </div>
               </div>
     </div>
     <!-- bradcam_area end -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="../img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <?php echo"<h2>".$des1."</h2>";?>
                     <ul class="blog-info-link mt-3 mb-4">
                      <?php echo"<li><a href='#'><i class='fa fa-user'></i>".$Travel_Lifestyle."</a></li>";?>
                      <?php echo  "<li><a href='#'><i class='fa fa-comments'></i>".$comments1."</a></li>";?>
                     </ul>
                    <?php echo "<p class='excert'>".$des2."</p>";?>
                    <?php echo "<p>".$des3."</p>";?>
                     <div class="quote-wrapper">
                     <?php echo "<div class='quotes'>".$des4."</div>";?>
                     </div>
                     <?php echo"<p>".$des5."</p>";?>
                     <?php echo"<p>".$des6."</p>";?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                    <?php echo"<p class='like-info'><span class='align-middle'><i class='fa fa-heart'></i></span>".$like."</p>";?>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="../img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                            <?php echo  "<p>".$Prev_Post."</p>";?>
                              <a href="#">
                              <?php echo "<h4>".$Prev_Post1."</h4>"?>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                           <?php echo "<p>".$Next_Post."</p>";?>
                              <a href="#">
                              <?php echo "<h4>".$Next_Post1."</h4>";?>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="../img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="../img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                        <?php echo"<h4>".$name1."</h4>";?>
                        </a>
                        <?php echo"<p>".$ndes1."</p>";?>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
               <?php echo"<h4>".$comments2."</h4>";?>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="../img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <?php echo"<p class='comment'>".$cdes1."</p>";?>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                    <?php echo "<a href='#'>".$cname1."</a>";?>
                                    </h5>
                                    <?php echo "<p class='date'>".$date1. "</p>";?>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="../img/comment/comment_2.png" alt="">
                           </div>
                           <div class="desc">
                           <?php echo"<p class='comment'>".$cdes2."</p>";?>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                    <?php echo "<a href='#'>".$cname2."</a>";?>
                                    </h5>
                                    <?php echo "<p class='date'>".$date2. "</p>";?>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="../img/comment/comment_3.png" alt="">
                           </div>
                           <div class="desc">
                           <?php echo"<p class='comment'>".$cdes3."</p>";?>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                    <?php echo "<a href='#'>".$cname3."</a>";?>
                                    </h5>
                                    <?php echo "<p class='date'>".$date3. "</p>";?>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Resaurant food</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="../img/post/post_1.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="../img/post/post_2.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="../img/post/post_3.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="../img/post/post_4.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                        <li>
                           <a href="#">project</a>
                        </li>
                        <li>
                           <a href="#">love</a>
                        </li>
                        <li>
                           <a href="#">technology</a>
                        </li>
                        <li>
                           <a href="#">travel</a>
                        </li>
                        <li>
                           <a href="#">restaurant</a>
                        </li>
                        <li>
                           <a href="#">life style</a>
                        </li>
                        <li>
                           <a href="#">design</a>
                        </li>
                        <li>
                           <a href="#">illustration</a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="../img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="../img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="../img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="../img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="../img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="../img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
<?php include("../f.php");?>
   <!-- JS here -->
   <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
   <script src="../js/vendor/jquery-1.12.4.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/owl.carousel.min.js"></script>
   <script src="../js/isotope.pkgd.min.js"></script>
   <script src="../js/ajax-form.js"></script>
   <script src="../js/waypoints.min.js"></script>
   <script src="../js/jquery.counterup.min.js"></script>
   <script src="../js/imagesloaded.pkgd.min.js"></script>
   <script src="../js/scrollIt.js"></script>
   <script src="../js/jquery.scrollUp.min.js"></script>
   <script src="../js/wow.min.js"></script>
   <script src="../js/nice-select.min.js"></script>
   <script src="../js/jquery.slicknav.min.js"></script>
   <script src="../js/jquery.magnific-popup.min.js"></script>
   <script src="../js/plugins.js"></script>
   <script src="../js/gijgo.min.js"></script>
   <!--contact js-->
   <script src="../js/contact.js"></script>
   <script src="../js/jquery.ajaxchimp.min.js"></script>
   <script src="../js/jquery.form.js"></script>
   <script src="../js/jquery.validate.min.js"></script>
   <script src="../js/mail-script.js"></script>
   <script src="../js/main.js"></script>
</body>
</html>