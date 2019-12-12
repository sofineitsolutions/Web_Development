<?php
$a = $_POST['title'];
$b = $_POST['dir'];
$c = $_POST['dir1'];
$d = $_POST['heading'];
$e = $_POST['tag1'];
$f = $_POST['tag2'];
$g = $_POST['tag3'];
$h = $_POST['tag4'];
$i = $_POST['tag5'];

$j = $_POST['tag6'];
$k = $_POST['heading1'];
$l = $_POST['blog'];
$m = $_POST['heading2'];
$n = $_POST['para'];


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
$sql = "INSERT INTO `admin7` (`title`, `dir`, `dir1`, `heading`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `tag6`, `heading1`, `blog`, `heading2`, `para`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>