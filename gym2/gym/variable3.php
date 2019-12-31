<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `gym`.`blog` ")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
$title1 = $res['title1'];
$tag1 = $res['tag1'];
$tag2 = $res['tag2'];
$btitle1 = $res['btitle1'];
$des1 = $res['des1'];
$Travel_Lifestyle1 = $res['Travel_Lifestyle1'];
$comments1 = $res['comments1'];
$tag3 = $res['tag3'];
$tag4 = $res['tag4'];
$btitle2 = $res['btitle2'];
$des2 = $res['des2'];
$Travel_Lifestyle2 = $res['Travel_Lifestyle2'];
$comments2 = $res['comments2'];
$tag5 = $res['tag5'];
$tag6 = $res['tag6'];
$btitle3 = $res['btitle3'];
$des3 = $res['des3'];
$Travel_Lifestyle3 = $res['Travel_Lifestyle3'];
$comments3 = $res['comments3'];
$tag7 = $res['tag7'];
$tag8 = $res['tag8'];
$btitle4 = $res['btitle4'];
$des4 = $res['des4'];
$Travel_Lifestyle4 = $res['Travel_Lifestyle4'];
$comments4 = $res['comments4'];
$tag9 = $res['tag9'];
$tag10 = $res['tag10'];
$btitle5 = $res['btitle5'];
$des5 = $res['des5'];
$Travel_Lifestyle5 = $res['Travel_Lifestyle5'];
$comments5 = $res['comments5'];
}
}
else"0 result";

$link->close();
// $title1="blog";
// $tag1="15";
// $tag2="Jan";
// $btitle1="Google inks pact for new 35-storey office";
// $des1="That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.";
// $Travel_Lifestyle1="Travel, Lifestyle";
// $comments1="03 Comments";
// $tag3="15";
// $tag4="Jan";
// $btitle2="Google inks pact for new 35-storey office";
// $des2="That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.";
// $Travel_Lifestyle2="Travel, Lifestyle";
// $comments2="03 Comments";
// $tag5="15";
// $tag6="Jan";
// $btitle3="Google inks pact for new 35-storey office";
// $des3="That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.";
// $Travel_Lifestyle3="Travel, Lifestyle";
// $comments3="03 Comments";
// $tag7="15";
// $tag8="Jan";
// $btitle4="Google inks pact for new 35-storey office";
// $des4="That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.";
// $Travel_Lifestyle4="Travel, Lifestyle";
// $comments4="03 Comments";
// $tag9="15";
// $tag10="Jan";
// $btitle5="Google inks pact for new 35-storey office";
// $des5="That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.";
// $Travel_Lifestyle5="Travel, Lifestyle";
// $comments5="03 Comments";
?>