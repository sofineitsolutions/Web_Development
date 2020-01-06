<?php
$a = $_POST['about_us'];
$b = $_POST['home'];
$c = $_POST['about_us1'];
$d = $_POST['life'];
$e = $_POST['here_to'];
$f = $_POST['des1'];
$g = $_POST['service'];
$h = $_POST['des2'];
$i = $_POST['world1'];
$j = $_POST['des3'];
$k = $_POST['world2'];
$l = $_POST['des4'];
$m = $_POST['world3'];
$n = $_POST['des5'];
$o = $_POST['world4'];
$p = $_POST['des6'];
$q = $_POST['feedaback'];
$r = $_POST['feedback_des'];
$s = $_POST['access'];
$t = $_POST['name'];
$u = $_POST['prof'];
$v = $_POST['access1'];
$w = $_POST['name1'];
$x = $_POST['prof1'];
$y = $_POST['access2'];
$z = $_POST['name2'];
$a1 = $_POST['prof2'];
$b1 = $_POST['insta'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `flush`.`about` (`about_us`, `home`, `about_us1`, `life`, `here_to`, `des1`,`service`, `des2`, `world1`, `des3`, `world2`,
 `des4`, `world3`, `des5`, `world4`,`des6`, `feedaback`, `feedback_des`, `access`, `name`, `prof`, `access1`, `name1`, `prof1`, 
 `access2`, `name2`, `prof2`, `insta`)VALUES 
 ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w',
  '$x', '$v', '$z','$a1','$b1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>