<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `foody`.`admin` ")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$stitle1 = $res['stitle1'];
$des1 = $res['des1'];
$sdes1 = $res['sdes1'];
$sdes2 = $res['sdes2'];
$sdes3 = $res['sdes3'];
$sdes4 = $res['sdes4'];
$stitle2 = $res['stitle2'];
$name1 = $res['name1'];
$prof1 = $res['prof1'];
$name2= $res['name2'];
$prof2 = $res['prof2'];
$name3 = $res['name3'];
$prof3 = $res['prof3'];
$name4 = $res['name4'];
$prof4 = $res['prof4'];
$name5 = $res['name5'];
$prof5 = $res['prof5'];
$name6 = $res['name6'];
$prof6 = $res['prof6'];

}
}
else"0 result";

$link->close();
// $stitle1="The Restaurant";
// $des1="Far far away, behind the word mountains, far from the countries Vokaliaand Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
// $sdes1="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
// $sdes2="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.";
// $sdes3="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
// $sdes4="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.";
// $stitle2="Chefs";
// $name1="Mellisa Howard";
// $prof1="CEO, Co-Founder";
// $name2="Mike Richardson";
// $prof2="CEO, Co-Founder";
// $name3="Charles White";
// $prof3="CEO, Co-Founder";
// $name4="Mellisa Howard";
// $prof4="CEO, Co-Founder";
// $name5="Mike Richardson";
// $prof5="CEO, Co-Founder";
// $name6="Charles White";
// $prof6="CEO, Co-Founder";
?>