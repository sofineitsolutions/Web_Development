<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`about`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$about_us = $res['about_us'];
$home = $res['home'];
$about_us1 = $res['about_us1'];
$life = $res['life'];
$here_to = $res['here_to'];
$des1 = $res['des1'];
$service = $res['service'];
$des2 = $res['des2'];
$world1 = $res['world1'];
$des3 = $res['des3'];
$world2 = $res['world2'];
$des4 = $res['des4'];
$world3 = $res['world3'];
$des5 = $res['des5'];
$world4 = $res['world4'];
$des6 = $res['des6'];
$feedaback = $res['feedaback'];
$feedback_des = $res['feedback_des'];
$access = $res['access'];
$name = $res['name'];
$prof = $res['prof'];
$access1 = $res['access1'];
$name1 = $res['name1'];
$prof1 = $res['prof1'];
$access2 = $res['access2'];
$name2 = $res['name2'];
$prof2 = $res['prof2'];
$insta = $res['insta'];
}
}
else"0 result";

$link->close();


/***********about_us************/
// $about_us="About Us";
// $home="Home";
// $about_us1="About Us";
// $life="We’ve made a life </br>that will change you";
// $here_to="We are here to listen from you deliver exellence";
// $des1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et
// dolore magna aliqua. Ut enim ad minim.";
// $service="Services Offered by Us";
// $des2="If you are looking at blank cassettes on the web, you may be very confused at the difference in price. 
// You may see some for as low as $.17 each.";
// $world1="Spreading </br>Peace to world";
// $des3="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world2="Spreading </br>Peace to world";
// $des4="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world3="Spreading </br>Peace to world";
// $des5="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world4="Spreading </br>Peace to world";
// $des6="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// //client feedback
// $feedaback="Clients Feedback";
// $feedback_des="Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderitin.";
// $access="“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”";
// $name="Mark Alviro Wiens";
// $prof="CEO at Google";
// $access1="“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”";
// $name1="Mark Alviro Wiens";
// $prof1="CEO at Google";
// $access2="“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”";
// $name2="Mark Alviro Wiens";
// $prof2="CEO at Google";
// //instagram
// $insta="Follow us on instagram";
$q="About Me";
$r="Do you want to be even more successful? Learn to love learning and growth.
The more effort you put into improving your skills,";
$s="Copyright &copy;";
$t="All rights reserved | This template is made with ";
$u="Colorlib";
$v="Newsletter";
$x="Stay updated with our latest trends";
$w="follow Me";
$y="Let us be social";
?>
