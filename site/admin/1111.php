<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/modal.js"></script>
<script src="js/TMForm.js"></script>
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
<?php include("new.php");  ?>
<!--==============================
              header
=================================-->

<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - June 16, 2014!</div>
  <div class="container">
    <div class="row">
      
      <div class="grid_6">
        <div class="text1 tx__1">Contact Form</div>
          <form id="form" action="insert.php" method="POST">
            <div class="form_spinner">
              <img src="images/Preloader_4.gif" alt="">
            </div>
            <div class="modal fade response-message">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    asfasfasf
                  </div>
                </div>
              </div>
            </div>
            <div class="response-error-message"></div>
                        <div class="form-group">
                            <input name="block2" type="text" class="form-control" placeholder="Block">
                        </div>
                        <div class="form-group">
                            <input name="des1" type="text" class="form-control" placeholder="description1">
                        </div>
                        <div class="form-group">
                            <input name="des2" type="text" class="form-control" placeholder="description2">
                        </div>
                        <div class="form-group">
                            <input name="c1" type="text" class="form-control" placeholder="c1">
                        </div>
                        <div class="form-group">
                            <input name="c2" type="text" class="form-control" placeholder="c2">
                        </div>
                        <div class="form-group">
                            <input name="c3" type="text" class="form-control" placeholder="c3">
                        </div>
                        <div class="form-group">
                            <input name="c4" type="text" class="form-control" placeholder="c4">
                        </div>
                        <div class="form-group">
                            <input name="about" type="text" class="form-control" placeholder="About">
                        </div>
                        <div class="form-group">
                            <input name="content" type="text" class="form-control" placeholder="content">
                        </div>
                        <div class="form-group">
                            <input name="button" type="text" class="form-control" placeholder="Click here">
                        </div>
                        <div class="form-group">
                            <input name="title1" type="text" class="form-control" placeholder="title1">
                        </div>
                        <div class="form-group">
                            <input name="date1" type="text" class="form-control" placeholder="date1">
                        </div>
                        <div class="form-group">
                            <input name="news1" type="text" class="form-control" placeholder="news1">
                        </div>
                        <div class="form-group">
                            <input name="date2" type="text" class="form-control" placeholder="date2">
                        </div>
                        <div class="form-group">
                            <input name="news2" type="text" class="form-control" placeholder="news2">
                        </div>
                        <div class="form-group">
                            <input name="project" type="text" class="form-control" placeholder="Feature Projects">
                        </div>






                
                <div class="clear"></div>
                <div class="btns">
                  <a href="#" data-type="reset" class="btn">clear</a>
                  <a href="#" data-type="submit" class="btn">send</a>
                </div>
          </form>
      </div>
      
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->

