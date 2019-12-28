<?php
$a = $_POST['title1'];
$b = $_POST['des1'];
$c = $_POST['title2'];
$d = $_POST['des2'];
$e = $_POST['ftitle1'];
$f = $_POST['fdes1'];
$g = $_POST['ftitle2'];
$h = $_POST['fdes2'];
$i = $_POST['ftitle3'];
$j = $_POST['fdes3'];
$k = $_POST['ftitle4'];
$l = $_POST['fdes4'];
$m = $_POST['title3'];
$n = $_POST['title4'];
$o = $_POST['des3'];
$p = $_POST['name1'];
$q = $_POST['Trainer1'];
$r = $_POST['name2'];
$s = $_POST['Trainer2'];
$t = $_POST['name3'];
$u = $_POST['Trainer3'];
$v =$_POST['offer'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `gym`.`about` (`title1`, `des1`, `title2`, `des2`, `ftitle1`, `fdes1`, `ftitle2`, `fdes2`, `ftitle3`, `fdes3`, 
`ftitle4`, `fdes4`, `title3`, `title4`, `des3`, `name1`, `Trainer1`, `name2`, `Trainer2`, `name3`, `Trainer3`, `offer`) VALUES 
('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
 '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      