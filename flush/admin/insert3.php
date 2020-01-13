<?php
$a = $_POST['project_details'];
$b = $_POST['home'];
$c = $_POST['projects'];
$d = $_POST['project_details1'];
$e = $_POST['colorlib_name'];
$f = $_POST['des1'];
$g = $_POST['rating'];
$h = $_POST['client'];
$i = $_POST['website'];
$j = $_POST['completed'];
$k = $_POST['des2'];
$l = $_POST['des3'];
$m = $_POST['insta'];
include("config.php");
// Attempt insert query execution
// $sql = "INSERT INTO `flush`.`project_details` (`project_details`, `home`, `projects`, `project_details1`, `colorlib_name`, `des1`, 
// `rating`, `client`, `website`, `completed`, `des2`, `des3`, `insta`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l',
//   '$m')";
$sql="UPDATE `project_details` SET project_details='$a',home='$b',projects='$c',project_details1='$d',colorlib_name='$e',des1='$f',
rating='$g',client='$h',website='$i',completed='$j',des2='$k',des3='$l',
insta='$m'WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>