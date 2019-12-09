 <?php
    $title="Doggax";
    $header1="Home";
    $header2="Pages";
    $p1="Gallery";
    $p2="Full Width";
    $p3="Sidebar Left";
    $p4="Sidebar Right";
    $p5="Basic Grid";
    $header3="Dropdown";
    $d1="Level 2";
    $d2="Level 2 + Drop";
    $d3="Level 3";
    $header4="Link Text";
 ?>
 <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <?php echo("<h1><a href='index.html'>" . $title . "</a></h1>"); ?>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <?php echo("<li class='active'><a href='index.php'>" . $header1 . "</a></li>"); ?>
        <?php echo("<li><a class='drop' href='#'>" . $header2 . "</a>"); ?>
          <ul>
            <?php echo("<li><a href='gallery.php'>" . $p1 . "</a></li>");
            echo("<li><a href='full-width.php'>" . $p2 . "</a></li>");
            echo("<li><a href='sidebar-left.php'>" . $p3 . "</a></li>");
            echo("<li><a href='sidebar-right.php'>" . $p4 . "</a></li>");
            echo("<li><a href='basic-grid.php'>" . $p5 . "</a></li>"); ?>
          </ul>
        </li>
        <li> <?php echo("<a class='drop' href='#''>" . $header3 . "</a>");  ?>
          <ul>
            <?php echo("<li><a href='#'>" . $d1 . "</a></li>"); ?>
            <?php echo("<li><a class='drop' href='#'>" . $d2 . "</a>"); ?>
              <ul>
               <?php  echo("<li><a href='#'>" . $d3 . "</a></li>"); ?>
                <?php echo("<li><a href='#'>" . $d3 . "</a></li>"); ?>
                <?php echo("<li><a href='#'>" . $d3 . "</a></li>"); ?>
              </ul>
            </li>
            <?php echo("<li><a href='#'>" . $d1 . "</a></li>"); ?>
          </ul>
        </li>
        <?php echo("<li><a href='#'>" . $header4 . "</a></li>"); ?>
        <?php echo("<li><a href='#'>" . $header4 . "</a></li>"); ?>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>