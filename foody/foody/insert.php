<?php
$a = $_POST['title1'];
$b = $_POST['des1'];
$c = $_POST['title2'];
$d = $_POST['des2'];
$e = $_POST['Enjoy_Eating'];
$f = $_POST['des3'];
$g = $_POST['Fresh_Sea_Foods'];
$h = $_POST['des4'];
$i = $_POST['Cup_of_Coffees'];
$j = $_POST['des5'];
$k = $_POST['Meat_Eaters'];
$l = $_POST['des6'];
$m = $_POST['stitle1'];
$n = $_POST['sdes1'];
$o = $_POST['stitle2'];
$p = $_POST['price1'];
$q = $_POST['sep_menu1'];
$r = $_POST['price2'];
$s = $_POST['sep_menu2'];
$t = $_POST['price3'];
$u = $_POST['sep_menu3'];
$v = $_POST['price4'];
$w = $_POST['sep_menu4'];
$x = $_POST['stitle3'];
$y = $_POST['menu1'];
$z = $_POST['mdes1'];
$a1 = $_POST['mprice1'];
$b1 = $_POST['menu2'];
$c1 = $_POST['mdes2'];
$d1 = $_POST['mprice2'];
$e1 = $_POST['menu3'];
$f1 = $_POST['name3'];
$g1 = $_POST['mprice3'];
$h1 = $_POST['menu4'];
$i1 = $_POST['mdes4'];
$j1 = $_POST['mprice4'];
$k1 = $_POST['menu5'];
$l1 = $_POST['mdes5'];
$m1 = $_POST['mprice5'];
$n1 = $_POST['menu6'];
$o1 = $_POST['mdes6'];
$p1 = $_POST['mprice6'];
$q1 = $_POST['menu7'];
$r1 = $_POST['mdes7'];
$s1 = $_POST['mprice7'];
$t1 = $_POST['menu8'];
$u1 = $_POST['mdes8'];
$v1 = $_POST['mprice8'];
$w1 = $_POST['stitle4'];
$x1 = $_POST['tdes1'];
$y1 = $_POST['tname1'];
$z1 = $_POST['prof1'];
$a2 = $_POST['tdes2'];
$b2 = $_POST['tname2'];
$c2 = $_POST['prof2'];
$d2 = $_POST['tdes3'];
$e2 = $_POST['tname3'];
$f2 = $_POST['prof3'];
$g2 = $_POST['blog'];
$h2 = $_POST['blog1'];
$i2 = $_POST['date1'];
$j2 = $_POST['bdes1'];
$k2 = $_POST['blog2'];
$l2 = $_POST['date2'];
$m2 = $_POST['bdes2'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `foody`.`index` (`title1`, `des1`, `title2`, `des2`, `Enjoy_Eating`, `des3`, `Fresh_Sea_Foods`, `des4`, `Cup_of_Coffees`, 
`des5`, `Meat_Eaters`, `des6`, `stitle1`, `sdes1`, `stitle2`, `price1`, `sep_menu1`, `price2`, `sep_menu2`, `price3`, `sep_menu3`, `price4`, 
`sep_menu4`, `stitle3`, `menu1`, `mdes1`, `mprice1`, `menu2`, `mdes2`, `mprice2`, `menu3`, `name3`, `mprice3`, `menu4`, `mdes4`, `mprice4`,
 `menu5`, `mdes5`, `mprice5`, `menu6`, `mdes6`, `mprice6`, `menu7`, `mdes7`, `mprice7`, `menu8`, `mdes8`, `mprice8`, `stitle4`, `tdes1`, 
 `tname1`, `prof1`, `tdes2`, `tname2`, `prof2`, `tdes3`, `tname3`, `prof3`, `blog`, `blog1`, `date1`, `bdes1`, `blog2`, `date2`, `bdes2`) 
 VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
 '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1',
 '$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1','$u1','$v1','$w1',
 '$x1','$y1','$z1','$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2','$i2','$j2','$k2','$l2',
 '$m2')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>