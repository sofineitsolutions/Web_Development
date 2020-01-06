<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['about'];
$d = $_POST['des1'];
$e = $_POST['des2'];
$f = $_POST['idea'];
$g = $_POST['idea1'];
$h = $_POST['idea2'];
$i = $_POST['idea3'];
$j = $_POST['service1'];
$k = $_POST['service2'];
$l = $_POST['service3'];
$m = $_POST['service4'];
$n = $_POST['service5'];
$o = $_POST['service6'];
$p = $_POST['service7'];
$q = $_POST['service8'];
$r = $_POST['service9'];
$s = $_POST['exp1'];
$t = $_POST['exp2'];
$u = $_POST['fun'];
$v = $_POST['fun1'];
$w = $_POST['view1'];
$x = $_POST['view2'];
$y = $_POST['view3'];
$z = $_POST['view4'];

//extract($_POST);
//$a1 = $_POST['message'];
// $d = $_POST['collage_nm'];
// $e = $_POST['referance'];
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "login");

// // Check connection
// if($link === false){
// die("ERROR: Could not connect. " . mysqli_connect_error());
// }
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `home` (`title`, `des`, `about`, `des1`, `des2`, `idea`, `idea1`, `idea2`, `idea3`, `service1`, `service2`, `service3`, `service4`, `service5`, `service6`, `service7`, `service8`, `service9`, `exp1`, `exp2`, `fun`, `fun1`, `view1`, `view2`, `view3`, `view4`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$v', '$z')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
