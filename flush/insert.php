<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['button1'];
$d = $_POST['world'];
$e = $_POST['des1'];
$f = $_POST['button2'];
$g = $_POST['world1'];
$h = $_POST['des2'];
$i = $_POST['button3'];
$j = $_POST['world2'];
$k = $_POST['des3'];
$l = $_POST['button4'];
$m = $_POST['world3'];
$n = $_POST['des4'];
$o = $_POST['button5'];
$p = $_POST['service'];
$q = $_POST['des5'];
$r = $_POST['world4'];
$s = $_POST['des6'];
$t = $_POST['world5'];
$u = $_POST['des7'];
$v = $_POST['world6'];
$w = $_POST['des8'];
$x = $_POST['world7'];
$y = $_POST['des9'];
$z = $_POST['feedaback'];
$a1 = $_POST['feeedback_des'];
$b1 = $_POST['access'];
$d1 = $_POST['name'];
$e1 = $_POST['prof'];
$f1 = $_POST['access1'];
$g1 = $_POST['name1'];
$h1 = $_POST['prof1'];
$i1 = $_POST['access2'];
$j1 = $_POST['name2'];
$k1 = $_POST['prof2'];
$l1 = $_POST['insta'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `flush`.`index` ('title','des','button1','world','des1','button2','world1','des2','button3','world2', 'des3','button4',
 'world3','des4','button5', 'service','des5','world4', 'des6','world5', 'des7','world6','des8','world7','des9', `feedaback`, `feeedback_des`, `access`, `name`, `prof`, `access1`, `name1`, `prof1`, 
 `access2`, `name2`, `prof2`, `insta`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
 '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1','$k1','$l1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>