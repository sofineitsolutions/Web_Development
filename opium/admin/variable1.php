<?php



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'opium');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin1")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
$gad = $res['gad'];
$date = $res['date'];
$no = $res['no'];
$tag = $res['tag'];
$des = $res['des'];

$gad1 = $res['gad1'];
$date1 = $res['date1'];
$no1 = $res['no1'];
$tag1 = $res['tag1'];
$des1 = $res['des1'];

$gad2 = $res['gad2'];
$date2 = $res['date2'];
$no2 = $res['no2'];
$tag2 = $res['tag2'];
$des2 = $res['des2'];

$blog = $res['blog'];
$blog_date = $res['blog_date'];
$blog_no = $res['blog_no'];
$blog_tag = $res['blog_tag'];
$blog_des = $res['blog_des'];

$blog1 = $res['blog1'];
$blog_date1 = $res['blog_date1'];
$blog_no1 = $res['blog_no1'];
$blog_tag1 = $res['blog_tag1'];
$blog_des1 = $res['blog_des1'];

$blog2 = $res['blog2'];
$blog_date2 = $res['blog_date2'];
$blog_no2 = $res['blog_no2'];
$blog_tag2 = $res['blog_tag2'];
$blog_des2 = $res['blog_des2'];

$blog3 = $res['blog3'];
$blog_date3 = $res['blog_date3'];
$blog_no3 = $res['blog_no3'];
$blog_tag3 = $res['blog_tag3'];
$blog_des3 = $res['blog_des3'];

$blog4 = $res['blog4'];
$blog_date4 = $res['blog_date4'];
$blog_no4 = $res['blog_no4'];
$blog_tag4 = $res['blog_tag4'];
$blog_des4 = $res['blog_des4'];

$blog5 = $res['blog5'];
$blog_date5 = $res['blog_date5'];
$blog_no5 = $res['blog_no5'];
$blog_tag5 = $res['blog_tag5'];
$blog_des5 = $res['blog_des5'];

$blog6 = $res['blog6'];
$blog_date6 = $res['blog_date6'];
$blog_no6 = $res['blog_no6'];
$blog_tag6 = $res['blog_tag6'];
$blog_des6 = $res['blog_des6'];

$blog7 = $res['blog7'];
$blog_date7 = $res['blog_date7'];
$blog_no7 = $res['blog_no7'];
$blog_tag7 = $res['blog_tag7'];
$blog_des7 = $res['blog_des7'];

$bloger = $res['bloger'];
$post = $res['post'];
$bloger_blog = $res['bloger_blog'];
    

}
}
else"0 result";

$conn1->close();














// <!--================Home Banner Area =================-->//

// $gad="Gadgets";
// $date="March 14, 2018";
// $no="05";
// $tag="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $des="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.";

// $gad1="Gadgets";
// $date1="March 14, 2018";
// $no1="05";
// $tag1="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $des1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.";

// $gad2="Gadgets";
// $date2="March 14, 2018";
// $no2="05";
// $tag2="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $des2="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.";

//   //<!--================Blog Area =================-->//
// $blog="Gadgets";
// $blog_date=" March 14, 2018";
// $blog_no="05";
// $blog_tag="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $blog1="Gadgets";
// $blog_date1=" March 14, 2018";
// $blog_no1="05";
// $blog_tag1="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $blog2="Gadgets";
// $blog_date2=" March 14, 2018";
// $blog_no2="05";
// $blog_tag2="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des2="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $blog3="Gadgets";
// $blog_date3=" March 14, 2018";
// $blog_no3="05";
// $blog_tag3="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des3="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $blog4="Gadgets";
// $blog_date4=" March 14, 2018";
// $blog_no4="05";
// $blog_tag4="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des4="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $blog5="Gadgets";
// $blog_date5=" March 14, 2018";
// $blog_no5="05";
// $blog_tag5="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des5="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $blog6="Gadgets";
// $blog_date6=" March 14, 2018";
// $blog_no6="05";
// $blog_tag6="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des6="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";


// $blog7="Gadgets";
// $blog_date7=" March 14, 2018";
// $blog_no7="05";
// $blog_tag7="Nest Protect: 2nd Gen Smoke + CO Alarm";
// $blog_des7="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";

// $bloger="Charlie Barber";
// $post="Senior blog writer";
// $bloger_blog="Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.";
// 

?>