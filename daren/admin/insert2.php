<?php
$a = $_POST['title1'];
$b = $_POST['name1'];
$c = $_POST['date1'];
$d = $_POST['stitle1'];
$e = $_POST['title2'];
$f = $_POST['name2'];
$g = $_POST['date2'];
$h = $_POST['stitle2'];
$i = $_POST['title3'];
$j = $_POST['name3'];
$k = $_POST['date3'];
$l = $_POST['stitle3'];
$m = $_POST['title4'];
$n = $_POST['name4'];
$o = $_POST['date4'];
$p = $_POST['stitle4'];
$q = $_POST['title5'];
$r = $_POST['name5'];
$s = $_POST['date5'];
$t = $_POST['stitle5'];
$u = $_POST['name6'];
$v = $_POST['date6'];
$w = $_POST['stitle6'];
$x = $_POST['name7'];
$y = $_POST['date7'];
$z = $_POST['stitle7'];
$a1 = $_POST['name8'];
$b1 = $_POST['date8'];
$c1 = $_POST['stitle8'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `daren`.`category` (`title1`, `name1`, `date1`, `stitle1`, `title2`, `name2`, `date2`, `stitle2`, `title3`, `name3`,
 `date3`, `stitle3`, `title4`, `name4`, `date4`, `stitle4`, `title5`, `name5`, `date5`, `stitle5`, `name6`, `date6`, `stitle6`, `name7`,
  `date7`, `stitle7`, `name8`, `date8`, `stitle8`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f','$g', '$h', '$i', '$j', '$k', '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w',
 '$x','$y','$z','$a1','$b1','$c1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>