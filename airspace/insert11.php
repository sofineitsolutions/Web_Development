<?php
$a = $_POST['tit1'];
$b = $_POST['des'];
$c = $_POST['stit1'];
$d = $_POST['sdes1'];
$e = $_POST['stit2'];
$f = $_POST['sdes2'];
$g = $_POST['stit3'];
$h = $_POST['sdes3'];
$i = $_POST['stit4'];
$j = $_POST['sdes4'];
$k = $_POST['h1'];
$l = $_POST['para1'];
$m = $_POST['date1'];
$n = $_POST['des1'];
$o = $_POST['des2'];
$p = $_POST['des3'];
$q = $_POST['des4'];
$r = $_POST['h2'];
$s = $_POST['para2'];
$t = $_POST['date2'];
$u = $_POST['des5'];
$v = $_POST['des6'];
$w = $_POST['des7'];
$x = $_POST['des8'];
$y = $_POST['h3'];
$z = $_POST['para3'];
$a1 = $_POST['date3'];
$b1 = $_POST['des9'];
$c1 = $_POST['des10'];
$d1 = $_POST['des11'];
$e1 = $_POST['des12'];
$f1 = $_POST['h4'];
$g1 = $_POST['para4'];
$h1 = $_POST['date4'];
$i1 = $_POST['des13'];
$j1 = $_POST['des14'];
$k1 = $_POST['des15'];
$l1 = $_POST['des16'];
$m1 = $_POST['h5'];
$n1 = $_POST['para5'];
$o1 = $_POST['date5'];
$p1 = $_POST['des17'];
$q1 = $_POST['des18'];
$r1 = $_POST['des19'];
$s1 = $_POST['des20'];
$t1 = $_POST['h6'];
$u1 = $_POST['para6'];
$v1 = $_POST['date6'];
$w1 = $_POST['des21'];
$x1 = $_POST['des22'];
$y1 = $_POST['des23'];
$z1 = $_POST['des24'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `air`.`admin11` (`tit1`, `des`, `stit1`, `sdes1`, `stit2`, `sdes2`, `stit3`, `sdes3`, `stit4`, `sdes4`, `h1`, `para1`,
 `date1`, `des1`, `des2`, `des3`, `des4`, `h2`, `para2`, `date2`, `des5`, `des6`, `des7`, `des8`, `h3`, `para3`, `date3`, `des9`, `des10`,
  `des11`, `des12`, `h4`, `para4`, `date4`, `des13`, `des14`, `des15`, `des16`, `h5`, `para5`, `date5`, `des17`, `des18`, `des19`, `des20`, 
  `h6`, `para6`, `date6`, `des21`, `des22`, `des23`, `des24`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', 
  '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1', '$f1', '$g1', '$h1', 
  '$i1', '$j1', '$k1', '$l1', '$m1', '$n1', '$o1', '$p1', '$q1', '$r1','$s1', '$t1', '$u1', '$v1', '$w1', '$x1', '$y1', '$z1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>