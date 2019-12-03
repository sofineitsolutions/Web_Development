<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['theme_tit'];
$d = $_POST['theme_des'];
$e = $_POST['list1'];
$f = $_POST['list2'];
$g = $_POST['list3'];
$h = $_POST['list4'];
$i = $_POST['list5'];
$j = $_POST['list6'];
$k = $_POST['block_tit'];
$l = $_POST['block1_tit'];
$m = $_POST['block1_des'];
$n = $_POST['block2_tit'];
$o = $_POST['block2_des'];
$p = $_POST['block3_tit'];
$q = $_POST['block3_des'];
$r = $_POST['block4_tit'];
$s = $_POST['block4_des'];
$t = $_POST['block5_tit'];
$u = $_POST['block5_des'];
$v = $_POST['block6_tit'];
$w = $_POST['block6_des'];
$x = $_POST['view1'];
$x1 = $_POST['view2'];
$x2 = $_POST['view3'];
$x3 = $_POST['view4'];
$x4 = $_POST['vision'];
$x5 = $_POST['mission'];
$x6 = $_POST['approch'];
$x7 = $_POST['exp_tit'];
$y = $_POST['exp_des'];
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
$sql = "INSERT INTO `admin3` (`title`, `des`, `theme_tit`, `theme_des`, `list1`, `list2`, `list3`, `list4`, `list5`, `list6`, `block_tit`, `block1_tit`, `block1_des`, `block2_tit`, `block2_des`, `block3_tit`, `block3_des`, `block4_tit`, `block4_des`, `block5_tit`, `block5_des`, `block6_tit`, `block6_des`, `view1`, `view2`, `view3`, `view4`, `vision`, `mission`, `approch`, `exp_tit`, `exp_des`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7','$y')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>