<?php
$a = $_POST['news1'];
$b = $_POST['date1'];
$c = $_POST['des1'];
$d = $_POST['news2'];
$e = $_POST['date2'];
$f = $_POST['des2'];
$g = $_POST['news3'];
$h = $_POST['date3'];
$i = $_POST['des3'];
$j = $_POST['news4'];
$k = $_POST['date4'];
$l = $_POST['des4'];
$m = $_POST['news5'];
$n = $_POST['date5'];
$o = $_POST['des5'];
$p = $_POST['news6'];
$q = $_POST['date6'];
$r = $_POST['des6'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `foody`.`news` (`news1`, `date1`, `des1`, `news2`, `date2`, `des2`, `news3`, `date3`, `des3`, `news4`, `date4`, `des4`,
 `news5`, `date5`, `des5`, `news6`, `date6`, `des6`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', 
'$k','$l','$m', '$n', '$o', '$p','$q','$r')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      