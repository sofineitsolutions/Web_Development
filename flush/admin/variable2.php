<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`projects`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$projects = $res['projects'];
$home = $res['home'];
$projects1 = $res['projects1'];
$world1 = $res['world1'];
$des1 = $res['des1'];
$button1 = $res['button1'];
$world2 = $res['world2'];
$des2 = $res['des2'];
$button2 = $res['button2'];
$world3 = $res['world3'];
$des3 = $res['des3'];
$button3 = $res['button3'];
$world4 = $res['world4'];
$des4 = $res['des4'];
$button4 = $res['button4'];
$insta = $res['insta'];
}
}
else"0 result";

$link->close();

/*************Projects.php*************/
// $projects="Projects";
// $home="Home";
// $projects1="Projects";
// $world1="Spreading </br>Peace to world";
// $des1="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button1="Explore Gallery";
// $world2="Spreading </br>Peace to world";
// $des2="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button2="Explore Gallery";
// $world3="Spreading </br>Peace to world";
// $des3="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button3="Explore Gallery";
// $world4="Spreading </br>Peace to world";
// $des4="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button4="Explore Gallery";
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
