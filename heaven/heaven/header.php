<?php
	$h1="Home";
	$h2="about";
	$h3="service";
	$h4="project";
	$h5="blog";
	$h6="single blog";
	$h7="elements";
	$h8="contact";
?>
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main_menu_iner">
                        <div class="search_icon">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                        <div class="logo">
                            <a href="index.html"><img src="img/logo.png" alt="#"></a>
                        </div>
                        <span class="menu-trigger visible-xs">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="off-canven-menu">
                            <span class="close-icon">
                                <i class="ti-close"></i>
                            </span>
                            <div class="canven-menu-warp">
                                <div class="canven-menu-iner">
                                    <ul>
                                        <?php echo("<li><a href='index.php'>" . $h1 . "</a></li>"); ?> 
                                        <?php echo("<li><a href='about.php'>" . $h2 . "</a></li>"); ?>
                                        <?php echo("<li><a href='service.php>" . $h3 . "</a></li>"); ?>
                                        <?php echo("<li><a href='project.php>project</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                        <li><a href="elements.html">elements</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>