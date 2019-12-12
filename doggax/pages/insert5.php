<?php
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
$title1 = $_POST['title1'];
$con1 = $_POST['con1'];
$con2 = $_POST['con2'];
$con3 = $_POST['con3'];
$con4 = $_POST['con4'];
$con5 = $_POST['con5'];
$con6 = $_POST['con6'];
$con7 = $_POST['con7'];
$con8 = $_POST['con8'];
$dcon9 = $_POST['con9'];
$con10 = $_POST['con10'];
$con11 = $_POST['con11'];
$con12 = $_POST['con12'];
$con13 = $_POST['con13'];
$con14 = $_POST['con14'];
$con15 = $_POST['con15'];
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "login");

// // Check connection
// if($link === false){
// die("ERROR: Could not connect. " . mysqli_connect_error());
// }
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin4` (`subtitle1`, `subtitle2`, `subtitle3`, `subtitle4`, `dec1`, `dec2`, `dec3`, `dec4`, `dec5`, `dec6`, `dec7`, `dec8`, `dec9`, `dec10`, `dec11`, `dec12`, `subtitle5`, `dec13`,'title1','con1','con2','con3','con4','con5','con6','con7','con8','con9','con10','con11','con12','con13','con14','con15')VALUES ( '$subtitle1', '$subtitle2', '$subtitle3', '$subtitle4', '$dec1', '$dec2', '$dec3', '$dec4', 'dec5', '$dec6', '$dec7', '$dec8', '$dec9', '$dec10', '$dec11', '$dec12', '$subtitle5', '$dec13','$title1','$con1','$con2','$con3','$con4','$con5','$con6','$con7','$con8','$con9','$con10','$con11','$con12','$con13','$con14','$con15')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>