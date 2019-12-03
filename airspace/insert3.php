<?php
$a1 = $_POST['title'];
$a = $_POST['msg1'];
$b = $_POST['msg2'];
$c = $_POST['msg3'];
$d = $_POST['msg4'];
$e = $_POST['msg5'];
$f = $_POST['msg6'];
$g = $_POST['msg7'];
$h = $_POST['msg8'];
$i = $_POST['msg9'];
$j = $_POST['msg10'];
$i1 = $_POST['msg11'];
$j1 = $_POST['msg12'];

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
$sql = "INSERT INTO `admin4` (`title`, `msg1`, `msg2`, `msg3`, `msg4`, `msg5`, `msg6`, `msg7`, `msg8`, `msg9`, `msg10`, `msg11`, `mssg12`) VALUES ('$a1', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$i1', '$j1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>