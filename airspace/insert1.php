<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['theme_tit'];
$d = $_POST['theme_des'];
$e = $_POST['theme1_tit'];
$f = $_POST['theme1_des'];
$g = $_POST['theme2_tit'];
$h = $_POST['theme2_des'];
$i = $_POST['theme3_tit'];
$j = $_POST['theme3_des'];
$k = $_POST['what_do'];
$l = $_POST['best1_tit'];
$m = $_POST['best1_des'];
$n = $_POST['best2_tit'];
$o = $_POST['best2_des'];
$p = $_POST['best3_tit'];
$q = $_POST['best3_des'];
$r = $_POST['best4_tit'];
$s = $_POST['best4_des'];
$t = $_POST['best5_tit'];
$u = $_POST['best5_des'];
$v = $_POST['best6_tit'];
$w = $_POST['best6_des'];
$x = $_POST['story_tit'];
$y = $_POST['story_des'];
//$z = $_POST['view4'];
//$a1 = $_POST['message'];
// $d = $_POST['collage_nm'];
// $e = $_POST['referance'];
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "login");

// // Check connection
// if($link === false){
// die("ERROR: Could not connect. " . mysqli_connect_error());
// }
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin2` (`title`, `des`, `theme_tit`, `theme_des`, `theme1_tit`, `theme1_des`, `theme2_tit`, `theme2_des`, `theme3_tit`, `theme3_des`, `what_do`, `best1_tit`, `best1_des`, `best2_tit`, `best2_des`, `best3_tit`, `best3_des`, `best4_tit`, `best4_des`, `best5_tit`, `best5_des`, `best6_tit`, `best6_des`, `story_tit`, `story_des`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>