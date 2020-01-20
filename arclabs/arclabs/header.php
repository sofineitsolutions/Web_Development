<?php
	$h1="Home";
	$h2="About";
	$h3="Services";
	$h4="Pages";
	$h5="Projects";
	$h6="Elements";
	$h7="Blog";
	$h8="Blog";
	$h9="Blog Details";
	$h10="Contact";
?>
<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<?php echo("<li><a class='active' href='index.php'>" . $h1 . "</a></li>"); ?>
						<?php echo("<li><a href='about.php'>" . $h2 . "</a></li>"); ?>
						<?php echo("<li><a href='services.php'>" . $h3 . "</a></li>"); ?>
						<li class="dropdown">
							<?php echo("<a class='dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>" . $h4 . "</a>"); ?>
							<div class="dropdown-menu">
								<?php echo("<a class='dropdown-item' href='projects.php'>" . $h5 . "</a>"); ?> 
								<?php echo("<a class='dropdown-item' href='elements.php'>" . $h6 . "</a>"); ?>
							</div>
						</li>
						<li class="dropdown">
							<?php echo("<a class='dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>" . $h7 . "</a>"); ?>
							<div class="dropdown-menu">
								<?php echo("<a class='dropdown-item' href='blog-home.php'>" . $h8 . "</a>"); ?>
								<?php echo("<a class='dropdown-item' href='blog-single.php'>" . $h9 . "</a>"); ?>
							</div>
						</li>
						<?php echo("<li><a href='contact.php'>" . $h10 . "</a></li>"); ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>