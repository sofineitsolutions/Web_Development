<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['date1'];
$d = $_POST['des1'];
$e = $_POST['des2'];
$f = $_POST['des3'];
$g = $_POST['des4'];
$h = $_POST['heading1'];
$i = $_POST['para1'];

$j = $_POST['date2'];
$k = $_POST['des5'];
$l = $_POST['des6'];
$m = $_POST['des7'];
$n = $_POST['des8'];
$o = $_POST['heading2'];
$p = $_POST['para2'];

$q = $_POST['date3'];
$r = $_POST['des9'];
$s = $_POST['des10'];
$t = $_POST['des11'];
$u = $_POST['des12'];
$v = $_POST['heading3'];
$w = $_POST['para3'];

$x = $_POST['date4'];
$y = $_POST['des13'];
$z = $_POST['des14'];
$a1 = $_POST['des15'];
$b1 = $_POST['des16'];
$c1 = $_POST['heading4'];
$d1 = $_POST['para4'];

$e1 = $_POST['date5'];
$f1 = $_POST['des17'];
$g1 = $_POST['des18'];
$h1 = $_POST['des19'];
$i1 = $_POST['des20'];
$j1 = $_POST['heading5'];
$k1 = $_POST['para5'];

$l1 = $_POST['date6'];
$m1 = $_POST['des21'];
$n1 = $_POST['des22'];
$o1 = $_POST['des23'];
$p1 = $_POST['des24'];
$q1 = $_POST['heading6'];
$r1 = $_POST['para6'];

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
$sql = "INSERT INTO `admin6` (`title`, `des`, `date1`, `des1`, `des2`, `des3`, `des4`, `heading1`, `para1`, `date2`, `des5`, `des6`, `des7`, `des8`, `heading2`, `para2`, `date3`, `des9`, `des10`, `des11`, `des12`, `heading3`, `para3`, `date4`, `des13`, `des14`, `des15`, `des16`, `heading4`, `para4`, `date5`, `des17`, `des18`, `des19`, `des20`, `heading5`, `para5`, `date6`, `des21`, `des22`, `des23`, `des24`, `heading6`, `para6`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1', '$f1', '$g1', '$h1', '$i1', '$j1', '$k1', '$l1', '$m1', '$n1', '$o1', '$p1', '$q1', '$r1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>