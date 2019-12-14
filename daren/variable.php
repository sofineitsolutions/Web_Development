<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `daren`.`index`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title1 = $res['title1'];
$stitle1 = $res['stitle1'];
$name1 = $res['name1'];
$date1 = $res['date1'];
$title2 = $res['title2'];
$stitle2 = $res['stitle2'];
$name2 = $res['name2'];
$date2 = $res['date2'];
$title3 = $res['title3'];
$stitle3 = $res['stitle3'];
$name3 = $res['name3'];
$date3 = $res['date3'];
$title4 = $res['title4'];
$stitle4 = $res['stitle4'];
$name4 = $res['name4'];
$date4 = $res['date4'];
$title5 = $res['title5'];
$stitle5 = $res['stitle5'];
$name5 = $res['name5'];
$date5 = $res['date5'];
$title6 = $res['title6'];
$stitle6 = $res['stitle6'];
$name6 = $res['name6'];
$date6 = $res['date6'];
$title7 = $res['title7'];
$stitle7 = $res['stitle7'];
$name7 = $res['name7'];
$date7 = $res['date7'];
$title8 = $res['title8'];
$stitle8 = $res['stitle8'];
$name8 = $res['name8'];
$date8 = $res['date8'];
$title9 = $res['title9'];
$stitle9 = $res['stitle9'];
$name9 = $res['name9'];
$date9 = $res['date9'];
$title10 = $res['title10'];
$stitle10 = $res['stitle10'];
$name10 = $res['name10'];
$date10 = $res['date10'];
$title11 = $res['title11'];
$stitle11 = $res['stitle11'];
$name11 = $res['name11'];
$date11 = $res['date11'];
$title12 = $res['title12'];
$stitle12 = $res['stitle12'];
$name12 = $res['name12'];
$date12 = $res['date12'];
$title13 = $res['title13'];
$stitle13 = $res['stitle13'];
$name13 = $res['name13'];
$date13 = $res['date13'];
$name14 = $res['name14'];
$date14 = $res['date14'];
$ptitle1 = $res['ptitle1'];
$name15 = $res['name15'];
$date15 = $res['date15'];
$ptitle2 = $res['ptitle2'];
$name16 = $res['name16'];
$date16 = $res['date16'];
$ptitle3 = $res['ptitle3'];

}
}
else"0 result";

$link->close();

// /**************************banner post ************************/
// $title1="Creative & Design";
// $stitle1="All said replenish years void </br> kind say void";
// $name1="By Michal";
// $date1="/ March 30 , 2019";
// $title2="Creative & Design";
// $stitle2="Behold given land one first face fish which all said male fruit void king saying";
// $name2="By Michal";
// $date2="/ March 30 , 2019";
// /***********************featureres *************************/
// $title3="Creative & Design";
// $stitle3="Subdue lesser beast winged bearing meat tree one";
// $name3="By Michal";
// $date3="/ March 30 , 2019";
// $title4="Art & illustration";
// $stitle4="Hath form you given fac one under behold night give";
// $name4="By Michal";
// $date4="/ March 30 , 2019";
// $title5="Creative & Design";
// $stitle5="Greater whales morning firsts you moveth morning";
// $name5="By Michal";
// $date5="/ March 30 , 2019";
// /**************** featureres********************/
// $title6="abstract design";
// $stitle6="Subdue lesser beast winged bearing meat tree one";
// $name6="By Michal";
// $date6="/ March 30 , 2019";
// $title7="illustration";
// $stitle7="Subdue lesser beast winged bearing meat tree one";
// $name7="By Michal";
// $date7="/ March 30 , 2019";
// $title8="brand identity";
// $stitle8="Subdue lesser beast winged bearing meat tree one";
// $name8="By Michal";
// $date8="/ March 30 , 2019";
// /**********************featureres ******************/
// $title9="Tours & travel";
// $stitle9="Called face there light this said wherein replenish sadin made green grass";
// $name9="By Michal";
// $date9="/ March 30 , 2019";
// $title10="branding";
// $stitle10="Called face there light this said wherein replenish sadin made green grass";
// $name10="By Michal";
// $date10="/ March 30 , 2019";
// $title11="digital art";
// $stitle11="Called face there light this said wherein replenish sadin made green grass";
// $name11="By Michal";
// $date11="/ March 30 , 2019";
// $title12="abstract design";
// $stitle12="Called face there light this said wherein replenish sadin made green grass";
// $name12="By Michal";
// $date12="/ March 30 , 2019";
// $title13="illustration";
// $stitle13="Called face there light this said wherein replenish sadin made green grass";
// $name13="By Michal";
// $date13="/ March 30 , 2019";
// /******************Popular Feeds ********************/
// $name14="By Michal";
// $date14="/ March 30 , 2019";
// $ptitle1="Subdue lesser beast winged bearing meat tree one";
// $name15="By Michal";
// $date15="/ March 30 , 2019";
// $ptitle2="Subdue lesser beast winged bearing meat tree one";
// $name16="By Michal";
// $date16="/ March 30 , 2019";
// $ptitle3="Subdue lesser beast winged bearing meat tree one";

?>