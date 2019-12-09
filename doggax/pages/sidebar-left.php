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
<title>Doggax | Pages | Sidebar Left</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
  <?php  include("variable4.php"); ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-clock-o"></i> Mon. - Fri. 8am - 5pm</li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
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
 <?php include("f.php"); ?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Sidebar Left</h6>
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
     <?php  echo("<h6>" . $title1 . "</h6>"); ?>
      <nav class="sdb_holder">
        <ul>
          <?php echo("<li><a href='#'>" . $con1 . "</a></li><li><a href='#'>" . $con1 . "</a>"); ?>
            <ul>
              <?php echo("<li><a href='#'>" . $con2 . "</a></li><li><a href='#'>" . $con2 . "</a></li>"); ?>
            </ul>
          </li>
          <li> <?php echo("<a href='#'>" . $con1 . "</a>"); ?>
            <ul>
              <?php echo("<li><a href='#'>" . $con2 . "</a></li>"); ?>
              <li><?php echo("<a href='#'>" . $con2 . "</a>"); ?>
                <ul>
                <?php   echo("<li><a href='#'>" . $con3 . "</a></li><li><a href='#'>" . $con3 . "</a></li>"); ?>
                </ul>
              </li>
            </ul>
          </li>
          <?php echo("<li><a href='#'>" . $con1 . "</a></li>"); ?>
        </ul>
      </nav>
      <div class="sdb_holder">
        <?php echo("<h6>" . $title1 . "</h6>"); ?>
        <address>

        <?php echo(" " . $con4 . "<br>" . $con5 . "<br>" . $con6 . "<br>" . $con7 . "<br>" . $con8 . "<br><br>" . $con9 . "<br>" . $con10 . "<a href='#'>" . $con11 . "</a>"); ?>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <?php echo("<h6>" . $title1 . "</h6><p>" . $con12 . "</p>"); ?>
          <ul>
            <?php echo("<li><a href='#'>" . $con13 . "</a></li><li>" . $con14 . "</li><li><a href='#'>" . $con14 . "</a></li>"); ?>
          </ul>
          <?php echo("<p>" . $con15 . "</p>"); ?>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <?php echo("<h1>&lt;" . $subtitle1 . "&gt;" . $subtitle2 . "&lt;" . $subtitle3 . "&gt;" . $subtitle4 . "</h1>"); ?> 
      <img class="imgr borderedbox inspace-5" src="../images/demo/imgr.gif" alt="">
      <?php echo("<p>" . $dec1 . "</p><p>" . $dec2 . "<a href='#'>" . $dec3 . "</a>" . $dec4 . "</p>"); ?>
      <img class="imgl borderedbox inspace-5" src="../images/demo/imgl.gif" alt="">
      <?php echo("<p>" . $dec5 . "<a href='https://www.os-templates.com/' title='Free Website Templates'>" . $dec6 . "</a>" . $dec7 . " <a href='https://www.os-templates.com/template-terms'>" . $dec8 . "</a>.</p><p>" . $dec9 .  "<a href='https://www.os-templates.com/'>" . $dec10 . "</a>" . $dec11 . "</p><p>" . $dec12 . "</p>"); ?>
      <h1>Table(s)</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Header 1</th>
              <th>Header 2</th>
              <th>Header 3</th>
              <th>Header 4</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">Value 1</a></td>
              <td>Value 2</td>
              <td>Value 3</td>
              <td>Value 4</td>
            </tr>
            <tr>
              <td>Value 5</td>
              <td>Value 6</td>
              <td>Value 7</td>
              <td><a href="#">Value 8</a></td>
            </tr>
            <tr>
              <td>Value 9</td>
              <td>Value 10</td>
              <td>Value 11</td>
              <td>Value 12</td>
            </tr>
            <tr>
              <td>Value 13</td>
              <td><a href="#">Value 14</a></td>
              <td>Value 15</td>
              <td>Value 16</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <?php echo("<a href='#'>" . $subtitle5 . "</a>"); ?>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <?php echo("<p>" . $dec13 . "</p>"); ?> 
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <?php echo("<a href='#'>" . $subtitle5 . "</a>"); ?>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <?php echo("<p>" . $dec13 . "</p>"); ?>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <?php echo("<a href='#'>" . $subtitle5 . "</a>"); ?>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <?php echo("<p>" . $dec13 . "</p>"); ?>
              </div>
            </article>
          </li>
        </ul>
        <h2>Write A Comment</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/05.png');">
 <?php include("H.php"); ?>
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
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>