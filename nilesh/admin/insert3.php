<?php
$a = $_POST['Services'];
$b = $_POST['Services1'];
$c = $_POST['event1'];
$d = $_POST['des1'];
$e = $_POST['event2'];
$f = $_POST['des2'];
$g = $_POST['event3'];
$h = $_POST['des3'];
$i = $_POST['event4'];
$j = $_POST['des4'];
$k = $_POST['event5'];
$l = $_POST['des5'];
$m = $_POST['event6'];
$n = $_POST['des6'];
// extract($_POST);
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `nilesh`.`services` (`Services`, `Services1`, `event1`, `des1`, `event2`, `des2`, `event3`, `des3`, `event4`, `des4`, `event5`, `des5`, `event6`, `des6`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>  