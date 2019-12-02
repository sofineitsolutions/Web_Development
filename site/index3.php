<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
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
</head>
<body id="top">
<?php include("new.php"); ?>
<!--==============================
              header
=================================-->
<?php include("header.php"); ?>
<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - June 16, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_7">
        <h3 class="ta__center">Blog</h3>
        <div class="blog">
            <div class="text1"><a href="#">Lueiverra Mertolo Dertomertolino Mel</a></div>
            <div class="blog_links">Submitted by
              <a href="#">Admin</a> on
              <time datetime="2014-01-01">11 June, 2014</time>
            </div>
            <img src="images/page4_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <p><?php echo($blog1); ?>
              <br>
              <a href="#" class="btn">more</a>
            </div>
          </div>
          <div class="blog">
            <div class="text1"><a href="#">Hoeiverra Tertolo Gertomertolino </a></div>
            <div class="blog_links">Submitted by
              <a href="#">Admin</a> on
              <time datetime="2014-01-01">14 June, 2014</time>
            </div>
            <img src="images/page4_img2.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <p><?php echo($blog2); ?>
              <br>
              <a href="#" class="btn">more</a>
            </div>
          </div>
          <div class="blog">
            <div class="text1"><a href="#">Mertolo Dertomertolino Melonwe</a></div>
            <div class="blog_links">Submitted by
              <a href="#">Admin</a> on
              <time datetime="2014-01-01">18 June, 2014</time>
            </div>
            <img src="images/page4_img3.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
             <?php echo($blog3); ?>
              <br>
              <a href="#" class="btn">more</a>
            </div>
          </div>
      </div>
      <div class="grid_4 preffix_1">
        <h3>Search</h3>
        <form id="search" action="search.php" method="GET">
        <div class="rel">
          <label>
            <input type="text" name="s">
          </label>
          <a onClick="document.getElementById('search').submit()" class=""></a>
        </div>
         <div class="clear"></div>
       </form>
       <h3>Categories</h3>
       <ul class="list color1">
         <li><a href="#">Besit ametconsecteturertolom  werto monikosit </a></li>
         <li><a href="#">Amet ultricies erateroli me rutruma auctorerttu </a></li>
         <li><a href="#">Terolp sadertto mertoInteger convawertolo  </a></li>
         <li><a href="#">Amertoloolaoreetatwertlim wernom fertolom </a></li>
         <li><a href="#">Dolor sit amsecteturertolom  lid be</a></li>
         <li><a href="#">Moniko lomon dertlosit amet ultricies erater </a></li>
         <li><a href="#">Rutruma auctorert retlomoni molokintromoli</a></li>
         <li><a href="#">Convallis orci vel mi laoreetat terolo </a></li>
       </ul>
       <h3>Poll</h3>
       <ul class="rate">
         <li>
           <span>Super</span>
           <span>39%</span>
           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
         <li>
           <span>Good</span>
           <span>31%</span>
           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
         <li>
           <span>Normal</span>
           <span>20%</span>
           <div class="bar">
             <div class="scale"></div>
           </div>
         </li>
         <li>
           <span>Bad </span>
           <span>11%</span>
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
<?php include("footer.php"); ?>




















