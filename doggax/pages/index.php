<!DOCTYPE html>
<!--
Template Name: Doggax
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Doggax</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
  <?php  include("variable1.php");?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>

            <p>Lacinia</p>
            <h3 class="heading">Maximus dapibus justo</h3>
            <p>Tellus magna at velit praesent non justo</p>
            <footer><a class="btn" href="#">Pretium pharetra</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>Lacinia</p>
            <h3 class="heading">Imperdiet vitae suspendisse</h3>
            <p>Non tincidunt dui nullam tortor eget aliquam</p>
            <footer><a class="btn" href="#">Aliquet consectetur</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>Lacinia</p>
            <h3 class="heading">Vivamus gravida ex quis</h3>
            <p>Sit amet at mauris vivamus eget leo nunc</p>
            <footer><a class="btn" href="#">Lacinia facilisis</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <?php echo("<li><i class='fa fa-clock-o'></i>" . $date . "</li>");
              echo("<li><i class='fa fa-phone'></i>" . $mobno . "</li>");
              echo("<li><i class='fa fa-envelope-o'></i>" . $eid . "</li>"); ?>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
 <?php
    include("f.php"); 
 ?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <?php echo("<h3 class='heading font-x2'>" . $b1_title1 . "</h3>");
      echo("<p>" . $b1_dec1 . "</p>");
      echo("<p>" . $b1_dec2 . "</p>"); ?>
    </div>
    <figure class="one_half">
      <ul class="nospace group">
        <li class="one_third first btmspace-30"><a href="#"><img src="../images/demo/222x200.png" alt=""></a></li>
        <li class="one_third btmspace-30"><a href="#"><img src="../images/demo/222x200.png" alt=""></a></li>
        <li class="one_third btmspace-30"><a href="#"><img src="../images/demo/222x200.png" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="../images/demo/222x200.png" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../images/demo/222x200.png" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../images/demo/222x200.png" alt=""></a></li>
      </ul>
    </figure>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
  <article class="hoc container center"> 
    <!-- ################################################################################################ -->
   <?php echo("<h6 class='heading font-x3'>" . $b2_title1 . "</h6>");
    echo("<p class='btmspace-30'>" . $b2_dec1 . "</p>");
    echo("<footer><a class='btn' href='#'>" . $b2_btn1 . "</a></footer>"); ?>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <?php echo("<h3 class='heading'>" . $b2_title2 . "</h3>");
      echo("<p>" . $b2_dec2 . "</p>"); ?>
    </div>
    <ul class="nospace group services">
      <li class="one_third first">
        <article><a href="#"><i class="icon fa fa-ils"></i></a>
          <?php echo("<h6 class='heading'>" . $b2_subtitle1 . "</h6>");
          echo("<p>" . $b2_dec3 . "[&hellip;]</p>");
          echo("<footer><a href='#'>" . $b2_btn2 .  " &raquo;</a></footer>"); ?>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="icon fa fa-ioxhost"></i></a>
          <?php echo("<h6 class='heading'>" . $b2_subtitle2 . "</h6>");
          echo("<p>" . $b2_dec4 . "[&hellip;]</p>");
          echo("<footer><a href='#'>" . $b2_btn2 . "&raquo;</a></footer>"); ?>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="icon fa fa-yelp"></i></a>
          <?php echo("<h6 class='heading'>" . $b2_subtitle3 . "</h6>");
          echo("<p>" . $b2_dec5 . "[&hellip;]</p>");
          echo("<footer><a href='#'>" . $b2_btn2 . "&raquo;</a></footer>"); ?>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/03.png');">
  <article class="hoc container"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <?php echo("<h3 class='heading'>" . $b3_title1 . "</h3>");
      echo("<p>" . $b3_subtitle1 . "</p>"); ?>
    </div>
    <ul class="nospace group">
      <li class="one_half first borderedbox inspace-15">
        <?php echo("<blockquote>" . $b3_con1 . "</blockquote>");
        echo("<p class='right bold'>" . $b3_name . "</p>"); ?>
      </li>
      <li class="one_half borderedbox inspace-15">
        <?php echo("<blockquote>" . $b3_con2 . "</blockquote>");
        echo("<p class='right bold'>" . $b3_name . "</p>"); ?>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay light" style="background-image:url('../images/demo/backgrounds/04.png');">
  <article class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <?php echo("<h3 class='heading'>" . $b4_title1 . "</h3>");
      echo("<p>" . $b4_subtitle1 . "</p>"); ?>
    </div>
    <figure>
      <ul class="nospace group">
        <li class="one_quarter first"><a href="#"><img src="../images/demo/222x200.png" alt=""></a>
          <?php echo("<p>" . $b4_dec1 . "</p>"); ?>
        </li>
        <li class="one_quarter"><a href="#"><img src="../images/demo/222x200.png" alt=""></a>
          <?php echo("<p>" . $b4_dec2 . "</p>"); ?>
        </li>
        <li class="one_quarter"><a href="#"><img src="../images/demo/222x200.png" alt=""></a>
          <?php echo("<p>" . $b4_dec3 . "</p>"); ?>
        </li>
        <li class="one_quarter"><a href="#"><img src="../images/demo/222x200.png" alt=""></a>
         <?php echo("<p>" . $b4_dec4 . "</p>"); ?>
        </li>
      </ul>
    </figure>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <?php echo("<h3 class='heading'>" . $b5_title1 . "</h3>");
      echo("<p>" . $b5_subtitle1 . "</p>"); ?>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article><a href="#"><img class="inspace-10 btmspace-30 borderedbox" src="../images/demo/320x220.png" alt=""></a>
          <ul class="nospace btmspace-10 inline pushright font-xs">
            <li><i class="fa fa-calendar-o"></i> 06/01/45</li>
            <li><i class="fa fa-comments"></i> <a href="#">4</a></li>
          </ul>
          <?php echo("<h6 class='heading font-x1'>" . $b5_dec1 . "&hellip;</h6>");
          echo("<footer><a class='btn' href='#'>" . $b2_btn2 . "&raquo;</a></footer>"); ?>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img class="inspace-10 btmspace-30 borderedbox" src="../images/demo/320x220.png" alt=""></a>
          <ul class="nospace btmspace-10 inline pushright font-xs">
            <li><i class="fa fa-calendar-o"></i> 06/01/45</li>
            <li><i class="fa fa-comments"></i> <a href="#">4</a></li>
          </ul>
          <?php echo("<h6 class='heading font-x1'>" . $b5_dec2 . "&hellip;</h6>");
          echo("<footer><a class='btn' href='#'>" . $b2_btn2 . "&raquo;</a></footer>"); ?>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img class="inspace-10 btmspace-30 borderedbox" src="../images/demo/320x220.png" alt=""></a>
          <ul class="nospace btmspace-10 inline pushright font-xs">
            <li><i class="fa fa-calendar-o"></i> 06/01/45</li>
            <li><i class="fa fa-comments"></i> <a href="#">4</a></li>
          </ul>
          <?php echo("<h6 class='heading font-x1'>" . $b5_dec3 . "&hellip;</h6>"); 
          echo("<footer><a class='btn' href='#''>" . $b2_btn2 . "&raquo;</a></footer>"); ?>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/05.png');">
 <?php
    include("H.php"); 
 ?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>