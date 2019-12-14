<?php
$title = $_POST['title'];
$subtitle1 = $_POST['subtitle1'];
$subtitle2 = $_POST['subtitle2'];
$subtitle3 = $_POST['subtitle3'];
$subtitle4 = $_POST['subtitle4'];
$dec1 = $_POST['dec1'];
$dec2 = $_POST['dec2'];
$dec3 = $_POST['dec3'];
$dec4 = $_POST['dec4'];
$dec5 = $_POST['dec5'];
$dec6 = $_POST['dec6'];
$dec7 = $_POST['dec7'];
$dec8 = $_POST['dec8'];
$dec9 = $_POST['dec9'];
$dec10 = $_POST['dec10'];
$dec11 = $_POST['dec11'];
$dec12 = $_POST['dec12'];
$subtitle5 = $_POST['subtitle5'];
$dec13 = $_POST['dec13'];
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "login");

// // Check connection
// if($link === false){
// die("ERROR: Could not connect. " . mysqli_connect_error());
// }
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin3` (`title`, `subtitle1`, `subtitle2`, `subtitle3`, `subtitle4`, `dec1`, `dec2`, `dec3`, `dec4`, `dec5`, `dec6`, `dec7`, `dec8`, `dec9`, `dec10`, `dec11`, `dec12`, `subtitle5`, `dec13`)VALUES ('$title', '$subtitle1', '$subtitle2', '$subtitle3', '$subtitle4', '$dec1', '$dec2', '$dec3', '$dec4', 'dec5', '$dec6', '$dec7', '$dec8', '$dec9', '$dec10', '$dec11', '$dec12', '$subtitle5', '$dec13')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>