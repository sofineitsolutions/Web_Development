<?php
/*<!------------------------------------------------- service.php -->*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin2")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
  $title11 = $res['title'];
  $describe11 = $res['des'];
  $title12 = $res['theme_tit'];
  $describe12 = $res['theme_des'];
    $ss1 = $res['theme1_tit'];
    $dd1 = $res['theme1_des'];
    $ss2 = $res['theme2_tit'];
    $dd1 = $res['theme2_des'];
    $ss3 = $res['theme3_tit'];
    $dd1 = $res['theme3_des'];
    $ss4 = $res['what_do'];
    $ss5 = $res['best1_tit'];
    $ss6 = $res['best1_des'];
    $ss5 = $res['best2_tit'];
    $ss6 = $res['best2_des'];
    $ss5 = $res['best3_tit'];
    $ss6 = $res['best3_des'];
    $ss5 = $res['best4_tit'];
    $ss6 = $res['best4_des'];
    $ss5 = $res['best5_tit'];
    $ss6 = $res['best5_des'];
    $ss5 = $res['best6_tit'];
    $ss6 = $res['best6_des'];
    $ss7 = $res['story_tit'];
    $ss8 = $res['story_des'];

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