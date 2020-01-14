<?php
   $h1="Home";
   $h2="about";
   $h3="Services"; 
   $h4="blog"; 
   $h5="Single blog";
   $h6="Project";
   $h7="Apartment";
   $h8="Elements";
   $h9="Contact us";
?>
<header class="main_menu home_menu">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <?php echo("<a class='nav-link' href='index.php'>" . $h1 . "</a>"); ?>
                        </li>
                        <li class="nav-item">
                           <?php echo("<a class='nav-link' href='about.php'>" . $h2 . "</a>"); ?>
                        </li>
                        <li class="nav-item">
                           <?php echo("<a class='nav-link' href='services.php'>" . $h3 . "</a>"); ?>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              blog
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php echo("<a class='dropdown-item' href='blog.php'>" . $h4 . "</a>"); ?>
                              <?php echo("<a class='dropdown-item' href='single-blog.php'>" . $h5 . "</a>"); ?>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php echo("<a class='dropdown-item' href='project.php'>" . $h6 . "</a>"); ?>
                              <?php echo("<a class='dropdown-item' href='apartment.php'>" . $h7 . "</a>"); ?>
                              <?php echo("<a class='dropdown-item' href='elements.php'>" . $h8 . "</a>"); ?>
                           </div>
                        </li>
                        <li class="nav-item">
                           <?php echo("<a class='nav-link' href='contact.php'>" . $h9 . "</a>"); ?>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>