<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ihover.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
 $(document).ready(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  });
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
<!--[if lt IE 10]>
<link rel="stylesheet" media="screen" href="css/ie1.css">
<![endif]-->
</head>
<body class="page1" id="top">
  
    <?php include("variable1.php"); ?>
<!--==============================
              header
=================================-->
<?php include("header.php"); ?>
<?php include("new.php"); ?>
<!--=====================
          Content
======================-->
<section class="content"><div class="ic"><?php echo($content1); ?></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="ta__center">
           <?php  echo("<h2>".$block2."</h2>"); ?>
          <div class="st1"><?php  echo($des1); ?> <br> <?php  echo($des2); ?> </div>
          <div class="banners">
            <a href="#" class="banner">
              <img src="images/bann_img1.jpg" alt="">
             <?php echo("<div class='bann_capt'><span>$c1</span></div>"); ?>
            </a>
            <a href="#" class="banner">
              <img src="images/bann_img2.jpg" alt="">
             <?php echo(" <div class='bann_capt'><span>$c2</span></div>"); ?>
            </a>
            <a href="#" class="banner">
              <img src="images/bann_img3.jpg" alt="">
              <?php echo("<div class='bann_capt'><span>$c3</span></div>"); ?>
            </a>
            <a href="#" class="banner">
              <img src="images/bann_img4.jpg" alt="">
              <?php echo("<div class='bann_capt'><span>$c4</span></div>"); ?>
            </a>
          </div>
          <div class="clear"></div>
          <?php echo("<h3>$about</h3>"); ?>"
          <div class="row">
            <div class="grid_8 preffix_2">
              <div class="st1"> <?php echo($content); ?> </div>
              <a href="#" class="btn"><?php echo($button); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear sep__1"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
       <?php echo("<h3 class='head1'>$title1</h3>"); ?>
      </div>
      <div class="grid_6">
        <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="text1">
            <?php echo("<time datetime='2014-01-01'> </time>"); ?>
            <?php echo("<a href='#''>$date</a>"); ?>
          </div><?php  echo($news1); ?>
        </div>
        <div class="clear"></div>
      </div>
      <div class="grid_6">
        <img src="images/page1_img2.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="text1">
            <time datetime="2014-01-01"></time>
            <?php echo("<a href='#''>$date1</a>"); ?>
          </div>
          <?php  echo($news2); ?>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="clear sep__1 sp__1"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <?php echo("<h3>$project</h3>"); ?>"
      </div>
      <div class="grid_3">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img src="images/circ_img1.jpg" alt="img"></div>
        <div class="info">
          <h3>Taxi Company</h3>
          <p>learn more</p>
        </div></a></div>
      </div>
      <div class="grid_3">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img src="images/circ_img2.jpg" alt="img"></div>
        <div class="info">
          <h3>Mod Portfolio</h3>
          <p>learn more</p>
        </div></a></div>
      </div>
      <div class="grid_3">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img src="images/circ_img3.jpg" alt="img"></div>
        <div class="info">
          <h3>Marathon</h3>
          <p>learn more</p>
        </div></a></div>
      </div>
      <div class="grid_3">
        <div class="ih-item circle effect2 left_to_right"><a href="#">
        <div class="img"><img src="images/circ_img4.jpg" alt="img"></div>
        <div class="info">
          <h3>Travel Agency</h3>
          <p>learn more</p>
        </div></a></div>
      </div>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>
