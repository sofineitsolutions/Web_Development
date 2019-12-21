<?php 
	$h1="info@docmed.com";
	$h2="1601-609 6780";
	$h3="Get Free Quote";
	$h4="home";
	$h5="Services";
	$h6="about";
	$h7="service details";
	$h8="elements";
	$h9="blog";
	$h10="single-blog";
	$h11="Contact";
?>
 <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><?php echo("<a href='#'> <i class='fa fa-envelope'></i> " . $h1 ."</a>");?></li>
                                        <li><?php echo("<a href='#''> <i class='fa fa-phone'></i> " . $h2 ."</a>"); ?></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <?php echo ("<a class='boxed-btn3-line' href='#'>". $h3 ."</a>"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><?php echo("<a  href='index.html'>". $h4 ."</a>"); ?></li>
                                            <li><?php echo("<a  href='service.html'>". $h5 ."</a>"); ?></li>
                                            <li><?php echo("<a href='About.html'>". $h6 ."</a>"); ?></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><?php echo("<a href='service_details.html'>". $h7 ."</a>"); ?></li>
                                                    <li><?php echo("<a href='elements.html'>". $h8 ."</a>"); ?></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><?php echo("<a href='blog.html'>" . $h9 ."</a>"); ?></li>
                                                    <li><?php echo("<a href='single-blog.html'>". $h10 ."</a>"); ?></li>
                                                </ul>
                                            </li>
                                            <li><?php echo("<a href='contact.html'>". $h11 ."</a>"); ?></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>