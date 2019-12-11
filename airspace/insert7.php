<?php
$a = $_POST['title'];
$b = $_POST['des1'];
$c = $_POST['blog1'];
$d = $_POST['ddate'];
$e = $_POST['dadmin'];
$f = $_POST['dlife'];
$g = $_POST['dtravel'];
$h = $_POST['dfashion'];
$i = $_POST['ddes1'];

$j = $_POST['ddes2'];
$k = $_POST['ddes3'];
$l = $_POST['ddes4'];
$m = $_POST['comment1'];
$n = $_POST['name'];

$o = $_POST['date'];
$p = $_POST['rep'];
$q = $_POST['ans'];
$r = $_POST['name1'];
$s = $_POST['date1'];
$t = $_POST['ans1'];
$u = $_POST['name2'];
$v = $_POST['date2'];
$w = $_POST['ans2'];

$x = $_POST['name3'];
$y = $_POST['date3'];
$z = $_POST['ans3'];
$a1 = $_POST['name4'];
$b1 = $_POST['date4'];

$c1 = $_POST['ans4'];
$d1 = $_POST['post1'];
$e1 = $_POST['button'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin8` (`title`, `des1`, `blog1`, `ddate`, `dadmin`, `dlife`, `dtravel`, `dfashion`, `ddes1`, `ddes2`, `ddes3`, `ddes4`, `comment1`, `name`, `date`, `rep`, `ans`, `name1`, `date1`, `ans1`, `name2`, `date2`, `ans2`, `name3`, `date3`, `ans3`, `name4`, `date4`, `ans4`, `post1`, `button`)VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$b1', '$c1', '$d1', '$e1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>