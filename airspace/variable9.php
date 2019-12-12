<?php 

/*----------------------------blog-single.php------------------------*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin9")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
$tit1 = $res['tit1'];
$tit2 = $res['tit2'];

$h = $res['h'];
$date = $res['date'];
$des = $res['des'];
$des1 = $res['des1'];
$des2 = $res['des2'];
$des3 = $res['des3'];
$info = $res['info'];

$h1 = $res['h1'];
$date1 = $res['date1'];
$des4 = $res['des4'];
$des5 = $res['des5'];
$des6 = $res['des6'];
$des7 = $res['des7'];
$info1 = $res['info1'];

$h2 = $res['h2'];
$date2 = $res['date2'];
$des8 = $res['des8'];
$des9 = $res['des9'];
$des10 = $res['des10'];
$des11 = $res['des11'];
$info2 = $res['info2'];

$h3 = $res['h3'];
$date3 = $res['date3'];
$des12 = $res['des12'];
$des13 = $res['des13'];
$des14= $res['des14'];
$des15 = $res['des15'];
$info3 = $res['info3'];

$h4 = $res['h4'];
$date4 = $res['date4'];
$des16 = $res['des16'];
$des17 = $res['des17'];
$des18 = $res['des18'];
$des19 = $res['des19'];
$info4 = $res['info4'];

$h5 = $res['h5'];
$date5 = $res['date5'];
$des20 = $res['des20'];
$des21 = $res['des21'];
$des22 = $res['des22'];
$des23 = $res['des23'];
$info5 = $res['info5'];

}
}
else"0 result";

$conn1->close();

/* ------------------blog-grid.php---------------- */
// $tit1="Blog";
// $tit2="Blog Full Width";

// $h="How To Wear Bright Shoes";
// $date="20, MAR 2017";
// $des="POSTED BY ADMIN";
// $des1=" LIFESTYLE";
// $des2="TRAVEL";
// $des3="FASHION";
// $info="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";

// $h1="Two Ways To Wear Straight Shoes";
// $date1="20, MAR 2017";
// $des4="POSTED BY ADMIN";
// $des5=" LIFESTYLE";
// $des6="TRAVEL";
// $des7="FASHION";
// $info1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";

// $h2="Making A Denim Statement";
// $date2="20, MAR 2017";
// $des8="POSTED BY ADMIN";
// $des9=" LIFESTYLE";
// $des10="TRAVEL";
// $des11="FASHION";
// $info2="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";

// $h3="Standard Text Post";
// $date3="20, MAR 2017";
// $des12="POSTED BY ADMIN";
// $des13=" LIFESTYLE";
// $des14="TRAVEL";
// $des15="FASHION";
// $info3="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";

// $h4="Standard Audio Post";
// $date4="20, MAR 2017";
// $des16="POSTED BY ADMIN";
// $des17=" LIFESTYLE";
// $des18="TRAVEL";
// $des19="FASHION";
// $info4="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";

// $h5="Standard vidio Post";
// $date5="20, MAR 2017";
// $des20="POSTED BY ADMIN";
// $des21=" LIFESTYLE";
// $des22="TRAVEL";
// $des23="FASHION";
// $info5="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.";


// $des1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!";
// $tdes2="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.";
?>