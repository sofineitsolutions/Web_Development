<?php
$a = $_POST['Enjoy_Eating'];
$b = $_POST['des1'];
$c = $_POST['Fresh_Sea_Foods'];
$d = $_POST['des2'];
$e = $_POST['Cup_of_Coffees'];
$f = $_POST['des3'];
$g = $_POST['Meat_Eaters'];
$h = $_POST['des4'];
$i = $_POST['Free_Hot_Soup'];
$j = $_POST['des5'];
$k = $_POST['Drinks_Beverages'];
$l = $_POST['des6'];
$m = $_POST['Meat_Eaters1'];
$n = $_POST['des7'];
$o = $_POST['Cup_of_Coffees1'];
$p = $_POST['des8'];
$q = $_POST['stitle1'];
$r = $_POST['menu1'];
$s = $_POST['mdes1'];
$t = $_POST['mprice1'];
$u = $_POST['menu2'];
$v = $_POST['mdes2'];
$w = $_POST['mprice2'];
$x = $_POST['menu3'];
$y = $_POST['mdes3'];
$z = $_POST['mprice3'];
$a1 = $_POST['menu4'];
$b1 = $_POST['mdes4'];
$c1 = $_POST['mprice4'];
$d1 = $_POST['menu5'];
$e1 = $_POST['mdes5'];
$f1 = $_POST['mprice5'];
$g1 = $_POST['menu6'];
$h1 = $_POST['mdes6'];
$i1 = $_POST['mprice6'];
$j1 = $_POST['menu7'];
$k1 = $_POST['mdes7'];
$l1 = $_POST['mprice7'];
$m1 = $_POST['menu8'];
$n1 = $_POST['mdes8'];
$o1 = $_POST['mprice8'];
include("config.php");
$sql="UPDATE `services` SET Enjoy_Eating='$a',des1='$b',Fresh_Sea_Foods='$c',des2='$d',Cup_of_Coffees='$e',des3='$f',
 Meat_Eaters='$g',des4='$h',Free_Hot_Soup='$i',des5='$j',Drinks_Beverages='$k',des6='$l',Meat_Eaters1='$m',des7='$n',
 Cup_of_Coffees1='$o',des8='$p',stitle1='$q',menu1='$r',mdes1='$s',mprice1='$t',menu2='$u',mdes2='$v',
 mprice2='$w',menu3='$x',mdes3='$y',mprice3='$z',menu4='$a1',mdes4='$b1',mprice4='$c1',menu5='$d1',mdes5='$e1',mprice5='$f1',
 menu6='$g1',mdes6='$h1',mprice6='$i',menu7='$j1',mdes7='$k1',mprice7='$l1',
 menu8='$m1',mdes8='$n1',mprice8='$o1' WHERE id= 1";
//  Attempt insert query execution
// $sql="INSERT INTO `foody`.`services` (`Enjoy_Eating`, `des1`, `Fresh_Sea_Foods`, `des2`, `Cup_of_Coffees`, `des3`, `Meat_Eaters`, `des4`, 
// `Free_Hot_Soup`, `des5`, `Drinks_Beverages`, `des6`, `Meat_Eaters1`, `des7`, `Cup_of_Coffees1`, `des8`, `stitle1`, `menu1`, `mdes1`, 
// `mprice1`, `menu2`, `mdes2`, `mprice2`, `menu3`, `mdes3`, `mprice3`, `menu4`, `mdes4`, `mprice4`, `menu5`, `mdes5`, `mprice5`, `menu6`, 
// `mdes6`, `mprice6`, `menu7`, `mdes7`, `mprice7`, `menu8`, `mdes8`, `mprice8`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', 
// '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1', '$f1', '$g1', '$h1', '$i1', '$j1', '$k1', '$l1',
//  '$m1', '$n1', '$o1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      