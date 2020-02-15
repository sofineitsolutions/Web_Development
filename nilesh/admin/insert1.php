<?php
$a = $_POST['Name'];
$b = $_POST['title1'];
$c = $_POST['title2'];
$d = $_POST['title3'];
$e = $_POST['des'];
$f = $_POST['des1'];
$g = $_POST['read'];
$h = $_POST['twitter'];
$i = $_POST['facebook'];
$j = $_POST['instagram'];
$k = $_POST['follow'];
// extract($_POST);
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `nilesh`.`home` (`Name`, `title1`, `title2`, `title3`, `des`, `des1`, `read`, `twitter`, `facebook`, `instagram`, `follow`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>  