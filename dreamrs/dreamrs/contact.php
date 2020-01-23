<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Real_state || contact</title>
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
   <!-- slick CSS -->
   <link rel="stylesheet" href="css/slick.css">
   <!-- font awesome CSS -->
   <link rel="stylesheet" href="fontawesome/css/all.min.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--::menu part start::-->
   <?php include("header.php"); ?>
   <?php include("variable8.php"); ?>
   <!--::menu part end::-->

   <!--::breadcrumb part start::-->
   <section class="breadcrumb blog_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <?php echo("<h2>" . $title1 . "</h2>"); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::breadcrumb part start::-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <?php echo("<h2 class='contact-title'>" . $title2 . "</h2>"); ?>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <?php echo("<h3><a href=''>" . $dec1 . "</a></h3>"); ?>
              <?php echo("<p>" . $dec2 . "</p>"); ?>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <?php echo("<h3><a href='tel:454545654'>" . $dec3 . "</a></h3>");
              echo("<p>" . $dec4 . "</p>"); ?>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <?php echo("<h3><a href='mailto:support@colorlib.com'>" . $dec5 . "</a></h3>"); ?>
              <?php echo("<p>" . $dec6 . "</p>"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

 <!--::footer_part start::-->
 <?php include("footer.php"); ?>
 <!--::footer_part end::-->
 
 <!-- jquery -->
 <script src="js/jquery-1.12.1.min.js"></script>
 <!-- popper js -->
 <script src="js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="js/bootstrap.min.js"></script>
 <!-- easing js -->
 <script src="js/jquery.magnific-popup.min.js"></script>
 <!-- owl carousel js -->
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/slick.min.js"></script>
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