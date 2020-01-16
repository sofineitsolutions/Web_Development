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
				<?php echo("<h2>" . $subtitle3 . "</h2>"); ?>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li>
                        <?php echo("<a class='active' id='Architecture-tab' data-toggle='tab' href='#Architecture' role='tab'
                           aria-controls='Architecture' aria-selected='true'>" . $con1 . "</a>"); ?>
                     </li>
                     <li>
                        <?php echo("<a id='Interior-tab' data-toggle='tab' href='#Interior' role='tab' aria-controls='Interior'
                           aria-selected='false'>" . $con2 . "</a>"); ?>
                     </li>
                     <li>
                        <?php echo("<a id='Exterior-tab' data-toggle='tab' href='#Exterior' role='tab' aria-controls='Exterior'
                           aria-selected='false'>" . $con3 . "</a>"); ?>
                     </li>
                     <li>
                        <?php echo("<a id='Landing-tab' data-toggle='tab' href='#Landing' role='tab' aria-controls='Landing'
                           aria-selected='false'>" . $con4 . "</a>"); ?>
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
                              <?php echo("<h4><a href='#'>" . $con5 . "</a></h4>"); ?>
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
                                    <?php echo("<h4><a href='#'>" . $con6 . "</a></h4>"); ?>
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
                                    <?php echo("<h4><a href='#'>" . $con7 . "</a></h4>"); ?>
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
                                 <?php echo("<h4><a href='#'>" . $con8 . "</a></h4>"); ?>
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
                                       <?php echo("<h4><a href='#'>" . $con9 . "</a></h4>"); ?>
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
                                       <?php echo("<h4><a href='#'>" . $con10 . "</a></h4>"); ?>
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
                                 <?php echo("<h4><a href='#'>" . $con11 . "</a></h4>"); ?>
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
                                       <?php echo("<h4><a href='#'>" . $con12 . "</a></h4>"); ?>
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
                                       <?php echo("<h4><a href='#'>" . $con13 . "</a></h4>"); ?>
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
                                 <?php echo("<h4><a href='#'>" . $con14 . "</a></h4>"); ?>
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
                                       <?php echo("<h4><a href='#'>" . $con15 . "</a></h4>"); ?>
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
                                       <?php echo("<h4><a href='#'>" . $con16 . "</a></h4>"); ?>
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
                  <?php echo("<h2>" . $title5 . "</h2>"); ?>
               </div>
               <div class="service_part_iner">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text ">
                           <img src="img/icon/service_1.svg" alt="">
                           <?php echo("<h4>" . $con17 . "</h4>");
                           echo("<p>" . $dec2 . "</p>"); ?>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text">
                           <img src="img/icon/service_2.svg" alt="">
                           <?php echo("<h4>" . $con18 . "</h4>");
                           echo("<p>" . $dec3 . "</p>"); ?>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text">
                           <img src="img/icon/service_3.svg" alt="">
                           <?php echo("<h4>" . $con19 . "</h4>"); 
                           echo("<p>" . $dec4 . "</p>"); ?>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="single_service_text">
                           <img src="img/icon/service_4.svg" alt="">
                           <?php echo("<h4>" . $con20 . "</h4>"); 
                           echo("<p>" . $dec5 . "</p>"); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-10">
               <div class="service_text">
                  <?php echo("<h2>" . $title6 . "</h2>"); 
                  echo("<p>" . $dec6 . "</p>"); ?>
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
                  <?php echo("<h2>" . $title7 . "</h2>"); ?>
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
                        <?php echo("<h4>" . $subtitle4 . "</h4>"); ?>
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
                              <?php echo("<h5 class='mt-0'>" . $subtitle5 . "</h5>"); ?>
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
                              <?php echo("<h5 class='mt-0'>" . $subtitle6 . "</h5>"); ?>
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
  <?php include("footer.php") ?>
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