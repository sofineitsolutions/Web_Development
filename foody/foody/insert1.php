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
// $sql = "INSERT INTO `foody`.`recipies` (`stitle3`, `menu1`, `mdes1`, `mprice1`, `menu2`, `mdes2`, `mprice2`, `menu3`, `name3`, `mprice3`,
//  `menu4`, `mdes4`, `mprice4`, `menu5`, `mdes5`, `mprice5`, `menu6`, `mdes6`, `mprice6`, `menu7`, `mdes7`, `mprice7`, `menu8`, `mdes8`,
//  `mprice8`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
//  '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y')";

// $sql="UPDATE 'foody.recipies' SET 'id'=1,'stitle3'='$a','menu1'='$b','mdes1'='$c','mprice1'='$d','menu2'='$e','mdes2'='$f',
// 'mprice2'='$g','menu3'='$h','name3'='$i','mprice3'='$j','menu4'='$k','mdes4'='$l','mprice4'='$m','menu5'='$n',
// 'mdes5'='$o','mprice5'='$p','menu6'='$q','mdes6'='$r','mprice6'='$s','menu7'='$t','mdes7'='$u','mprice7'='$v',
// 'menu8'='$w','mdes8'='$x','mprice8'='$y' WHERE 'id'= 1";


$sql="UPDATE `recipies` SET `id`=1,`stitle3`='$a',`menu1`='$b',`mdes1`='$c',`mprice1`='$d',`menu2`='$e',`mdes2`='$f',`mprice2`='$g',`menu3`='$g',`name3`='$i',`mprice3`='$j',`menu4`='$k',`mdes4`='$l',`mprice4`='$m',`menu5`='$n',`mdes5`='$o',`mprice5`='$p',`menu6`='$q',`mdes6`='$r',`mprice6`='$s',`menu7`='$t',`mdes7`='$u',`mprice7`='$v',`menu8`='$w',`mdes8`='$x',`mprice8`='$y' WHERE 'id'=1";



if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      