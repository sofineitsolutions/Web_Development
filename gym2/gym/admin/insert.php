<?php
$a = $_POST['title1'];
$b = $_POST['title2'];
$c = $_POST['title3'];
$d = $_POST['title4'];
$e = $_POST['title5'];
$f = $_POST['title6'];
$g = $_POST['title7'];
$h = $_POST['title8'];
$i = $_POST['title9'];
$j = $_POST['title10'];
$k = $_POST['title11'];
$l = $_POST['title12'];
$m = $_POST['stitle1'];
$n = $_POST['sdes1'];
$o = $_POST['stitle2'];
$p = $_POST['sdes2'];
$q = $_POST['title13'];
$r = $_POST['des1'];
$s = $_POST['ftitle1'];
$t = $_POST['fdes1'];
$u = $_POST['ftitle2'];
$v = $_POST['fdes2'];
$w = $_POST['ftitle3'];
$x = $_POST['fdes3'];
$y = $_POST['ftitle4'];
$z = $_POST['fdes4'];
$a1 = $_POST['title14'];
$b1 = $_POST['dis'];
$c1 = $_POST['des2'];
$d1 = $_POST['title15'];
$e1 = $_POST['des3'];
$f1 = $_POST['ptitle1'];
$g1 = $_POST['price1'];
$h1 = $_POST['pdes1'];
$i1 = $_POST['pdes2'];
$j1 = $_POST['pdes3'];
$k1 = $_POST['pdes4'];
$l1 = $_POST['ptitle2'];
$m1 = $_POST['price2'];
$n1 = $_POST['pdes5'];
$o1 = $_POST['pdes6'];
$p1 = $_POST['pdes7'];
$q1 = $_POST['pdes8'];
$r1 = $_POST['ptitle3'];
$s1 = $_POST['price3'];
$t1 = $_POST['pdes9'];
$u1 = $_POST['pdes10'];
$v1 = $_POST['pdes11'];
$w1 = $_POST['pdes12'];
$x1 = $_POST['title16'];
$y1 = $_POST['title17'];
$z1 = $_POST['des4'];
$a2 = $_POST['name1'];
$b2 = $_POST['Trainer1'];
$c2 = $_POST['name2'];
$d2 = $_POST['Trainer2'];
$e2 = $_POST['name3'];
$f2 = $_POST['Trainer3'];

include("config.php");
// Attempt insert query execution
// $sql = "INSERT INTO `gym`.`index` (`title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`, `title8`, `title9`, `title10`, 
// `title11`, `title12`, `stitle1`, `sdes1`, `stitle2`, `sdes2`, `title13`, `des1`, `ftitle1`, `fdes1`, `ftitle2`, `fdes2`, `ftitle3`, `fdes3`,
//  `ftitle4`, `fdes4`, `title14`, `dis`, `des2`, `title15`, `des3`, `ptitle1`, `price1`, `pdes1`, `pdes2`, `pdes3`, `pdes4`, `ptitle2`, `price2`,
//   `pdes5`, `pdes6`, `pdes7`, `pdes8`, `ptitle3`, `price3`, `pdes9`, `pdes10`, `pdes11`, `pdes12`, `title16`, `title17`, `des4`, `name1`,
//    `Trainer1`, `name2`, `Trainer2`, `name3`, `Trainer3`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
//  '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1',
//  '$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1','$u1','$v1','$w1',
//  '$x1','$y1','$z1','$a2','$b2','$c2','$d2','$e2','$f2')";
 $sql="UPDATE `index` SET title1='$a',title12='$b',title3='$c',title4='$d',title5='$e',title6='$f',
 title7='$g',title8='$h',title9='$i',title10='$j',title11='$k',title12='$l',
 stitle1='$m',sdes1='$n',stitle2='$o',sdes2='$p',title13='$q',des1='$r',ftitle1='$s',
 fdes1='$t',ftitle2='$u',fdes2='$v',ftitle3='$w',fdes3='$x',ftitle4='$y',fdes4='$z',
 title14='$a1',dis='$b1',des2='$c1',title15='$d1',des3='$e1',ptitle1='$f1',price1='$g1',pdes1='$h1',pdes2='$i1',pdes3='$j1',
 pdes3='$k1',ptitle2='$l1',price2='$m1',pdes5='$n1',pdes6='$o1',pdes7='$p1',
 pdes8='$q1',ptitle3='$r1',price3='$s1',pdes9='$t1',pdes10='$u1',pdes11='$v1',pdes12='$w1',title16='$x1',
 title17='$y1',des4='$z1',name1='$a2',Trainer1='$b2',name2='$c2',Trainer2='$d2',name3='$e2',Trainer3='$f2' WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      