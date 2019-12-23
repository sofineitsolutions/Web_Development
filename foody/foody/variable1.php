<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `foody`.`recipies` ")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$stitle3 = $res['stitle3'];
$menu1 = $res['menu1'];
$mdes1 = $res['mdes1'];
$mprice1 = $res['mprice1'];
$menu2 = $res['menu2'];
$mdes2 = $res['mdes2'];
$mprice2 = $res['mprice2'];
$menu3 = $res['menu3'];
$name3 = $res['name3'];
$mprice3 = $res['mprice3'];
$menu4 = $res['menu4'];
$mdes4 = $res['mdes4'];
$mprice4 = $res['mprice4'];
$menu5 = $res['menu5'];
$mdes5 = $res['mdes5'];
$mprice5 = $res['mprice5'];
$menu6 = $res['menu6'];
$mdes6 = $res['mdes6'];
$mprice6 = $res['mprice6'];
$menu7 = $res['menu7'];
$mdes7 = $res['mdes7'];
$mprice7 = $res['mprice7'];
$menu8 = $res['menu8'];
$mdes8 = $res['mdes8'];
$mprice8 = $res['mprice8'];
}
}
else"0 result";

$link->close();

$stitle3="Our Recipes";
$menu1="Grilled Caesar salad, shaved reggiano";
$mdes1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice1="$12.00";
$menu2="Spicy Calamari and beans";
$mdes2="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice2="$12.00";
$menu3="Bacon wrapped wild gulf prawns";
$mdes3="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice3="$18.00";
$menu4="Seared ahi tuna fillet*, honey-ginger sauce";
$mdes4="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice4="$16.00";
$menu5="Grilled Caesar salad, shaved reggiano";
$mdes5="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice5="$12.00";
$menu6="Spicy Calamari and beans";
$mdes6="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice6="$12.00";
$menu7="Bacon wrapped wild gulf prawns";
$mdes7="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice7="$18.00";
$menu8="Seared ahi tuna fillet*, honey-ginger sauce";
$mdes8="Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...";
$mprice8="$16.00";

 ?>