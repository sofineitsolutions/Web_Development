<?php
$a = $_POST['stitle3'];
$b = $_POST['menu1'];
$c = $_POST['mdes1'];
$d = $_POST['mprice1'];
$e = $_POST['menu2'];
$f = $_POST['mdes2'];
$g = $_POST['mprice2'];
$h = $_POST['menu3'];
$i = $_POST['name3'];
$j = $_POST['mprice3'];
$k = $_POST['menu4'];
$l = $_POST['mdes4'];
$m = $_POST['mprice4'];
$n = $_POST['menu5'];
$o = $_POST['mdes5'];
$p = $_POST['mprice5'];
$q = $_POST['menu6'];
$r = $_POST['mdes6'];
$s = $_POST['mprice6'];
$t = $_POST['menu7'];
$u = $_POST['mdes7'];
$v = $_POST['mprice7'];
$w = $_POST['menu8'];
$x = $_POST['mdes8'];
$y = $_POST['mprice8'];


include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `foody`.`recipies` (`stitle3`, `menu1`, `mdes1`, `mprice1`, `menu2`, `mdes2`, `mprice2`, `menu3`, `name3`, `mprice3`,
 `menu4`, `mdes4`, `mprice4`, `menu5`, `mdes5`, `mprice5`, `menu6`, `mdes6`, `mprice6`, `menu7`, `mdes7`, `mprice7`, `menu8`, `mdes8`,
 `mprice8`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
 '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      