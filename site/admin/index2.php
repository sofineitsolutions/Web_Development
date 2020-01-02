<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="stylesheet" href="../css/touchTouch.css">
<link rel="stylesheet" href="../css/stuck.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script src="../js/script.js"></script>
<script src="../js/superfish.js"></script>
<script src="../js/jquery.equalheights.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/tmStickUp.js"></script>
<script src="../js/jquery.ui.totop.js"></script>
<script src="../js/touchTouch.jquery.js"></script>
<script>
 $(document).ready(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();
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
</head>
<body id="top">

<?php include("variable3.php"); ?>
<!--==============================
              header
=================================-->

<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - June 16, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <?php echo("<h3 class='ta__center'>$title</h3>"); ?>
      </div>
      <div class="gallery">
        <div class="grid_4">
          <a href="../images/big1.jpg" class="gall_item"><img src="../images/page3_img1.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#>$tit1</a></div>"); ?>
          <?php  echo($portfolio1); ?>
        </div>
        <div class="grid_4">
          <a href="../images/big2.jpg" class="gall_item"><img src="../images/page3_img2.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#>$tit2</a></div>"); ?>
         <?php  echo($portfolio2); ?>
        </div>
        <div class="grid_4">
          <a href="../images/big3.jpg" class="gall_item"><img src="../images/page3_img3.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#>$tit3</a></div>"); ?>
          <?php  echo($portfolio3); ?>
        </div>
        <div class="clear sep__4"></div>
        <div class="grid_4">
          <a href="../images/big4.jpg" class="gall_item"><img src="../images/page3_img4.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#'>$tit4</a></div>"); ?>
         <?php  echo($portfolio4); ?>
        </div>
        <div class="grid_4">
          <a href="../images/big5.jpg" class="gall_item"><img src="../images/page3_img5.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#'>$tit5</a></div>"); ?>
          <?php  echo($portfolio5); ?>
        </div>
        <div class="grid_4">
          <a href="../images/big6.jpg" class="gall_item"><img src="../images/page3_img6.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#'>$tit6</a></div>"); ?>
          <?php  echo($portfolio6); ?>
        </div>
        <div class="clear sep__4"></div>
        <div class="grid_4">
          <a href="../images/big7.jpg" class="gall_item"><img src="../images/page3_img7.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#'>$tit7</a></div>"); ?>
          <?php  echo($portfolio7); ?>
        </div>
        <div class="grid_4">
          <a href="../images/big8.jpg" class="gall_item"><img src="../images/page3_img8.jpg" alt=""></a>
          <?php echo("<div class='text1'><a href='#'>$tit8</a></div>"); ?>
         <?php  echo($portfolio8); ?>
        </div>
      </div>
    </div>
  </div>
</section>

