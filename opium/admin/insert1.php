<?php
$a = $_POST['gad'];
$b = $_POST['date'];
$c = $_POST['no'];
$d = $_POST['tag'];
$e = $_POST['des'];

$f = $_POST['gad1'];
$g = $_POST['date1'];
$h = $_POST['no1'];
$i = $_POST['tag1'];
$j = $_POST['des1'];

$k = $_POST['gad2'];
$l = $_POST['date2'];
$m = $_POST['no2'];
$n = $_POST['tag2'];
$o = $_POST['des2'];

$p = $_POST['blog'];
$q = $_POST['blog_date'];
$r = $_POST['blog_no'];
$s = $_POST['blog_tag'];
$t = $_POST['blog_des'];

$u = $_POST['blog1'];
$v = $_POST['blog_date1'];
$w = $_POST['blog_no1'];
$x = $_POST['blog_tag1'];
$y = $_POST['blog_des1'];

$z = $_POST['blog2'];
$a1 = $_POST['blog_date2'];
$b1 = $_POST['blog_no2'];
$c1 = $_POST['blog_tag2'];
$d1 = $_POST['blog_des2'];

$e1 = $_POST['blog3'];
$f1 = $_POST['blog_date3'];
$g1 = $_POST['blog_no3'];
$h1 = $_POST['blog_tag3'];
$i1 = $_POST['blog_des3'];

$j1 = $_POST['blog4'];
$k1 = $_POST['blog_date4'];
$l1 = $_POST['blog_no4'];
$m1 = $_POST['blog_tag4'];
$n1 = $_POST['blog_des4'];

$o1 = $_POST['blog5'];
$p1 = $_POST['blog_date5'];
$q1 = $_POST['blog_no5'];
$r1 = $_POST['blog_tag5'];
$s1 = $_POST['blog_des5'];

$t1 = $_POST['blog6'];
$u1 = $_POST['blog_date6'];
$v1 = $_POST['blog_no6'];
$w1 = $_POST['blog_tag6'];
$x1 = $_POST['blog_des6'];

$y1 = $_POST['blog7'];
$z1 = $_POST['blog_date7'];
$a2 = $_POST['blog_no7'];
$b2 = $_POST['blog_tag7'];
$c2 = $_POST['blog_des7'];

$d2 = $_POST['bloger'];
$e2 = $_POST['post'];
$f2 = $_POST['bloger_blog'];

include("../config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin2` (`gad`, `date`, `no`, `tag`, `des`, `gad1`, `date1`, `no1`, `tag1`, `des1`, `gad2`, `date2`, `no2`, `tag2`, `des2`, `blog`, `blog_date`, `blog_no`, `blog_tag`, `blog_des`, `blog1`, `blog_date1`, `blog_no1`, `blog_tag1`, `blog_des1`, `blog2`, `blog_date2`, `blog_no2`, `blog_tag2`, `blog_des2`, `blog3`, `blog_date3`, `blog_no3`, `blog_tag3`, `blog_des3`, `blog4`, `blog_date4`, `blog_no4`, `blog_tag4`, `blog_des4`, `blog5`, `blog_date5`, `blog_no5`, `blog_tag5`, `blog_des5`, `blog6`, `blog_date6`, `blog_no6`, `blog_tag6`, `blog_des6`, `blog7`, `blog_date7`, `blog_no7`, `blog_tag7`, `blog_des7`, `bloger`, `post`, `bloger_blog`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1', '$f1', '$g1', '$h1', '$i1', '$j1', '$k1', '$l1', '$m1', '$n1', '$o1', '$p1', '$q1', '$r1', '$s1', '$t1', '$u1', '$v1', '$w1', '$x1', '$y1', '$z1', '$a2', '$b2','$c2','$d2', '$e2', '$f2')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>