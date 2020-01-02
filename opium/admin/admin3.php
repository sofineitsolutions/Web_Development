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
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
    </head>
    <body>
        
<?php include("variable5.php"); ?>       
       <!--================Home Banner Area =================-->
        <section class="banner_area">
        	<div class="container">
				<div class="row banner_inner">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="banner_content text-center">
							<h2>Admin</h2>
							<div class="page_link">
								<a href="../index.html">Home</a>
								<a href="../contact.html">Admin</a>
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
                
                <div class="row">
                
     
                    <div class="col-lg-9">
                        <form class="row contact_form" action="insert4.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="tit" placeholder="title">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="des" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="left1" placeholder="Enter Left">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="des1" placeholder="Enter Description1">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="right1" placeholder="Right">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="des2" placeholder="Enter Description2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="des3" placeholder="Enter Description3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="def" placeholder="Enter defination">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="def1" id="message" rows="1" placeholder="Enter defination1"></textarea></div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="def2" placeholder="Enter defination2">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="def3" placeholder="Enter defination3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="def4" placeholder="Enter defination4">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="def5" placeholder="Enter defination5">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="def6" id="message" rows="1" placeholder="Enter Defination6"></textarea></div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="quots" placeholder="Quouts">
                                </div>
                               
                                 <div class="form-group">
                                    <textarea class="form-control" name="blogquote" id="message" rows="1" placeholder="Enter Blogquote"></textarea></div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="typography" placeholder="Enter typography">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="h1" placeholder="Enter h1">
                                </div>
                               <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="h2" placeholder="Enter h2">
                                </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="h3" placeholder="Enter h3">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="h4" placeholder="Enter h4">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="h5" placeholder="Enter h5">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="h6" placeholder="Enter h6">
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

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
        
    </body>
</html>