<?php
	$h1="Home"; 
	$h2="About Us";
	$h3="Team";
	$h4="Pricing";
	$h5="FAQ";
	$h6="Gallery";
	$h7="Services";
	$h8="Testimonials";
	$h9="More Links";
	$h10="Menu One";
	$h11="Menu Two";
	$h12="Menu Three";
?>
 <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Banker<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><?php echo("<a href='#home-section' class='nav-link'>" . $h1 . "</a>"); ?></li>
                <li class="has-children">
                  <?php echo("<a href='#about-section' class='nav-link'>" . $h2 . "</a>"); ?>
                  <ul class="dropdown">
                    <li><?php echo("<a href='#team-section' class='nav-link'>" . $h3 . "</a>"); ?></li>
                    <li><?php echo("<a href='#pricing-section' class='nav-link'>" . $h4 . "</a>"); ?></li>
                    <li><?php echo("<a href='#faq-section' class='nav-link'>" . $h5 . "</a>"); ?></li>
                    <li><?php echo("<a href='#gallery-section' class='nav-link'>" . $h6 . "</a>"); ?></li>
                    <li><?php echo("<a href='#services-section' class='nav-link'>" . $h7 . "</a>"); ?></li>
                    <li><?php echo("<a href='#testimonials-section' class='nav-link'>" . $h8 . "</a>"); ?></li>
                    <li class="has-children">
                      <?php echo("<a href='#'>" . $h9 . "</a>"); ?>
                      <ul class="dropdown">
                        <li><?php echo("<a href='#'>" . $h10 . "</a>"); ?></li>
                        <li><?php echo("<a href='#'>" . $h11 . "</a>"); ?></li>
                        <li><?php echo("<a href='#'>" . $h12 . "</a>"); ?></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
                
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
