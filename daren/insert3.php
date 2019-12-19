<?php
$a = $_POST['title1'];
$b = $_POST['Travel_Lifestyle'];
$c = $_POST['Comment'];
$d = $_POST['des1'];
$e = $_POST['des2'];
$f = $_POST['des3'];
$g = $_POST['des4'];
$h = $_POST['des5'];
$i = $_POST['like'];
$j = $_POST['Prev_Post'];
$k = $_POST['Prev_post1'];
$l = $_POST['Next_Post'];
$m = $_POST['Next_Post1'];
$n = $_POST['name'];
$o = $_POST['des'];
$p = $_POST['comments'];
$q = $_POST['comments1'];
$r = $_POST['name1'];
$s = $_POST['date1'];
$t = $_POST['comments2'];
$u = $_POST['name2'];
$v = $_POST['date2'];
$w = $_POST['comments3'];
$x = $_POST['name3'];
$y = $_POST['date3'];
$z = $_POST['name4'];
$a1 = $_POST['date4'];
$b1 = $_POST['ptitle1'];
$c1 = $_POST['name5'];
$d1 = $_POST['date5'];
$e1 = $_POST['ptitle2'];
$f1 = $_POST['name6'];
$g1 = $_POST['date6'];
$h1 = $_POST['ptitle3'];

include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `daren`.`single_blog` (`title1`, `Travel_Lifestyle`, `Comment`, `des1`, `des2`, `des3`, `des4`, `des5`, `like`, 
`Prev_Post`, `Prev_Post1`, `Next_Post`, `Next_Post1`, `name`, `des`, `comments`, `comments1`, `name1`, `date1`, `comments2`, 
`name2`, `date2`, `comments3`, `name3`, `date3`, `name4`, `date4`, `ptitle1`, `name5`, `date5`, `ptitle2`, `name6`, `date6`,
 `ptitle3`) VALUES ('$a', '$b', 
 '$c', '$d', '$e', '$f','$g', '$h', '$i', '$j', '$k', '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w',
 '$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
