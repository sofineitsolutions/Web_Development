<?php 
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `daren`.`category`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title1 = $res['title1'];
$name1 = $res['name1'];
$date1 = $res['date1'];
$stitle1 = $res['stitle1'];
$title2 = $res['title2'];
$name2 = $res['name2'];
$date2 = $res['date2'];
$stitle2 = $res['stitle2'];
$title3 = $res['title3'];
$name3 = $res['name3'];
$date3 = $res['date3'];
$stitle3 = $res['stitle3'];
$title4 = $res['title4'];
$name4 = $res['name4'];
$date4 = $res['date4'];
$stitle4 = $res['stitle4'];
$title5 = $res['title5'];
$name5 = $res['name5'];
$date5 = $res['date5'];
$stitle5 = $res['stitle5'];
$name6 = $res['name6'];
$date6 = $res['date6'];
$stitle6 = $res['stitle6'];
$name7 = $res['name7'];
$date7 = $res['date7'];
$stitle7 = $res['stitle7'];
$name8 = $res['name8'];
$date8 = $res['date8'];
$stitle8 = $res['stitle8'];
}
}
else"0 result";

$link->close();
// $title1="abstract design";
// $name1="By Michal";
// $date1="/ March 30 , 2019";
// $stitle1="Called face there light this said wherein replenish sadin made green grass";
// $title2="abstract design";
// $name2="By Michal";
// $date2="/ March 30 , 2019";
// $stitle2="Called face there light this said wherein replenish sadin made green grass";
// $title3="abstract design";
// $name3="By Michal";
// $date3="/ March 30 , 2019";
// $stitle3="Called face there light this said wherein replenish sadin made green grass";
// $title4="abstract design";
// $name4="By Michal";
// $date4="/ March 30 , 2019";
// $stitle4="Called face there light this said wherein replenish sadin made green grass";
// $title5="abstract design";
// $name5="By Michal";
// $date5="/ March 30 , 2019";
// $stitle5="Called face there light this said wherein replenish sadin made green grass";
// /*******************feature post *******************88*/
// $name6="By Michal";
// $date6="/ March 30 , 2019";
// $stitle6="Subdue lesser beast winged bearing meat tree one";
// $name7="By Michal";
// $date7="/ March 30 , 2019";
// $stitle7="Subdue lesser beast winged bearing meat tree one";
// $name8="By Michal";
// $date8="/ March 30 , 2019";
// $stitle8="Subdue lesser beast winged bearing meat tree one";
?>