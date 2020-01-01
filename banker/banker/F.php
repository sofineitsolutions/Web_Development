<?php
	$con1="About Us";
	$dec1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.";
	$con2="Quick Links";
	$con3="Terms";
	$con4="Policy";
	$con5="Services";
	$con6="Testimonials";
	$con7="Contact Us";
?>
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <?php echo("<h2 class='footer-heading mb-4'>" . $con1 . "</h2>");
                echo("<p>" . $dec1 . "</p>");  ?>
              </div>
              <div class="col-md-3 ml-auto">
                <?php echo("<h2 class='footer-heading mb-4'>" . $con2 . "</h2>"); ?>
                <ul class="list-unstyled">
                  <?php echo("<li><a href='#about-section' class='smoothscroll'>" . $con3 . "</a></li>"); ?>
                  <?php echo("<li><a href='#about-section' class='smoothscroll'>" . $con4 . "</a></li>"); ?>
                  <?php echo("<li><a href='#about-section' class='smoothscroll'>" . $con1 . "</a></li>"); ?>
                  <?php echo("<li><a href='#services-section' class='smoothscroll'>" . $con5 . "</a></li>"); ?>
                  <?php echo("<li><a href='#testimonials-section' class='smoothscroll'>" . $con6 . "</a></li>"); ?>
                  <?php echo("<li><a href='#contact-section' class='smoothscroll'>" . $con7 . "</a></li>"); ?>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>