<?php
    $title="Do youn have any project or Query ?";
    $subtitle="Consectetur adipiscing elit, sed do eiusmod tempor incididunt.";
    $title1=" Navigation";
    $con1="Home";
    $con2="About";
    $con3=" Project";
    $con4="Services";
    $con5="Blog";
?>
 <footer class="footer footer_bg">
        <div class="footer_top">
            <div class="container-fluid p-0">
                <div class="row no-gutters ">
                    <div class="col-xl-3 col-12 col-md-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.html">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <ul class="social_links">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-12 col-md-8">
                        <div class="footer_header d-flex justify-content-between">
                            <div class="footer_header_left">
                               <?php echo("<h3>" . $title . "</h3>");
                                echo("<p>" . $subtitle . "</p>"); ?>
                            </div>
                            <div class="footer_btn">
                                <a href="#" class="boxed-btn2">Contact Us</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-12 col-md-12">
                                <div class="row">
                                    <div class="col-xl-4 col-12 col-md-4">
                                        <div class="footer_widget">
                                           <?php echo("<h3 class='footer_heading'>" . $title1 . "</h3>"); ?>
                                            <ul class="quick_links">
                                                <?php echo("<li><a href='#'>" . $con1 . "</a></li>");
                                                echo("<li><a href='#'>" . $con2 . "</a></li>");
                                                echo("<li><a href='#'>" . $con3 . "</a></li>");
                                                echo("<li><a href='#'>" . $con4 . "</a></li>");
                                                echo("<li><a href='#'>" . $con5 . "</a></li>"); ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-12 col-md-4">
                                        <div class="footer_widget">
                                            <h3 class="footer_heading">
                                                Services
                                            </h3>
                                            <ul class="quick_links">
                                                <li><a href="#">Interior</a></li>
                                                <li><a href="#"> Exterior</a></li>
                                                <li><a href="#"> Bridge</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-12 col-md-4 ">
                                        <div class="footer_widget">
                                            <h3 class="footer_heading">
                                                Speak Now
                                            </h3>
                                            <ul class="quick_links">
                                                <li><a href="#">+10 267 3567 267</a></li>
                                                <li><a href="#"> contact@ararat.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copy_right">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </footer>