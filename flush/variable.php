<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`index`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title = $res['title'];
$des = $res['des'];
$button1 = $res['button1'];
$world = $res['world'];
$des1 = $res['des1'];
$button2 = $res['button2'];
$world1 = $res['world1'];
$des2 = $res['des2'];
$button3 = $res['button3'];
$world2 = $res['world2'];
$des3 = $res['des3'];
$button4 = $res['button4'];
$world3 = $res['world3'];
$des4 = $res['des4'];
$button5 = $res['button5'];
$service = $res['service'];
$des5 = $res['des5'];
$world4 = $res['world4'];
$des6 = $res['des6'];
$world5 = $res['world5'];
$des7 = $res['des7'];
$world6 = $res['world6'];
$des8 = $res['des8'];
$world7 = $res['world7'];
$des9 = $res['des9'];
$feedback = $res['feedback'];
$feeedback_des = $res['feeedback_des'];
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

/*************index.php********************/
// $title="Nature </br>Photoshoot";
// $des="If you are looking at blank cassettes on the web, you may be very confused at the difference in price. 
// You may see some for as low as $.17 each.";
// $button1="Explore Gallery";
// $world="Spreading </br>Peace to world";
// $des1="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button2="Explore Gallery";
// $world1="Spreading </br>Peace to world";
// $des2="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button3="Explore Gallery";
// $world2="Spreading </br>Peace to world";
// $des3="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button4="Explore Gallery";
// $world3="Spreading </br>Peace to world";
// $des4="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button5="Explore Gallery";
// //Services
// $service="Services Offered by Us";
// $des5="If you are looking at blank cassettes on the web, you may be very confused at the difference in price. 
// You may see some for as low as $.17 each.";
// $world4="Spreading </br>Peace to world";
// $des6="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world5="Spreading </br>Peace to world";
// $des7="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world6="Spreading </br>Peace to world";
// $des8="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world7="Spreading </br>Peace to world";
// $des9="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// //client feedback
// $feedback="Clients Feedback";
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

/******************h.php **************/
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
