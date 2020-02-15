<?php
$a = $_POST['name'];
$b = $_POST['m2'];
$c = $_POST['name3'];
$d = $_POST['des'];
$e = $_POST['twitter'];
$f = $_POST['facebook'];
$g = $_POST['instagram'];
$h = $_POST['theme1'];
$i = $_POST['count1'];
$j = $_POST['theme2'];
$k = $_POST['theme3'];
$l = $_POST['theme4'];
$m = $_POST['follow'];
// extract($_POST);
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `nilesh`.`about` (`name`, `m2`, `name3`, `des`, `twitter`, `facebook`, `instagram`, `theme1`, `count1`, `theme2`, `theme3`, `theme4`, `follow`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>  