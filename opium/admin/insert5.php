<?php
$a = $_POST['blog'];
$b = $_POST['life'];
$c = $_POST['gad'];
$d = $_POST['name'];
$e = $_POST['date'];

$f = $_POST['blog1'];
$g = $_POST['blogquote'];
$h = $_POST['blogquote1'];
$i = $_POST['comment'];
$j = $_POST['pre_post'];

$k = $_POST['next_post'];
$l = $_POST['comm'];
$m = $_POST['date_comm'];
$n = $_POST['msg'];
$o = $_POST['comm1'];

$p = $_POST['date_comm1'];
$q = $_POST['msg1'];
$r = $_POST['comm2'];
$s = $_POST['date_comm2'];
$t = $_POST['msg2'];

$u = $_POST['comm3'];
$v = $_POST['date_comm3'];
$w = $_POST['msg3'];
$x = $_POST['comm4'];
$y = $_POST['date_comm4'];

$z = $_POST['msg4'];
$a1 = $_POST['bloger'];
$b1 = $_POST['post'];
$c1 = $_POST['blog_post'];



include("../config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin5` (`blog`, `life`, `gad`, `name`, `date`, `blog1`, `blogquote`, `blogquote1`, `comment`, `pre_post`, `next_post`, `comm`, `date_comm`, `msg`, `comm1`, `date_comm1`, `msg1`, `comm2`, `date_comm2`, `msg2`, `comm3`, `date_comm3`, `msg3`, `comm4`, `date_comm4`, `msg4`, `bloger`, `post`, `blog_post`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>