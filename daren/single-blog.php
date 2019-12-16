<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>DarEn BLOG || BLOG</title>
   <link rel="icon" href="img/favicon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- animate CSS -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- owl carousel CSS -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- themify CSS -->
   <link rel="stylesheet" href="css/themify-icons.css">
   <!-- flaticon CSS -->
   <link rel="stylesheet" href="css/liner_icon.css">
   <link rel="stylesheet" href="css/search.css">
   <!-- swiper CSS -->
   <link rel="stylesheet" href="css/slick.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include("variable3.php");
        include("h.php");?>
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h2>Blog Single</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area all_post section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                    <?php echo "<h2>".$title1."</h2>";?>
                     <ul class="blog-info-link mt-3 mb-4">
                     <?php echo "<li><a href='#'><i class='far fa-user'></i>".$Travel_Lifestyle."</a></li>";
                      echo "<li><a href='#'><i class='far fa-comments'></i>".$Comment."</a></li>"?>
                     </ul>
                     <?php echo"<p class='excert'>".$des1."</p>";
                      echo"<p class='excert'>".$des2."</p>";?>
                     <div class="quote-wrapper">
                      <?php echo"<div class='quotes'>".$des3."</div>";?>
                     </div>
                     <?php echo "<li><a href='#'><i class='far fa-user'></i>".$des4."</a></li>";
                       echo "<li><a href='#'><i class='far fa-comments'></i>".$des5."</a></li>"?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                    <?php  echo "<p class='like-info'><span class='align-middle'><i class='far fa-heart'></i></span>".$like."</p>";?>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                            <?php echo "<p>".$Prev_Post."</p>";?>
                              <a href="#">
                              <?php echo "<h4>".$Prev_post1."</h4>";?>
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
                                 <span class="text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                        <?php echo "<h4>".$name."</h4>";?>
                        </a>
                        <?php echo"<p>".$des."</p>";?>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
               <?php echo "<h4>".$comments."</h4>";?>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                           <?php echo "<p class='comment'>".$comments1.
                              "</p>";?>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                 <?php echo "<h5><a href='#'>".$name1."</a></h5>";?>
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
                              <img src="img/comment/comment_2.png" alt="">
                           </div>
                           <div class="desc">
                           <?php echo "<p class='comment'>".$comments2."</p>";?>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                 <?php echo "<h5><a href='#'>".$name2."</a></h5>";?>
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
                              <img src="img/comment/comment_3.png" alt="">
                           </div>
                           <div class="desc">
                           <?php echo "<p class='comment'>".$comments3."</p>";?>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                 <?php echo "<h5><a href='#'>".$name3."</a></h5>";?>
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
                     <div class="load_btn">
                        <a href="#" class="btn_1">SUBMIT <i class="ti-angle-right"></i></a>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="sidebar_widget">
                  <div class="sidebar_tittle">
                     <h3>Search Objects</h3>
                  </div>
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
                  </form>
                  <div class="sidebar_tittle">
                     <h3>Popular Feeds</h3>
                  </div>
                  <div class="single_catagory_post post_2 single_border_bottom">
                     <div class="category_post_img">
                        <img src="img/sidebar/sidebar_1.png" alt="">
                     </div>
                     <div class="post_text_1 pr_30">
                     <?php echo "<p><span>".$name4."</span>" .$date4."</p>";?>
                     <?php echo "<a href='single-blog.html'><h3>".$ptitle1."</h3></a>";?>
                     </div>
                  </div>
                  <div class="single_catagory_post post_2 single_border_bottom">
                     <div class="category_post_img">
                        <img src="img/sidebar/sidebar_2.png" alt="">
                     </div>
                     <div class="post_text_1 pr_30">
                     <?php echo "<p><span>".$name5."</span>" .$date5."</p>";?>
                     <?php echo "<a href='single-blog.html'><h3>".$ptitle2."</h3></a>";?>>
                     </div>
                  </div>
                  <div class="single_catagory_post post_2">
                     <div class="category_post_img">
                        <img src="img/sidebar/sidebar_3.png" alt="">
                     </div>
                     <div class="post_text_1 pr_30">
                     <?php echo "<p><span>".$name6."</span>" .$date6."</p>";?>
                     <?php echo "<a href='single-blog.html'><h3>".$ptitle3."</h3></a>";?>
                     </div>
                  </div>
                  <div class="sidebar_tittle">
                     <h3>Categories</h3>
                  </div>
                  <div class="single_catagory_item category">
                     <ul class="list-unstyled">
                        <li><a href="single-blog.html">Culture (12)</a></li>
                        <li><a href="single-blog.html">Creative Design (15)</a></li>
                        <li><a href="single-blog.html">Illustration (25)</a></li>
                        <li><a href="single-blog.html">Production (16)</a></li>
                        <li><a href="single-blog.html">Mangement (10)</a></li>
                        <li><a href="single-blog.html">Branding (15)</a></li>
                     </ul>
                  </div>
                  <div class="sidebar_tittle">
                     <h3>Popular Tags</h3>
                  </div>
                  <div class="single_catagory_item tags">
                     <ul class="list-unstyled">
                        <li><a href="single-blog.html">Nature</a></li>
                        <li><a href="single-blog.html">business</a></li>
                        <li><a href="single-blog.html">tech</a></li>
                        <li><a href="single-blog.html">News</a></li>
                        <li><a href="single-blog.html">html</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

   <!-- footer part start-->
   <footer class="footer-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 col-sm-6">
               <div class="single-footer-widget footer_1">
                  <h4>About Me</h4>
                  <p>Do you want to be even more successful? Learn to love learning and growth.
                     The more effort you put into improving your skills, the bigger the payoff
                     you will get. Realize that things will be hard at first, but the rewards
                     will be worth it.</p>
               </div>
            </div>
            <div class="col-xl-4 col-sm-6">
               <div class="single-footer-widget footer_2">
                  <h4>Contact us</h4>
                  <div class="contact_info">
                     <span class="ti-home"></span>
                     <h5>Los angeles, United States</h5>
                     <p>659, Rocky beach bullevard, santa monica, Rocky beach, USA.</p>
                  </div>
                  <div class="contact_info">
                     <span class="ti-headphone-alt"></span>
                     <h5>+44 6532 986 652</h5>
                     <p>Mon to Fri 9am to 6 pm.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-sm-8">
               <div class="single-footer-widget footer_3">
                  <h4>Newsletter</h4>
                  <p>Stay updated with our latest trends The more effort you put into
                     improving your skills, the bigger the payoff you will get realize that things.</p>
                  <form action="#">
                     <div class="form-group">
                        <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder='Enter email address'
                              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                           <div class="input-group-append">
                              <button class="btn" type="button"><span class="lnr lnr-arrow-right"></span></button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="row align-items-center">
            <div class="col-lg-12">
               <div class="copyright_part_text text-center">
                  <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer part end-->

   <!-- jquery plugins here-->
   <!-- jquery -->
   <script src="js/jquery-1.12.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>