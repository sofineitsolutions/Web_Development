<?php
$a = $_POST['tit1'];
$b = $_POST['tit2'];

$c = $_POST['h'];
$d = $_POST['date'];
$e = $_POST['des'];
$f = $_POST['des1'];
$g = $_POST['des2'];
$h = $_POST['des3'];
$i = $_POST['info'];

$j = $_POST['h1'];
$k = $_POST['date1'];
$l = $_POST['des4'];
$m = $_POST['des5'];
$n = $_POST['des6'];
$o = $_POST['des7'];
$p = $_POST['info1'];

$q = $_POST['h2'];
$r = $_POST['date2'];
$s = $_POST['des8'];
$t = $_POST['des9'];
$u = $_POST['des10'];
$v = $_POST['des11'];
$w = $_POST['info2'];

$x = $_POST['h3'];
$y = $_POST['date3'];
$z = $_POST['des12'];
$a1 = $_POST['des13'];
$b1= $_POST['des14'];
$c1 = $_POST['des15'];
$d1 = $_POST['info3'];

$e1 = $_POST['h4'];
$f1 = $_POST['date4'];
$g1 = $_POST['des16'];
$h1 = $_POST['des17'];
$i1 = $_POST['des18'];
$j1 = $_POST['des19'];
$k1 = $_POST['info4'];

$l1 = $_POST['h5'];
$m1 = $_POST['date5'];
$n1 = $_POST['des20'];
$o1 = $_POST['des21'];
$p1 = $_POST['des22'];
$q1 = $_POST['des23'];
$r1 = $_POST['info5'];


include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin9` (`tit1`, `tit2`, `h`, `date`, `des`, `des1`, `des2`, `des3`, `info`, `h1`, `date1`, `des4`, `des5`, `des6`, `des7`, `info1`, `h2`, `date2`, `des8`, `des9`, `des10`, `des11`, `info2`, `h3`, `date3`, `des12`, `des13`, `des14`, `des15`, `info3`, `h4`, `date4`, `des16`, `des17`, `des18`, `des19`, `info4`, `h5`, `date5`, `des20`, `des21`, `des22`, `des23`, `info5`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1', '$f1', '$g1', '$h1', '$i1', '$j1', '$k1', '$l1', '$m1', '$n1', '$o1', '$p1', '$q1', '$r1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>