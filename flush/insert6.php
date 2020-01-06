<?php
$a = $_POST['contact_us'];
$b = $_POST['home'];
$c = $_POST['contact_us'];
$d = $_POST['add1'];
$e = $_POST['add2'];
$f = $_POST['mobile_no'];
$g = $_POST['time'];
$h = $_POST['email'];
$i = $_POST['quotes'];
$j = $_POST['insta'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `flush`.`contact` (`contact_us`, `home`, `contact_us1`, `add1`, `add2`, `mobile_no`, `time`, `email`, `quotes`, `insta`) 
VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>