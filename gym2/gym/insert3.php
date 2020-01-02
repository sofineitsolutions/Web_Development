<?php
$a = $_POST['title1'];
$b = $_POST['tag1'];
$c = $_POST['tag2'];
$d = $_POST['btitle1'];
$e = $_POST['des1'];
$f = $_POST['Travel_Lifestyle1'];
$g = $_POST['comments1'];
$h = $_POST['tag3'];
$i = $_POST['tag4'];
$j = $_POST['btitle2'];
$k = $_POST['des2'];
$l = $_POST['Travel_Lifestyle2'];
$m = $_POST['comments2'];
$n = $_POST['tag5'];
$o = $_POST['tag6'];
$p = $_POST['btitle3'];
$q = $_POST['des3'];
$r = $_POST['Travel_Lifestyle3'];
$s = $_POST['comments3'];
$t = $_POST['tag7'];
$u = $_POST['tag8'];
$v = $_POST['btitle4'];
$w = $_POST['des4'];
$x = $_POST['Travel_Lifestyle4'];
$y = $_POST['comments4'];
$z = $_POST['tag9'];
$a1 = $_POST['tag10'];
$b1 = $_POST['btitle5'];
$c1 = $_POST['des5'];
$d1 = $_POST['Travel_Lifestyle5'];
$e1 = $_POST['comments5'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `gym`.`blog` (`title1`, `tag1`, `tag2`, `btitle1`, `des1`, `Travel_Lifestyle1`, `comments1`, `tag3`, `tag4`,
 `btitle2`, `des2`, `Travel_Lifestyle2`, `comments2`, `tag5`, `tag6`, `btitle3`, `des3`, `Travel_Lifestyle3`, `comments3`, `tag7`,
  `tag8`, `btitle4`, `des4`, `Travel_Lifestyle4`, `comments4`, `tag9`, `tag10`, `btitle5`, `des5`, `Travel_Lifestyle5`,`comments5`) VALUES ('$a', 
  '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
 '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      