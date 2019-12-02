<?php
$a = $_POST['tit'];
$b = $_POST['t1'];
$c = $_POST['block1'];
$d = $_POST['t2'];
$e = $_POST['service1'];
$f = $_POST['t3'];
$g = $_POST['service2'];
$h = $_POST['t4'];
$i = $_POST['service3'];
$j = $_POST['cus_new'];
//$k = $_POST['service4'];
$k = $_POST['l1'];
$l = $_POST['service4'];
$m = $_POST['l2'];
$n = $_POST['service5'];
$o = $_POST['why'];
$p = $_POST['service6'];
$q = $_POST['s1'];
$r = $_POST['s2'];
$s = $_POST['s3'];
$t = $_POST['s4'];
$u = $_POST['s5'];
$v = $_POST['s6'];
$w = $_POST['s7'];
$x = $_POST['s8'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin2` (`tit`, `t1`, `block1`, `t2`, `service1`, `t3`, `service2`, `t4`, `service3`, `cus_new`, `l1`, `service4`, `l2`, `service5`, `why`, `service6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u' , '$v', '$w', '$x')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>  