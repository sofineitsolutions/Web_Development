<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `gym`.`pricing` ")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title1 = $res['title1'];
$des1 = $res['des1'];
$ptitle1 = $res['ptitle1'];
$price1 = $res['price1'];
$pdes1 = $res['pdes1'];
$pdes2 = $res['pdes2'];
$pdes3 = $res['pdes3'];
$pdes4 = $res['pdes4'];
$ptitle2 = $res['ptitle2'];
$price2 = $res['price2'];
$pdes5 = $res['pdes5'];
$pdes6 = $res['pdes6'];
$pdes7 = $res['pdes7'];
$pdes8 = $res['pdes8'];
$ptitle3 = $res['ptitle3'];
$price3 = $res['price3'];
$pdes9 = $res['pdes9'];
$pdes10 = $res['pdes10'];
$pdes11 = $res['pdes11'];
$pdes12 = $res['pdes12'];
$title2 = $res['title2'];
$off =$res['off'];
$des2 = $res['des2'];
$title3 = $res['title3'];
$des3 = $res['des3'];
$ftitle1 = $res['ftitle1'];
$fdes1 = $res['fdes1'];
$ftitle2 = $res['ftitle2'];
$fdes2 = $res['fdes2'];
$ftitle3 = $res['ftitle3'];
$fdes3 =$res['fdes3'];
$ftitle4 = $res['ftitle4'];
$fdes4 = $res['fdes4'];
$title4 =$res['title4'];
}
}
else"0 result";

$link->close();
// $title1="Pricing";
// $des1="There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.";
// $ptitle1="Beginner";
// $price1="$45/m";
// $pdes1="24h unlimited access";
// $pdes2="Trainer Advice";
// $pdes3="Locker + Bathroom";
// $pdes4="Personal trainer";
// $ptitle2="Expert";
// $price2="$45/m";
// $pdes5="24h unlimited access";
// $pdes6="Trainer Advice";
// $pdes7="Locker + Bathroom";
// $pdes8="Personal trainer";
// $ptitle3="Pro";
// $price3="$45/m";
// $pdes9="24h unlimited access";
// $pdes10="Trainer Advice";
// $pdes11="Locker + Bathroom";
// $pdes12="Personal trainer";
// $title2="A Big Offer for <br> This Summer";
// $off="50% Off";
// $des2="There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.";
// $title3="Our Features";
// $des3="There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.";
// $ftitle1="Weightlifting";
// $fdes1="There are many variations of passages of lorem Ipsum available.";
// $ftitle2="Specific Muscles";
// $fdes2="There are many variations of passages of lorem Ipsum available.";
// $ftitle3="Flex Your Muscles";
// $fdes3="There are many variations of passages of lorem Ipsum available.";
// $ftitle4="Cardio Exercises";
// $fdes4="There are many variations of passages of lorem Ipsum available.";
// $title4="A Big Offer for <br>This Summer";

?>