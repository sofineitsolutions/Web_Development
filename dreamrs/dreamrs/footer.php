<?php
	$title1="About Us";
	$subtitle1="Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open";
	$title2="Contact Info";
	$dec1="Address : Your address goes
                     here, your demo address.";
	$dec2="Phone : +8880 44338899";
	$dec3="Email : info@colorlib.com";
	$title3="Important Link";
	$con1="WHMCS-bridge";
	$con2="Search Domain";
	$con3="My Account";
	$con4="Shopping Cart";
	$con5="Our Shop";
	$title4="Newsletter";
	$dec4="Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open";  
?>
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
                  <?php echo("<h4>" . $title1 . "</h4>"); ?>
                  <?php echo("<p>" . $subtitle1 . "</p>"); ?>
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
                  <?php echo("<h4>" . $title2 . "</h4>"); 
                  echo("<p>" . $dec1 . "</p>");
                  echo("<p>" . $dec2 . "</p>");
                  echo("<p>" . $dec3 . "</p>"); ?>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <?php echo("<h4>" . $title3 . "</h4>"); ?>
                  <ul class="list-unstyled">
                     <?php echo("<li><a href=''>" . $con1 . "</a></li>");
                     echo("<li><a href=''>" . $con2 . "</a></li>"); 
                     echo("<li><a href=''>" . $con3 . "</a></li>");
                     echo("<li><a href=''>" . $con4 . "</a></li>"); 
                     echo("<li><a href=''>" . $con5 . "</a></li>"); ?>
                  </ul>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <?php echo("<h4>" . $title4 . "</h4>");
                  echo("<p>" . $dec4 . "</p>"); ?>
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