<?php
$a = $_POST['tit'];
$b = $_POST['des'];
$c = $_POST['left1'];
$d = $_POST['des1'];
$e = $_POST['right1'];

$f = $_POST['des2'];
$g = $_POST['des3'];
$h = $_POST['def1'];
$i = $_POST['def2'];
$j = $_POST['def3'];

$k = $_POST['def4'];
$l = $_POST['def5'];
$m = $_POST['def6'];
$n = $_POST['quots'];
$o = $_POST['blogquote'];

$p = $_POST['typography'];
$q = $_POST['h1'];
$r = $_POST['h2'];
$s = $_POST['h3'];
$t = $_POST['h4'];

$u = $_POST['h5'];
$v = $_POST['h6'];

include("../config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin4` (`tit`, `des`, `left1`, `des1`, `right1`, `des2`, `des3`, `def1`, `def2`, `def3`, `def4`, `def5`, `def6`, `quots`, `blogquote`, `typography`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>