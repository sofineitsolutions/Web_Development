<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">
  
  <meta name="author" content="Themefisher.com">

  <title>Airspace | Creative Agency Bootstrap template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="../plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="../plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="../plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body id="body">
<?php include("variable8.php");  ?>

<!-- Header Start -->
<?php include("../header.php");  ?>
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1><?php echo($title);  ?></h1>
          <p><?php echo($des1); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post post-single">
					<h2 class="post-title"><?php echo($blog1); ?></h2>
					<div class="post-meta">
			            <ul>
			              <li>
			          <?php echo("<i class='ion-calendar'></i>$ddate
			              </li>
			              <li>
			                <i class='ion-android-people'></i>$dadmin
			              </li>
			              <li>
			                <a href=''><i class='ion-pricetags'></i>$dlife</a>,<a href=''>$dtravel</a>, <a
			                href=''>$dfashion</a>"); ?>
			              </li>
			              
			            </ul>
		          	</div>
					<div class="post-thumb">
						<img class="img-responsive" src="../images/blog/blog-post-1.jpg" alt="">
					</div>
					<div class="post-content post-excerpt">
						<p><?php echo($ddes1);  ?></p>
						<blockquote class="quote-post">
				            <p>
				              <?php echo($ddes2); ?>
				            </p>
				        </blockquote>
				        <p><?php echo($ddes3); ?></p>
				        <pre>
				        .blog-classic {
						    margin-bottom: 70px;
						    padding-bottom: 70px;
						    border-bottom: 1px solid #efefef;
						}
						</pre>
						<p><?php  echo($ddes4); ?></p>
				    </div>

				    <div class="post-comments">
				    	<h3 class="post-sub-heading"><?php echo($comment1); ?></h3>
				    	<ul class="media-list comments-list m-bot-50 clearlist">
						    <!-- Comment Item start-->
						    <li class="media">

						        <a class="pull-left" href="#">
						            <img class="media-object comment-avatar" src="../images/blog/avater-1.jpg" alt="" width="50" height="50">
						        </a>

						        <div class="media-body">
						            <div class="comment-info">
						                <h4 class="comment-author">
						                    <a href="#"><?php echo($name); ?></a>
						                	
						                </h4>
						                <time><?php echo($date); ?></time>
						                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i><?php echo($rep);  ?></a>
						            </div>

						            <p>
						                <?php echo($ans); ?>
						            </p>

						            <!--  second level Comment start-->
						            <div class="media">

						                <a class="pull-left" href="#">
						                    <img class="media-object comment-avatar" src="../images/blog/avater-2.jpg" alt="" width="50" height="50">
						                </a>

						                <div class="media-body">

						                    <div class="comment-info">
						                        <h4 class="comment-author">
						                            <a href="#"><?php echo($name1); ?></a>
						                        </h4>
						                        <time><?php echo($date1); ?></time>
						                        <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i><?php echo($rep); ?></a>
						                    </div>

						                    <p>
						                        <?php echo($ans1); ?>
						                    </p>


						                    <!-- third level Comment start -->
						                    <div class="media">

						                        <a class="pull-left" href="#">
						                            <img class="media-object comment-avatar" src="../images/blog/avater-3.jpg" alt="" width="50" height="50">
						                        </a>

						                        <div class="media-body">

						                            <div class="comment-info">
						                                <h4 class="comment-author">
						                                    <a href="#"><?php echo($name2); ?></a>
						                                </h4>
						                                <time><?php echo($date2); ?></time>
						                                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i><?php echo($rep); ?></a>
						                            </div>

						                            <p>
						        <?php echo($ans2); ?>
						                            </p>


						                        </div>

						                    </div>
						                    <!-- third level Comment end -->

						                </div>

						            </div>
						            <!-- second level Comment end -->

						        </div>

						    </li>
						    <!-- End Comment Item -->

						    <!-- Comment Item start-->
						    <li class="media">

						        <a class="pull-left" href="#">
						            <img class="media-object comment-avatar" src="../images/blog/avater-4.jpg" alt="" width="50" height="50">
						        </a>

						        <div class="media-body">

						            <div class="comment-info">
						                <h4 class="comment-author">
						                    <a href="#"><?php echo($name3); ?></a>
						                </h4>
						                <time><?php echo($date3); ?></time>
						                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i><?php echo($rep); ?></a>
						            </div>

						            <p>
					<?php echo($ans3); ?>
						            </p>

						        </div>

						    </li>
						    <!-- End Comment Item -->

						    <!-- Comment Item start-->
						    <li class="media">

						        <a class="pull-left" href="#">
						            <img class="media-object comment-avatar" src="../images/blog/avater-1.jpg" alt="" width="50" height="50">
						        </a>

						        <div class="media-body">

						            <div class="comment-info">
						                <h4 class="comment-author">
						                    <a href="#"><?php echo($name4); ?></a>
						                </h4>
						                <time><?php echo($date4); ?></time>
						                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i><?php echo($rep); ?></a>
						            </div>

						            <p>
			<?php echo($ans4); ?>
						            </p>

						        </div>

						    </li>
						    <!-- End Comment Item -->

						</ul>
				    </div>

				    <div class="post-comments-form">
				    	<h3 class="post-sub-heading"><?php echo($post1); ?></h3>
				    	<form method="post" action="#" id="form" role="form" >

				            <div class="row">

				                <div class="col-md-6 form-group">
				                    <!-- Name -->
				                    <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
				                </div>

				                <div class="col-md-6 form-group">
				                    <!-- Email -->
				                    <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
				                </div>


				                <div class="form-group col-md-12">
				                    <!-- Website -->
				                    <input type="text" name="website" id="website" class=" form-control" placeholder="Website" maxlength="100">
				                </div>

				                <!-- Comment -->
				                <div class="form-group col-md-12">
				                    <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
				                </div>

				                <!-- Send Button -->
				                <div class="form-group col-md-12">
				                    <button type="submit" class="btn btn-main ">
				                        <?php echo($button); ?>
				                    </button>
				                </div>


				            </div>

				        </form>
				    </div>


				</div>

			</div>
		</div>
	</div>
</section>

<?php include("../footer.php");  ?>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- <script src="js/jquery.counterup.js"></script> -->
    
    <!-- Main jQuery -->
   
    <script src="../https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="../plugins/slick-carousel/slick/slick.min.js"></script>
    <!--  -->
    <script src="../plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Mixit Up JS -->
    <script src="../plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- <script src="plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->
    <script src="../plugins/SyoTimer/build/jquery.syotimer.min.js"></script>


    <!-- Form Validator -->
    <script src="../http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="../http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>


    
    <!-- Google Map -->
    <script src="../plugins/google-map/map.js"></script>
    <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

    <script src="../js/script.js"></script>
    



  </body>
  </html>
