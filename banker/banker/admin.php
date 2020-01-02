 <!doctype html>
<html lang="en">
  <head>
    <title>Banker &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <?php
    include("H.php");
  ?>
  <?php include("variable1.php"); ?>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
 <form action="insert.php" method="post" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Banking Solutions</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  
                  <input name="b1_title1" type="text" class="form-control" placeholder="Your Title">
                </div>
              </div>
                <div class="row form-group">
                <div class="col-md-6">
                  <input name="b1_subtitle1" type="text" class="form-control" placeholder="Subtitle">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <input name="b1_title2" type="text" class="form-control" placeholder=" Title2">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="b1_title3" type="text" class="form-control" placeholder=" Title3">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="con1" type="text" class="form-control" placeholder="containt 1">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="dec1" type="text" class="form-control" placeholder="description1">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="con2" type="text" class="form-control" placeholder="containt 2">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="con3" type="text" class="form-control" placeholder="containt 3">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="title4" type="text" class="form-control" placeholder=" Title4">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="dec2" type="text" class="form-control" placeholder="description2">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="dec3" type="text" class="form-control" placeholder="description3">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                 <input name="dec4" type="text" class="form-control" placeholder="description4">
                </div>
              </div>

             
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>
               <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
                 </div>
                </div>
  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    
    <?php include("F.php"); ?>
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
  </body>
</html>