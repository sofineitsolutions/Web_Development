<?php
$a = $_POST['projects'];
$b = $_POST['home'];
$c = $_POST['projects1'];
$d = $_POST['world1'];
$e = $_POST['des1'];
$f = $_POST['button1'];
$g = $_POST['world2'];
$h = $_POST['des2'];
$i = $_POST['button2'];
$j = $_POST['world3'];
$k = $_POST['des3'];
$l = $_POST['button3'];
$m = $_POST['world4'];
$n = $_POST['des4'];
$o = $_POST['button4'];
$p = $_POST['insta'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `flush`.`projects` (`projects`, `home`, `projects1`, `world1`, `des1`, `button1`, `world2`, `des2`, `button2`,
 `world3`, `des3`, `button3`, `world4`, `des4`, `button4`, `insta`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', 
'$k', '$l','$m', '$n', '$o', '$p')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>