<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
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
<?php include("variable5.php"); ?>
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
      <div class="grid_7">
        <?php echo("<h3 class='ta__center'>$title</h3>"); ?>
        <div class="blog">
            <?php echo("<div class='text1'><a href='#'>$blog_tit </a></div>"); ?>
    <?php echo("<div class='blog_links'>$blog_sub
              <a href='#'>$blog_sub1</a> on
              <time datetime='2014-01-01'>$blog_date</time>"); ?>
            </div>
            <img src="../images/page4_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <p><?php echo($blog1); ?>
              <br>
              <?php echo("<a href='#' class='btn'>$button</a>"); ?>
            </div>
          </div>
          <div class="blog">
            <?php echo("<div class='text1'><a href='#'>$blog_tit1 </a></div>"); ?>
    <?php echo("<div class='blog_links'>$blog_sub2
              <a href='#'>$blog_sub3</a> on
              <time datetime='2014-01-01'>$blog_date1</time>"); ?>
            </div>
            <img src="../images/page4_img2.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <p><?php echo($blog2); ?>
              <br>
              <?php echo("<a href='#' class='btn'>$button1</a>");  ?>
            </div>
          </div>
          <div class="blog">
          <?php echo("<div class='text1'><a href='#'>$blog_tit2</a></div>
            <div class='blog_links'>$blog_sub4
              <a href='#'>$blog_sub5</a> on
              <time datetime='2014-01-01'>$blog_date2</time>"); ?>
            </div>
            <img src="../images/page4_img3.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
             <?php echo($blog3); ?>
              <br>
              <?php echo("<a href='#' class='btn'>$button2</a>"); ?>
            </div>
          </div>
      </div>
      <div class="grid_4 preffix_1">
        <?php echo("<h3>$search</h3>"); ?>
        <form id="search" action="search.php" method="GET">
        <div class="rel">
          <label>
            <input type="text" name="s">
          </label>
          <a onClick="document.getElementById('search').submit()" class=""></a>
        </div>
         <div class="clear"></div>
       </form>
       <?php echo("<h3>$cat</h3>"); ?>
       <ul class="list color1">
        <?php echo("<li><a href='#'>$cat1</a></li>
         <li><a href='#'>$cat2 </a></li>
         <li><a href='#'>$cat3  </a></li>
         <li><a href='#'>$cat4 </a></li>
         <li><a href='#'>$cat5</a></li>
         <li><a href='#'>$cat6 </a></li>
         <li><a href='#'>$cat7</a></li>
         <li><a href='#'>$cat8 </a></li>"); ?>
       </ul>
      <?php echo("<h3>$poll</h3>"); ?>
       <ul class="rate">
         <li>
           <?php echo("<span>$poll1</span>
           <span>  $poll_per</span>"); ?>
           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
         <li>
          <?php echo("<span>$poll2</span>
           <span>$poll_per1</span>"); ?>
           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
         <li>
           <?php echo("<span>$poll3</span>
           <span>$poll_per2</span>"); ?>
           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
         <li>
          <?php echo("<span>$poll4</span>
           <span>$poll_per3</span>"); ?>

           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
       </ul>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<?php include("../footer.php"); ?>




















