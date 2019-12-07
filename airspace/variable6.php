<?php 
/* ------------------blog-full-width.php---------------- */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin6")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
  $tit1 = $res['title'];
$des = $res['des'];
$date1 = $res['date1'];
$des1 = $res['des1'];
$des2 = $res['des2'];
$des3 = $res['des3'];
$des4 = $res['des4'];
$h1 = $res['heading1'];
$para1 = $res['para1'];

$date2 = $res['date2'];
$des5 = $res['des5'];
$des6 = $res['des6'];
$des7 = $res['des7'];
$des8 = $res['des8'];
$h2 = $res['heading2'];
$para2 = $res['para2'];

$date3 = $res['date3'];
$des9 = $res['des9'];
$des10 = $res['des10'];
$des11 = $res['des11'];
$des12 = $res['des12'];
$h3 = $res['heading3'];
$para3 = $res['para3'];

$date4 = $res['date4'];
$des13 = $res['des13'];
$des14 = $res['des14'];
$des15 = $res['des15'];
$des15 = $res['des16'];
$h4 = $res['heading4'];
$para4 = $res['para4'];

$date5 = $res['date5'];
$des17 = $res['des17'];
$des18 = $res['des18'];
$des19 = $res['des19'];
$des20 = $res['des20'];
$h5 = $res['heading5'];
$para5 = $res['para5'];

$date6 = $res['date6'];
$des21 = $res['des21'];
$des22 = $res['des22'];
$des23 = $res['des23'];
$des24 = $res['des24'];
$h6 = $res['heading6'];
$para6 = $res['para6'];


}
}
else"0 result";

$conn1->close();


// $tit1="Blog Full Width";
// $des="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!";

// $h1="How To Wear Bright Shoes";
// $para1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";
// $date1="20, MAR 2017";
// $des1="POSTED BY ADMIN";
// $des2=" LIFESTYLE";
// $des3="TRAVEL";
// $des4="FASHION";



// $h2="Two Ways To Wear Straight Shoes";
// $para2="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";
// $date2="20, MAR 2017";
// $des5="POSTED BY ADMIN";
// $des6=" LIFESTYLE";
// $des7="TRAVEL";
// $des8="FASHION";

// $h3="Making A Denim Statement";
// $para3="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";
// $date3="20, MAR 2017";
// $des9="POSTED BY ADMIN";
// $des10=" LIFESTYLE";
// $des11="TRAVEL";
// $des12="FASHION";

// $h4="Standard Text Post";
// $para4="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";
// $date4="20, MAR 2017";
// $des13="POSTED BY ADMIN";
// $des14=" LIFESTYLE";
// $des15="TRAVEL";
// $des16="FASHION";

// $h5="Standard Audio Post";
// $para5="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";
// $date5="20, MAR 2017";
// $des17="POSTED BY ADMIN";
// $des18=" LIFESTYLE";
// $des19="TRAVEL";
// $des20="FASHION";

// $h6="Standard vidio Post";
// $para6="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";
// $date6="20, MAR 2017";
// $des21="POSTED BY ADMIN";
// $des22=" LIFESTYLE";
// $des23="TRAVEL";
// $des24="FASHION";

?>