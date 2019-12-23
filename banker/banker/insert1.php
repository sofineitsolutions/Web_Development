<?php
$title1 = $_POST['title1'];
$subtitle1 = $_POST['subtitle1'];
$con1 = $_POST['con1'];
$dec1 = $_POST['dec1'];
$dec2 = $_POST['dec2'];
$con2 = $_POST['con2'];
$dec2 = $_POST['dec3'];
$name1 = $_POST['name1'];
$post1 = $_POST['post1'];
$name2 = $_POST['name2'];
$post2 = $_POST['post2'];
$name3 = $_POST['name3'];
$post3 = $_POST['post3'];
$name4 = $_POST['name4'];
$post4 = $_POST['post4'];
$name5 = $_POST['name5'];
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
$sql = "INSERT INTO `admin1` (`title1`, `subtitle1`, `con1`, `dec1`, `dec2`, `con2`, `dec2`, `name1`, `post1`, `name2`, `post2`, `name3`, `post3`, `name4`, `post4`, `name5`)VALUES ('$title1', '$subtitle1', '$con1', '$dec1', '$dec2', '$con2', '$dec2', '$name1', '$post1', '$name2', '$post2', '$name3', `$post3`, `$name4`, `$post4`, `$name5`)";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>