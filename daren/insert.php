<?php
$a = $_POST['title1'];
$b = $_POST['stitle1'];
$c = $_POST['name1'];
$d = $_POST['date1'];
$e = $_POST['title2'];
$f = $_POST['stitle2'];
$g = $_POST['name2'];
$h = $_POST['date2'];
$i = $_POST['title3'];
$j = $_POST['stitle3'];
$k = $_POST['name3'];
$l = $_POST['date3'];
$m = $_POST['title4'];
$n = $_POST['stitle4'];
$o = $_POST['name4'];
$p = $_POST['date4'];
$q = $_POST['title5'];
$r = $_POST['stitle5'];
$s = $_POST['name5'];
$t = $_POST['date5'];
$u = $_POST['title6'];
$v = $_POST['stitle6'];
$w = $_POST['name6'];
$x = $_POST['date6'];
$y = $_POST['title7'];
$z = $_POST['stitle7'];
$a1 = $_POST['name7'];
$b1 = $_POST['date7'];
$c1 = $_POST['title8'];
$d1 = $_POST['stitle8'];
$e1 = $_POST['name8'];
$f1 = $_POST['date8'];
$g1 = $_POST['title9'];
$h1 = $_POST['stitle9'];
$i1 = $_POST['name9'];
$j1 = $_POST['date9'];
$k1 = $_POST['title10'];
$l1 = $_POST['stitle10'];
$m1 = $_POST['name10'];
$n1 = $_POST['date10'];
$o1 = $_POST['title11'];
$p1 = $_POST['stitle11'];
$q1 = $_POST['name11'];
$r1 = $_POST['date11'];
$s1 = $_POST['title12'];
$t1 = $_POST['stitle12'];
$u1 = $_POST['name12'];
$v1 = $_POST['date12'];
$w1 = $_POST['title13'];
$x1 = $_POST['stitle13'];
$y1 = $_POST['name13'];
$z1 = $_POST['date13'];
$a2 = $_POST['name14'];
$b2 = $_POST['date14'];
$c2 = $_POST['ptitle1'];
$d2 = $_POST['name15'];
$e2 = $_POST['date15'];
$f2 = $_POST['ptitle2'];
$g2 = $_POST['name16'];
$h2 = $_POST['date16'];
$i2 = $_POST['ptitle3'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `daren`.`index` (`title1`, `stitle1`, `name1`, `date1`, `title2`, `stitle2`, `name2`, `date2`, `title3`, 
`stitle3`, `name3`, `date3`, `title4`, `stitle4`, `name4`, `date4`, `title5`, `stitle5`, `name5`, `date5`, `title6`, `stitle6`, 
`name6`, `date6`, `title7`, `stitle7`, `name7`, `date7`, `title8`, `stitle8`, `name8`, `date8`, `title9`, `stitle9`, `name9`, `date9`,
`title10`, `stitle10`, `name10`, `date10`, `title11`, `stitle11`, `name11`, `date11`, `title12`, `stitle12`, `name12`, `date12`,
 `title13`, `stitle13`, `name13`, `date13`, `name14`, `date14`, `ptitle1`, `name15`, `date15`, `ptitle2`, `name16`, `date16`, `ptitle3`) 
 VALUES ('$a', '$b', '$c', '$d', '$e', '$f','$g', '$h', '$i', '$j', '$k', '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w',
 '$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1','$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1','$u1',
 '$v1','$w1','$x1','$y1','$z1','$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2','$i2')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>