<?php
	$header1="home";
	$header2="About";
	$header3="Projects";
	$header4="Services";
	$header5="blog";
	$header6="single-blog";
	$header7="pages";
	$header8="project-details";
	$header9="elements";
	$header10="Contact";
	$header11="GET IN TOUCH";
?>
 <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                       <?php echo("<li><a class='active' href='index.php'>" . $header1 . "</a></li>"); ?>
                                        <?php echo("<li><a href='about.php'>" . $header2 . "</a></li>"); ?>
                                        <?php echo("<li><a href='project.php'>" . $header3 . "</a></li>");  ?>
                                        <?php echo("<li><a href='service.php'>" . $header4 . "</a></li>"); ?>

                                        <?php echo("<li><a href='#'>" . $header5 . "<i class='ti-angle-down'></i></a>"); ?>
                                            <ul class="submenu">
                                                <?php echo("<li><a href='blog.php'>" . $header5 . "</a></li>"); ?>
                                                <?php echo("<li><a href='single-blog.php'>" . $header6 . "</a></li>"); ?>
                                            </ul>
                                        </li>
                                        <?php echo("<li><a href='#'>" . $header7 . "<i class='ti-angle-down'></i></a>"); ?>
                                            <ul class="submenu">
                                                <?php echo("<li><a href='project-details.php'>" . $header8 . " </a></li>"); ?>
                                                <?php echo("<li><a href='elements.php'>" . $header9 . "</a></li>"); ?>
                                            </ul>
                                        </li>
                                        <?php echo("<li><a href='contact.php'>" . $header10 . "</a></li>"); ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="get_in_tauch">
                                <?php echo("<a href='#' class='boxed-btn'>" . $header11 . "</a>"); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>