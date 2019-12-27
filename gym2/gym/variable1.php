<?php 
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `gym`.`about` ")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title1 = $res['title1'];
$des1 = $res['des1'];
$title2 = $res['title2'];
$des2 = $res['des2'];
$ftitle1 = $res['ftitle1'];
$fdes1 = $res['fdes1'];
$ftitle2 = $res['ftitle2'];
$fdes2 = $res['fdes2'];
$ftitle3 = $res['ftitle3'];
$fdes3 = $res['fdes3'];
$ftitle4 = $res['ftitle4'];
$fdes4 = $res['fdes4'];
$title3 = $res['title3'];
$title4 = $res['title4'];
$des3 = $res['des3'];
$name1 = $res['name1'];
$Trainer1 = $res['Trainer1'];
$name2 = $res['name2'];
$Trainer2 = $res['Trainer2'];
$name3 = $res['name3'];
$Trainer3 = $res['Trainer3'];
$offer =$res['offer'];
}
}
else"0 result";

$link->close();
// $title1="About Us";
// $des1="There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.";
// $title2="Our Features";
// $des2="There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.";
// $ftitle1="Weightlifting";
// $fdes1="There are many variations of passages of lorem Ipsum available.";
// $ftitle2="Specific Muscles";
// $fdes2="There are many variations of passages of lorem Ipsum available.";
// $ftitle3="Flex Your Muscles";
// $fdes3="There are many variations of passages of lorem Ipsum available.";
// $ftitle4="Cardio Exercises";
// $fdes4="There are many variations of passages of lorem Ipsum available.";
// $title3="View More";
// $title4="Our Trainers";
// $des3="There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.";
// $name1="Jessica Mino";
// $Trainer1="Woman Trainer";
// $name2="Amit Khan";
// $Trainer2="Woman Trainer";
// $name3="Paulo Rolac";
// $Trainer3="Men Trainer";
// $offer="A Big Offer for<br> This Summer";

?>