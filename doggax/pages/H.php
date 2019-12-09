<?php 
  $title1="Quis vestibulum ligula";
  $add1=" Street Name";
  $add2=" Number, Town, Postcode/Zip";
  $mob="+00 (123) 456 7890";
  $eid="info@domain.com";
  $title2="Pharetra eget nulla";
  $subtitle1="Feugiat tellus orci eget maximus est posuere quis nunc ornare erat lorem.";
  $title3="Viverra justo nec maximus";
  $subtitle2="Dictum vivamus condimentum";
  $dec1="Velit consequat sit amet praesent consectetur lacinia nulla vitae";
  $subtitle3="Massa arcu quis imperdiet";
  $dec2="Bibendum ipsum mattis a mauris ut nibh non sem iaculis finibus nullam";
?>

 <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <?php echo("<h6 class='heading'>" . $title1 . "</h6>"); ?>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <?php echo("<address>" . $add1 . "&amp;" . $add2 . "</address>"); ?>
        </li>
        <?php echo("<li><i class='fa fa-phone'></i>" . $mob . "</li>");
        echo("<li><i class='fa fa-fax'></i>" . $mob . "</li>");
        echo("<li><i class='fa fa-envelope-o'></i>" . $eid . "</li>"); ?>
      </ul>
    </div>
    <div class="one_third">
      <?php echo("<h6 class='heading'>" . $title2 . "</h6>"); 
      echo("<p class='nospace btmspace-30'>" . $subtitle1 . "</p>"); ?>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_third">
      <?php echo("<h6 class='heading'>" . $title3 . "</h6>"); ?>
      <ul class="nospace linklist">
        <li>
          <article>
            <?php echo("<h2 class='nospace font-x1'><a href='#'>" . $subtitle2 . "</a></h2>"); ?>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <?php echo("<p class='nospace'>" . $dec1 . "[&hellip;]</p>"); ?>
          </article>
        </li>
        <li>
          <article>
           <?php  echo("<h2 class='nospace font-x1'><a href='#'>" . $subtitle3 . "</a></h2>"); ?>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <?php echo("<p class='nospace'>" . $dec2 . "[&hellip;]</p>"); ?>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>