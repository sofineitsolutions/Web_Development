<?php
$title1 = $_POST['title1'];
$con1 = $_POST['con1'];
$dec1 = $_POST['dec1'];
$con2 = $_POST['con2'];
$con2 = $_POST['con2'];
$con3= $_POST['con3'];
$con4= $_POST['con4'];
$con5= $_POST['con5'];
$con6= $_POST['con6'];


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
$sql = "INSERT INTO `admin3` (`title1`, `con1`,`dec1`, `con2`, `con1`,'con2', `con3`, `con4`, `con5`, `con6`)VALUES ('$title1', '$con1','$dec1', '$con2', '$con1','$con2', '$con3', '$con4', '$con5', '$con6')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>