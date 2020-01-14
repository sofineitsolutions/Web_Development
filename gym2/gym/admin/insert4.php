<?php
$a = $_POST['title1'];
$b = $_POST['des1'];
$c = $_POST['Travel_Lifestyle'];
$d = $_POST['comments1'];
$e = $_POST['des2'];
$f = $_POST['des3'];
$g = $_POST['des4'];
$h = $_POST['des5'];
$i = $_POST['des6'];
$j = $_POST['like'];
$k = $_POST['Prev_Post'];
$l = $_POST['Prev_Post1'];
$m = $_POST['Next_Post'];
$n = $_POST['Next_Post1'];
$o = $_POST['name1'];
$p = $_POST['ndes1'];
$q = $_POST['comments2'];
$r = $_POST['cdes1'];
$s = $_POST['cname1'];
$t = $_POST['date1'];
$u = $_POST['cdes2'];
$v = $_POST['cname2'];
$w = $_POST['date2'];
$x = $_POST['cdes3'];
$y = $_POST['cname3'];
$z = $_POST['date3'];
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `gym`.`single_blog` (`title1`, `des1`, `Travel_Lifestyle`, `comments1`, `des2`, `des3`, `des4`, `des5`, `des6`, `like`,
 `Prev_Post`, `Prev_Post1`, `Next_Post`, `Next_Post1`, `name1`, `ndes1`, `comments2`, `cdes1`, `cname1`, `date1`, `cdes2`, `cname2`, `date2`,
  `cdes3`, `cname3`, `date3`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', 
 '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z')";
// $sql="UPDATE `single_blog` SET title1='$a',des1='$b',Travel_Lifestyle='$c',comments1='$d',des2='$e',des3='$f',
//  des4='$g',des5='$h',des6='$i',like='$j',Prev_Post='$k',Prev_Post1='$l',
//  Next_Post='$m',Next_Post1='$n',name1='$o',ndes1='$p',comments2='$q',cdes1='$r',cname1='$s',
//  date1='$t',cdes2='$u',cname2='$v',date2='$w',cdes3='$x',cname3='$y',date3='$z' WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>      