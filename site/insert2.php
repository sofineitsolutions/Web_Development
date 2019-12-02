<?php
$a = $_POST['title'];
$b = $_POST['tit1'];
$c = $_POST['portfolio1'];
$d = $_POST['tit2'];
$e = $_POST['portfolio2'];
$f = $_POST['tit3'];
$g = $_POST['portfolio3'];
$h = $_POST['tit4'];
$i = $_POST['portfolio4'];
$j = $_POST['tit5'];
//$k = $_POST['service4'];
$k = $_POST['portfolio5'];
$l = $_POST['tit6'];
$m = $_POST['portfolio6'];
$n = $_POST['tit7'];
$o = $_POST['portfolio7'];
$p = $_POST['tit8'];
$q = $_POST['portfolio8'];


include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin3` (`title`, `tit1`, `portfolio1`, `tit2`, `portfolio2`, `tit3`, `portfolio3`, `tit4`, `portfolio4`, `tit5`, `portfolio5`, `tit6`, `portfolio6`, `tit7`, `portfolio7`, `tit8`, `portfolio8`)  VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>  