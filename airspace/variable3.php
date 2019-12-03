<?php
//<!------------------------------------------------- about.php -->
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin3")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
  $tit14 = $res['title'];
  $des14 = $res['des'];
  $dddd1 = $res['theme_tit'];
  $p1 = $res['theme_des'];
    $list1 = $res['list1'];
    $list2 = $res['list2'];
    $list3 = $res['list3'];
    $list4 = $res['list4'];
    $list5 = $res['list5'];
    $list6 = $res['list6'];
    $theme1 = $res['block_tit'];
    $list7 = $res['block1_tit'];
    $theme_des = $res['block1_des'];
    $list8 = $res['block2_tit'];
    $theme_des = $res['block2_des'];
    $list9 = $res['block3_tit'];
    $theme_des = $res['block3_des'];
    $list10 = $res['block4_tit'];
    $theme_des = $res['block4_des'];
    $list11 = $res['block5_tit'];
    $theme_des = $res['block5_des'];
    $list12 = $res['block6_tit'];
    $theme_des = $res['block6_des'];
    $view1 = $res['view1'];
    $view2 = $res['view2'];
    $view3 = $res['view3'];
    $view4 = $res['view4'];
    $vision = $res['vision'];
    $mision = $res['mision'];
    $approch = $res['approch'];
    $end = $res['exp_tit'];
    $end_des = $res['exp_des'];
    //$ss8 = $res['story_des'];

}
}
else"0 result";

$conn1->close();



// $title11="Service";
// $describe11="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!";
// $title12="Creative UX/UI Design Agency";
// $describe12="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate soluta corporis odit, optio cum! Accusantium numquam ab, natus excepturi architecto earum ipsa aliquam, illum, omnis rerum, eveniet officia nihil. Eum quod iure nulla, soluta architecto distinctio. Nesciunt odio ullam expedita, neque fugit maiores sunt perferendis placeat autem animi, nihil quis suscipit quibusdam ut reiciendis doloribus natus nemo id quod illum aut culpa perspiciatis consequuntur tempore? Facilis nam vitae iure quisquam eius harum consequatur sapiente assumenda, officia voluptas quas numquam placeat, alias molestias nisi laudantium nesciunt perspiciatis suscipit hic voluptate corporis id distinctio earum. Dolor reprehenderit fuga dolore officia adipisci neque!";

// $ss1="Interface Design";
// $dd1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe enim impedit repudiandae omnis est temporibus.";

// $ss2="Product Branding";
// $ss3="Game Development";

// $ss4="What we do best";
// $ss5="User research";
// $ss6="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.";

// $ss7="We design delightful digital experiences.";
// $ss8="Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve achieved for other clients, and meet our highly experienced Team who just love to design.";

$button3="Tell Us Your Story";

?>