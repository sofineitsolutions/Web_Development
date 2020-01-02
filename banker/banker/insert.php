<?php
$b1_title1 = $_POST['b1_title1'];
$b1_subtitle1 = $_POST['b1_subtitle1'];
$b1_title2 = $_POST['b1_title2'];
$b1_title3 = $_POST['b1_title3'];
$con1 = $_POST['con1'];
$dec1 = $_POST['dec1'];
$con2 = $_POST['con2'];
$con3 = $_POST['con3'];
$title4 = $_POST['title4'];
$dec2 = $_POST['dec2'];
$dec3 = $_POST['dec3'];
$dec4 = $_POST['dec4'];
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
$sql = "INSERT INTO `admin1` (`b1_title1`, `b1_subtitle1`, `b1_title2`, `b1_title3`, `con1`, `dec1`, `con2`, `con3`, `title4`, `dec2`, `dec3`, `dec4`) VALUES ('$b1_title1', '$b1_subtitle1', '$b1_title2', '$b1_title3', '$con1', '$dec1', '$con2', '$con3', '$title4', '$dec2', '$dec3', '$dec4')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>