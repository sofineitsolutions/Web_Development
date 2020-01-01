<?php
$a = $_POST['stitle1'];
$b = $_POST['des1'];
$c = $_POST['sdes1'];
$d = $_POST['sdes2'];
$e = $_POST['sdes3'];
$f = $_POST['sdes4'];
$g = $_POST['stitle2'];
$h = $_POST['name1'];
$i = $_POST['prof1'];
$j = $_POST['name2'];
$k = $_POST['prof2'];
$l = $_POST['name3'];
$m = $_POST['prof3'];
$n = $_POST['name4'];
$o = $_POST['prof4'];
$p = $_POST['name5'];
$q = $_POST['prof5'];
$r = $_POST['name6'];
$s = $_POST['prof6'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `foody`.`admin` (`stitle1`, `des1`, `sdes1`, `sdes2`, `sdes3`, `sdes4`, `stitle2`, `name1`, `prof1`, `name2`, `prof2`, 
`name3`, `prof3`, `name4`, `prof4`, `name5`, `prof5`, `name6`, `prof6`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', 
'$k','$l','$m', '$n', '$o', '$p','$q','$r','$s')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      