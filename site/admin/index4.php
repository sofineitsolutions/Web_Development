<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="stylesheet" href="../css/stuck.css">
<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script src="../js/script.js"></script>
<script src="../js/superfish.js"></script>
<script src="../js/jquery.equalheights.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/tmStickUp.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/TMForm.js"></script>
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
<?php include("variable4.php");  ?>
<!--==============================
              header
=================================-->
<?php include("../header.php");  ?>
<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - June 16, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <?php echo("<h3 class='ta__center'>$title</h3>"); ?>
        <!-- <div class="map">
          <figure class="">
          <iframe src="../https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
          </figure>
        </div> -->
      </div>
      <div class="grid_6">
        <?php echo("<div class='text1 tx__1'>$title1</div>"); ?>
          <form id="form" >
            <div class="form_spinner">
              <img src="../images/Preloader_4.gif" alt="">
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
                <label class="name">
                  <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters" />
                  <span class="empty-message">*This field is required.</span>
                  <span class="error-message">*This is not a valid name.</span>
                </label>
                <label class="email">
                  <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                  <span class="empty-message">*This field is required.</span>
                  <span class="error-message">*This is not a valid email.</span>
                </label>
                <label class="phone">
                  <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers"/>
                  <span class="empty-message">*This field is required.</span>
                  <span class="error-message">*This is not a valid phone.</span>
                </label>
                <label class="message">
                  <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                  <span class="empty-message">*This field is required.</span>
                  <span class="error-message">*The message is too short.</span>
                </label>
                <div class="clear"></div>
                <div class="btns">
                  <a href="#" data-type="reset" class="btn">clear</a>
                  <a href="#" data-type="submit" class="btn">send</a>
                </div>
          </form>
      </div>
      <div class="grid_6">
        <?php echo("<div class='text1 tx__1'>$head</div>"); ?>
       <?php echo(" <p>$line1<span class='color1 fw1'><a href='../http://www.templatemonster.com/' rel='nofollow'>$line2</a></span>. </p>"); ?>
        <?php echo("<p>$line3 <span class='color1 fw1'><a href='../http://www.templatetuning.com/' rel='nofollow'>$line4</a></span>.</p>"); ?>
        <p><?php echo($contact); ?>
        <?php echo("$email <a href='#'>$email1</a>"); ?>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<?php include("../footer.php");  ?>
