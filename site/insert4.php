<?php

//-----------------------------------------index4/////admin4------------------
$a = $_POST['title'];
$b = $_POST['title1'];
$c = $_POST['head'];
$d = $_POST['line1'];
$e = $_POST['line2'];
$f = $_POST['line3'];
$g = $_POST['line4'];
$h = $_POST['contact'];
$i = $_POST['email'];
$j = $_POST['email1'];
//$k = $_POST['service4'];



include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin4` (`title`, `title1`, `head`, `line1`, `line2`, `line3`, `line4`, `contact`, `email`, `email1`)  VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>  