<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>gym</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
      include("../variable1.php");?>
        <!-- bradcam_area -->
        <div class="bradcam_area">
                <div class="single_bradcam  d-flex align-items-center bradcam_bg_2 overlay">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xl-9">
                                    <div class="bradcam_text text-center">
                                        <h3>contact</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- bradcam_area end -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form action="../insert1.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="title1" placeholder="Enter your website title">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des1" placeholder="Enter description1 ">
                                </div>
                                <div class="form-group" >
                                    <input type="text" class="form-control" id="name" name="title2" placeholder="Enter title2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des2" placeholder="Enter description2 ">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="ftitle1" placeholder="Enter Features title1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="fdes1" placeholder="Enter Features discription3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="ftitle2" placeholder="Enter Features title2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="fdes2" placeholder="Enter Features discription2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="ftitle3" placeholder="Enter Features title3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="fdes3" placeholder="Enter Features discription3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="ftitle4" placeholder="Enter Features title4">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="fdes4" placeholder="Enter Features discription4">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="title3" placeholder="Enter title3 ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="title4" placeholder="Enter title4">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="des3" placeholder="Enter description3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name1" placeholder="Enter name1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="Trainer1" placeholder="Enter trainer">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name2" placeholder="Enter name2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="Trainer2" placeholder="Enter trainer2 ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name3" placeholder="Enter name3">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="Trainer3" placeholder="Enter trainer ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="offer" placeholder="offer">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    <?php include("../f.php");?>
    
        <!-- JS here -->
        <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
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