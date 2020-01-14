<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Real_state || Home</title>
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
   <link rel="stylesheet" href="css/flaticon.css">
   <!-- magnific-popup CSS -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- font awesome CSS -->
   <link rel="stylesheet" href="fontawesome/css/all.min.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--::menu part start::-->
   <?php include("header.php"); ?>
   <!--::menu part end::-->
   <?php include("variable1.php"); ?>

   <!--::banner part start::-->
   <section class="banner_part">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 offset-lg-1 col-sm-8 offset-sm-2">
               <div class="banner_text aling-items-center">
                  <div class="banner_text_iner">
                     <?php echo("<h5>" . $title1 . "</h5>"); 
                     echo("<h2>" . $title2 . "</h2>"); 
                     echo("<p>" . $subtitle1 . "</p>"); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::banner part end::-->

   <!--::team part end::-->
   <section class="about_part section-padding">
      <div class="container">
         <div class="row">
            <div class="section_tittle">
               <?php echo("<h2><span></span>" . $title3 . "</h2>"); ?>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="about_img">
                  <img src="img/about.png" alt="">
               </div>
            </div>
            <div class="offset-lg-1 col-lg-5 col-sm-8 col-md-6">
               <div class="about_text">
                  <?php echo("<h2>" . $subtitle2 . "</h2>"); ?>
                  <?php echo("<p>" . $dec1 . "</p>"); ?>
                  <a href="#" class="btn_1">learn More</a>
                  <div class="about_part_counter">
                     <div class="single_counter">
                        <span class="counter">100</span>
                        <p>project</p>
                     </div>
                     <div class="single_counter">
                        <span class="counter">300</span>
                        <p>clients</p>
                     </div>
                     <div class="single_counter">
                        <span class="counter">150</span>
                        <p>member</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::team part end::-->

   <!--::project part start::-->
   <section class="portfolio_area pt_30 padding_bottom">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section_tittle">
                  <?php echo("<h2><span>" . $title4 . "</h2>"); ?>
               </div>
               <div class="portfolio-filter">
				<h2>Hello City We are <br>
				leader in <span>Projects .</span></h2>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li>
                        <a class="active" id="Architecture-tab" data-toggle="tab" href="#Architecture" role="tab"
                           aria-controls="Architecture" aria-selected="true">
                           Architecture
                        </a>
                     </li>
                     <li>
                        <a id="Interior-tab" data-toggle="tab" href="#Interior" role="tab" aria-controls="Interior"
                           aria-selected="false">
                           Interior
                        </a>
                     </li>
                     <li>
                        <a id="Exterior-tab" data-toggle="tab" href="#Exterior" role="tab" aria-controls="Exterior"
                           aria-selected="false">
                           Exterior
                        </a>
                     </li>
                     <li>
                        <a id="Landing-tab" data-toggle="tab" href="#Landing" role="tab" aria-controls="Landing"
                           aria-selected="false">
                           Drafting Landing
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="portfolio_item tab-content" id="myTabContent">
                  <div class="row align-items-center justify-content-between tab-pane fade show active"
                     id="Architecture" role="tabpanel" aria-labelledby="Architecture-tab">
                     <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="portfolio_box">
                           <a href="img/project-1.png" class="img-gal">
                              <div class="single_portfolio">
                                 <img class="img-fluid w-100" src="img/project-1.png" alt="">
                              </div>
                           </a>
                           <div class="short_info">
                              <p>Exclusive Project</p>
                              <h4><a href="#">Etiam tortor <br>
                                    aliquet habitant</a></h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-6">
                        <div class="row">
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-2.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-2.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                    <p>new Project</p>
                                    <h4><a href="#">Etiam tortor <br>
                                          aliquet habitant</a></h4>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-3.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                    <p>Exclusive Project</p>
                                    <h4><a href="#">Etiam tortor <br>
                                          aliquet habitant</a></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center justify-content-between tab-pane fade" id="Interior" role="tabpanel"
                     aria-labelledby="Interior-tab">
                     <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="portfolio_box">
                           <a href="img/project-2.png" class="img-gal">
                              <div class="single_portfolio">
                                 <img class="img-fluid w-100" src="img/project-2.png" alt="">
                              </div>
                           </a>
                           <div class="short_info">
                                 <p>new Project</p>
                                 <h4><a href="#">Etiam tortor <br>
                                       aliquet habitant</a></h4>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-6">
                        <div class="row">
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-1.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-1.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                       <p>new Project</p>
                                       <h4><a href="#">Etiam tortor <br>
                                             aliquet habitant</a></h4>
                                    </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-3.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                       <p>new Project</p>
                                       <h4><a href="#">Etiam tortor <br>
                                             aliquet habitant</a></h4>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center justify-content-between tab-pane fade" id="Exterior" role="tabpanel"
                     aria-labelledby="Exterior-tab">
                     <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="portfolio_box">
                           <a href="img/project-3.png" class="img-gal">
                              <div class="single_portfolio">
                                 <img class="img-fluid w-100" src="img/project-3.png" alt="">
                              </div>
                           </a>
                           <div class="short_info">
                                 <p>new Project</p>
                                 <h4><a href="#">Etiam tortor <br>
                                       aliquet habitant</a></h4>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-6">
                        <div class="row">
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-2.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-2.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                       <p>new Project</p>
                                       <h4><a href="#">Etiam tortor <br>
                                             aliquet habitant</a></h4>
                                    </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-1.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-1.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                       <p>new Project</p>
                                       <h4><a href="#">Etiam tortor <br>
                                             aliquet habitant</a></h4>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center justify-content-between tab-pane fade" id="Landing" role="tabpanel"
                     aria-labelledby="Landing-tab">
                     <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="portfolio_box">
                           <a href="img/project-1.png" class="img-gal">
                              <div class="single_portfolio">
                                 <img class="img-fluid w-100" src="img/project-1.png" alt="">
                              </div>
                           </a>
                           <div class="short_info">
                                 <p>new Project</p>
                                 <h4><a href="#">Etiam tortor <br>
                                       aliquet habitant</a></h4>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-6">
                        <div class="row">
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-4.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-5.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                       <p>new Project</p>
                                       <h4><a href="#">Etiam tortor <br>
                                             aliquet habitant</a></h4>
                                    </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
                              <div class="portfolio_box">
                                 <a href="img/project-3.png" class="img-gal">
                                    <div class="single_portfolio">
                                       <img class="img-fluid w-100" src="img/project-3.png" alt="">
                                    </div>
                                 </a>
                                 <div class="short_info">
                                       <p>new Project</p>
                                       <h4><a href="#">Etiam tortor <br>
                                             aliquet habitant</a></h4>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::project part end::-->

   <!--::service part end::-->
   <section class="service_part">
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-xl-6">
               <div class="section_tittle">
                  <h2>our <span>services</span></h2>
               </div>
               <div class="service_part_iner">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text ">
                           <img src="img/icon/service_1.svg" alt="">
                           <h4>house Planning</h4>
                           <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt </p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text">
                           <img src="img/icon/service_2.svg" alt="">
                           <h4>house Build</h4>
                           <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text">
                           <img src="img/icon/service_3.svg" alt="">
                           <h4>Design&
                              Build</h4>
                           <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text">
                           <img src="img/icon/service_4.svg" alt="">
                           <h4>Design&
                              Build</h4>
                           <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-10">
               <div class="service_text">
                  <h2>Hello City We are
                     leader in <span> Services.</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit,
                     sed do eiusmodtemporincididunt u labore et dolore magna aliqua.
                     Quis ipsum pendisse ultrices gravida. Risus commodo viverra
                     maecenas accumsan lacus vel </p>
                  <a href="service.html" class="btn_1">learn more</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::service part end::-->

   <!--::team part end::-->
   <section class="project_gallery section-padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="project_gallery_tittle">
                  <h2><span>Luxuries</span> Apartment</h2>
               </div>
               <div class="grid">
                  <div class="grid-sizer"></div>
                  <div class="grid-item big_weight">
                     <div class="project_img">
                        <img src="img/gallery/gallery_1.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="grid-item big_height">
                     <div class="project_img">
                        <img src="img/gallery/gallery_4.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="grid-item">
                     <div class="project_img">
                        <img src="img/gallery/gallery_2.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="grid-item">
                     <div class="project_img">
                        <img src="img/gallery/gallery_3.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::team part end::-->

   <!--::blog_part start::-->
   <div class="blog_part padding_bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-5">
               <div class="blog_part_tittle">
                  <h2>our <span>blog</span> </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-7">
               <div class="single_blog">
                  <div class="appartment_img">
                     <img src="img/blog_1.png" alt="">
                  </div>
                  <div class="single_appartment_content">
                     <p><a href="#">Apartment</a> / March 20, 2019</p>
                     <a href="blog.html">
                        <h4>Doee lights without darkness that said
                           good deep years very.</h4>
                     </a>
                     <ul class="list-unstyled">
                        <li><a href=""> <span class="ti-comment"></span> </a> 2 comment</li>
                        <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="right_single_blog">
                  <div class="single_blog">
                     <div class="media">
                        <div class="media-body align-self-center">
                           <p><a href="#">Apartment</a> / March 20, 2019</p>
                           <a href="blog.html">
                              <h5 class="mt-0"> lights without darkness that said.</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="single_blog">
                     <div class="media">
                        <div class="media-body align-self-center">
                           <p><a href="#">Apartment</a> / March 20, 2019</p>
                           <a href="blog.html">
                              <h5 class="mt-0"> lights without darkness that said.</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--::blog_part end::-->

   <!--::footer_part start::-->
   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="footer_logo">
                     <a href="index.html" class="footer_logo_iner"> <img src="img/footer_logo.png" alt="#"> </a>
               </div>
            </div>

            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>About Us</h4>
                  <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                  <div class="footer_icon social_icon">
                     <ul class="list-unstyled">
                        <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Contact Info</h4>
                  <p>Address : Your address goes
                     here, your demo address.</p>
                  <p>Phone : +8880 44338899</p>
                  <p>Email : info@colorlib.com</p>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Important Link</h4>
                  <ul class="list-unstyled">
                     <li><a href=""> WHMCS-bridge</a></li>
                     <li><a href="">Search Domain</a></li>
                     <li><a href="">My Account</a></li>
                     <li><a href="">Shopping Cart</a></li>
                     <li><a href="">Our Shop</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Newsletter</h4>
                  <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open
                  </p>
                  <div id="mc_embed_signup">
                     <form target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class="subscribe_form relative mail_part" required>
                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                           class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '"
                           required="" type="email">
                        <button type="submit" name="submit" id="newsletter-submit"
                           class="email_icon newsletter-submit button-contactForm"><i
                              class="far fa-paper-plane"></i></button>
                        <div class="mt-10 info"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-lg-12">
               <div class="copyright_text text-center">
                  <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!--::footer_part end::-->

   <!-- jquery plugins here-->
   <script src="js/jquery-1.12.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- magnific js -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- carousel js -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- easing js -->
   <script src="js/jquery.easing.min.js"></script>
   <!--masonry js-->
   <script src="js/masonry.pkgd.min.js"></script>
   <script src="js/masonry.pkgd.js"></script>
   <!--form validation js-->
   <script src="js/jquery.nice-select.min.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>
   <!-- counter js -->
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/waypoints.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>