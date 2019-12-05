<?php
$a = $_POST['title'];
$b = $_POST['blog_tit'];
$c = $_POST['blog_sub'];
$d = $_POST['blog_sub1'];
$e = $_POST['blog_date'];
$f = $_POST['blog1'];
$g = $_POST['button'];

$h = $_POST['blog_tit1'];
$i = $_POST['blog_sub2'];
$j = $_POST['blog_sub3'];
$k = $_POST['blog_date1'];
$l = $_POST['blog2'];
$m = $_POST['button1'];

$n = $_POST['blog_tit2'];
$o = $_POST['blog_sub4'];
$p = $_POST['blog_sub5'];
$q = $_POST['blog_date2'];
$r = $_POST['blog3'];
$s = $_POST['button2'];

$t = $_POST['search'];
$u = $_POST['cat'];
$v = $_POST['cat1'];
$w = $_POST['cat2'];
$x = $_POST['cat3'];
$y = $_POST['cat4'];
$z = $_POST['cat5'];
$a1 = $_POST['cat6'];
$b1 = $_POST['cat7'];
$c1 = $_POST['cat8'];


//$k = $_POST['service4'];
$d1 = $_POST['poll'];
$e1 = $_POST['poll1'];
$f1 = $_POST['poll_per'];
$g1 = $_POST['poll2'];
$h1 = $_POST['poll_per1'];
$i1 = $_POST['poll3'];
$j1 = $_POST['poll_per2'];
$k1 = $_POST['poll4'];
$l1 = $_POST['poll_per3'];



include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin5` (`title`, `blog_tit`, `blog_sub`, `blog_sub1`, `blog_date`, `blog1`, `button`, `blog_tit1`, `blog_sub2`, `blog_sub3`, `blog_date1`, `blog2`, `button1`, `blog_tit2`, `blog_sub4`, `blog_sub5`, `blog_date2`, `blog3`, `button2`, `search`, `cat`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `poll`, `poll1`, `poll_per`, `poll2`, `poll_per1`, `poll3`, `poll_per2`, `poll4`, `poll_per3`)  VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1', '$f1', '$g1', '$h1', '$i1', '$j1', '$k1', '$l1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>  