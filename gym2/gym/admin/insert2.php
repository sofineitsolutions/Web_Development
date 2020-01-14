<?php
$a = $_POST['title1'];
$b = $_POST['des1'];
$c = $_POST['ptitle1'];
$d = $_POST['price1'];
$e = $_POST['pdes1'];
$f = $_POST['pdes2'];
$g = $_POST['pdes3'];
$h = $_POST['pdes4'];
$i = $_POST['ptitle2'];
$j = $_POST['price2'];
$k = $_POST['pdes5'];
$l = $_POST['pdes6'];
$m = $_POST['pdes7'];
$n = $_POST['pdes8'];
$o = $_POST['ptitle3'];
$p = $_POST['price3'];
$q = $_POST['pdes9'];
$r = $_POST['pdes10'];
$s = $_POST['pdes11'];
$t = $_POST['pdes12'];
$u = $_POST['title2'];
$v =$_POST['off'];
$w = $_POST['des2'];
$x = $_POST['title3'];
$y = $_POST['des3'];
$z = $_POST['ftitle1'];
$a1 = $_POST['fdes1'];
$b1 = $_POST['ftitle2'];
$c1 = $_POST['fdes2'];
$d1 = $_POST['ftitle3'];
$e1 =$_POST['fdes3'];
$f1 = $_POST['ftitle4'];
$g1 = $_POST['fdes4'];
$h1 =$_POST['title4'];
include("config.php");
// Attempt insert query execution
// $sql = "INSERT INTO `gym`.`pricing` (`title1`, `des1`, `ptitle1`, `price1`, `pdes1`, `pdes2`, `pdes3`, `pdes4`, `ptitle2`, `price2`, `pdes5`,
//  `pdes6`, `pdes7`, `pdes8`, `ptitle3`, `price3`, `pdes9`, `pdes10`, `pdes11`, `pdes12`, `title2`, `off`, `des2`, `title3`, `des3`, `ftitle1`, 
//  `fdes1`, `ftitle2`, `fdes2`, `ftitle3`, `fdes3`, `ftitle4`, `fdes4`, `title4`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
//  '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1')";
$sql="UPDATE `pricing` SET title1='$a',des1='$b',ptitle1='$c',price1='$d',pdes1='$e',pdes2='$f',
 pdes3='$g',pdes4='$h',ptitle2='$i',price2='$j',pdes5='$k',pdes6='$l',
 pdes7='$m',pdes8='$n',ptitle3='$o',price3='$p',pdes9='$q',pdes10='$r',pdes11='$s',
 pdes12='$t',title2='$u',off='$v',des2='$w',title3='$x',des3='$y',ftitle1='$z',
 fdes1='$a1',ftitle2='$b1',fdes2='$c1',ftitle3='$d1',fdes3='$e1',ftitle4='$f1',fdes4='$g1',
 title4='$h1' WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      