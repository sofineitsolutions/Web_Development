<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `nilesh`.`about` ")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
$name = $res['name'];
$m2 = $res['m2'];
$name3 = $res['name3'];
$des = $res['des'];
$twitter = $res['twitter'];
$facebook = $res['facebook'];
$instagram = $res['instagram'];
$theme1 = $res['theme1'];
$count1 = $res['count1'];
$theme2 = $res['theme2'];
$theme3 = $res['theme3'];
$theme4 = $res['theme4'];
$follow = $res['follow'];    
}
}
else"0 result";

$link->close();
// $name="My Name is Nilesh Rane";
// $m2="Nice To Meet You";
// $name3="My Name is Nilesh Rane";
// $des="Sports helps build talent and hobbies so that the people can be better at delivering them for personal and professional purposes. Sports also serve as a good leisure activity meant to relieve one from physical and emotional stress hence a healthy living. ";
// $twitter="https://twitter.com/nileshranem";
// $facebook="https://www.facebook.com/ranenileshsports/";
// $instagram="https://www.instagram.com/nileshrane_sports/?hl=en";
// $theme1="Pounds of Equipment";
// $count1="0";
// $theme2="Studio Session";
// $theme3="Finished Photosessions";
// $theme4="Happy Clients";
// $follow="Follow me on Instagram";
?>