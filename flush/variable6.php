<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`contact`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$contact_us = $res['contact_us'];
$home = $res['home'];
$contact_us = $res['contact_us'];
$add1 = $res['add1'];
$add2 = $res['add2'];
$mobile_no = $res['mobile_no'];
$time = $res['time'];
$email = $res['email'];
$quotes = $res['quotes'];
$insta = $res['insta'];
}
}
else"0 result";
/***************************Conatct.php *******************/
// $contact_us="Contact Us";
// $home="Home";
// $contact_us1="Contact Us";
// $add1="California, United States";
// $add2="Santa monica bullevard";
// $mobile_no="00 (440) 9865 562";
// $time="Mon to Fri 9am to 6 pm";
// $email="support@colorlib.com";
// $quotes="Send us your query anytime!";
// $insta="Follow us on instagram";
/************H.php ****************/
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
