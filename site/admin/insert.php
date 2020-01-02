<?php
$a = $_POST['block2'];
$b = $_POST['des1'];
$c = $_POST['des2'];
$d = $_POST['c1'];
$e = $_POST['c2'];
$f = $_POST['c3'];
$g = $_POST['c4'];
$h = $_POST['about'];
$i = $_POST['content'];
$j = $_POST['button'];
$k = $_POST['title1'];
$l = $_POST['date1'];
$m = $_POST['news1'];
$n = $_POST['date2'];
$o = $_POST['news2'];
$p = $_POST['project'];

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
$sql = "INSERT INTO `admin1` (`block2`, `des1`, `des2`, `c1`, `c2`, `c3`, `c4`, `about`, `content`, `button`, `title1`, `date1`, `news1`, `date2`, `news2`, `project`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>