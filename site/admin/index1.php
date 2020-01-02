<!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico">
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
</head>
<body id="top">

<?php include("variable2.php"); ?>
<!--==============================
              header
=================================-->
<?php include("../header.php"); ?>
<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - June 16, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <?php echo("<h3 class='ta__center'>$tit</h3>"); ?>
      </div>
      <div class="grid_6">
        <div class="block1">
          <img src="../images/page2_img1.jpg" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <?php echo("<div class='text1'><a href='#'>$t1</a></div>"); ?>
            <p><?php echo($block1); ?>
          </div>
        </div>
      </div>
      <div class="grid_6">
        <div class="block1">
          <img src="../images/page2_img2.jpg" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <?php echo("<div class='text1'><a href='#'>$t2</a></div>"); ?>
            <p><?php  echo($service1);  ?>
          </div>
        </div>
      </div>
      <div class="clear sep__2"></div>
      <div class="grid_6">
        <div class="block1">
          <img src="../images/page2_img3.jpg" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <?php echo("<div class='text1'><a href='#'>$t3</a></div>"); ?>
            <p><?php  echo($service2);  ?>
          </div>
        </div>
      </div>
      <div class="grid_6">
        <div class="block1">
          <img src="../images/page2_img4.jpg" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <?php echo("<div class='text1'><a href='#'>$t4</a></div>"); ?>
            <p><?php  echo($service3);  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear sep__1 sp__2"></div>
  <div class="container">
    <div class="row">
      <div class="grid_7">
        <?php echo("<h3>$cus_new</h3>"); ?>
        <img src="../images/page2_img5.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <?php echo("<div class='text1'><a href='#'>$l1</a></div>"); ?>
          <p><?php  echo($service4);  ?>
          <br>
          <a href="#" class="btn">more</a>
        </div>
        <div class="clear sep__3"></div>
        <img src="../images/page2_img6.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <?php echo("<div class='text1'><a href='#'>$l2</a></div>"); ?>
          <p><?php  echo($service5);  ?>
          <br>
          <a href="#" class="btn">more</a>
        </div>
      </div>
      <div class="grid_4 preffix_1">
        <?php echo("<h3>$why</h3>"); ?>
        <p><?php  echo($service6);  ?></p>
        <ul class="list color1">
          <?php echo("<li><a href='#'>$s1 </a></li>"); ?>
          <?php echo("<li><a href='#'>$s2 </a></li>"); ?>
          <?php echo("<li><a href='#'>$s3 </a></li>"); ?>
          <?php echo("<li><a href='#'>$s4 </a></li>"); ?>
          <?php echo("<li><a href='#'>$s5</a></li>"); ?>
          <?php echo("<li><a href='#>$s6 </a></li>"); ?>
          <?php echo("<li><a href='#>$s7</a></li>"); ?>
          <?php echo("<li><a href='#'>$s8</a></li>"); ?>
        </ul>
        <?php  echo($service6);  ?>
      </div>
    </div>
  </div>
</section>
<?php include("../footer.php"); ?>
