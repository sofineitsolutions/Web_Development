<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['head1'];
$d = $_POST['des1'];
$e = $_POST['head2'];
$f = $_POST['des2'];
$g = $_POST['head3'];
$h = $_POST['des3'];
$i = $_POST['head4'];
$j = $_POST['des4'];
$k = $_POST['head5'];
$l = $_POST['des5'];
$m = $_POST['head6'];
$n = $_POST['des6'];
$o = $_POST['head7'];
$p = $_POST['des7'];
$q = $_POST['head8'];
$r = $_POST['head9'];
$s = $_POST['head10'];
$t = $_POST['email'];
$u = $_POST['add'];

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
$sql = "INSERT INTO `admin5` (`title`, `des`, `head1`, `des1`, `head2`, `des2`, `head3`, `des3`, `head4`, `des4`, `head5`, `des5`, `head6`, `des6`, `head7`, `des7`, `head8`, `head9`, `head10`, `email`, `addr`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>