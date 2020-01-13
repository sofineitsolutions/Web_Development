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
$z = $_POST['feedback'];
$a1 = $_POST['feeedback_des'];
$b1 = $_POST['access'];
$c1 = $_POST['name'];
$d1 = $_POST['prof'];
$e1 = $_POST['access1'];
$f1 = $_POST['name1'];
$g1 = $_POST['prof1'];
$h1 = $_POST['access2'];
$i1 = $_POST['name2'];
$j1 = $_POST['prof2'];
$k1 = $_POST['insta'];
include("config.php");
// Attempt insert query execution
// $sql = "INSERT INTO `flush`.`index` ('title','des','button1','world','des1','button2','world1','des2','button3','world2', 'des3','button4',
//  'world3','des4','button5', 'service','des5','world4', 'des6','world5', 'des7','world6','des8','world7','des9', `feedaback`, `feeedback_des`, `access`, `name`, `prof`, `access1`, `name1`, `prof1`, 
//  `access2`, `name2`, `prof2`, `insta`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
//  '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1','$k1','$l1')";
$sql="UPDATE `index` SET title='$a',des='$b',button1='$c',world='$d',des1='$e',button2='$f',
world1='$g',des2='$h',button3='$i',world2='$j',des3='$k',button4='$l',
world3='$m',des4='$n',button5='$o',service='$p',des5='$q',world4='$r',des6='$s',
world5='$t',des7='$u',world6='$v',des8='$w',world7='$x',des9='$y',feedback='$z',
feeedback_des='$a1',access='$b1',name='$c1',prof='$d1',access1='$e1',name1='$f1',prof1='$g1',access2='$h1',name2='$i1',prof2='$j1',
insta='$k1' WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>