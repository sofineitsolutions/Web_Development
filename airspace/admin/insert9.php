<?php
$a = $_POST['tit1'];
$b = $_POST['port'];

$c = $_POST['port1'];
$d = $_POST['port2'];
$e = $_POST['port3'];
$f = $_POST['port4'];
$g = $_POST['port5'];
$h = $_POST['port6'];
$i = $_POST['port7'];




include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin10` (`tit1`, `port`, `port1`, `port2`, `port3`, `port4`, `port5`, `port6`, `port7`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>