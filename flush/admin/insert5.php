<?php
$a = $_POST['blog_details1'];
$b = $_POST['home'];
$c = $_POST['blog'];
$d = $_POST['blog_details2'];
$e = $_POST['blog_title'];
$f = $_POST['des1'];
$g = $_POST['des2'];
$h = $_POST['des3'];
$i = $_POST['food1'];
$j = $_POST['tech1'];
$k = $_POST['politics'];
$l = $_POST['lifestyle1'];
$m = $_POST['name'];
$n = $_POST['date'];
$o = $_POST['views'];
$p = $_POST['blog_comments'];
$q = $_POST['des4'];
$r = $_POST['des5'];
$s = $_POST['des6'];
$t = $_POST['prev_post'];
$u = $_POST['post_name1'];
$v = $_POST['next_post'];
$w = $_POST['post_name2'];
$x = $_POST['comments'];
$y = $_POST['name1'];
$z = $_POST['date1'];
$a1 = $_POST['c_des1'];
$b1 = $_POST['name2'];
$c1 = $_POST['date2'];
$d1 = $_POST['c_des2'];
$e1 = $_POST['name3'];
$f1 = $_POST['date3'];
$g1 = $_POST['c_des3'];
$h1 = $_POST['name4'];
$i1 = $_POST['date4'];
$j1 = $_POST['c_des4'];
$k1 = $_POST['name5'];
$l1 = $_POST['date5'];
$m1 = $_POST['c_des5'];
$n1 = $_POST['name6'];
$o1 = $_POST['prof'];
$p1 = $_POST['des7'];
$q1 = $_POST['news'];
$r1 = $_POST['des8'];
$s1 = $_POST['tag'];
$t1 = $_POST['tech2'];
$u1 = $_POST['lifestyle2'];
$v1 = $_POST['fash1'];
$w1 = $_POST['art1'];
$x1 = $_POST['food2'];
$y1 = $_POST['arch1'];
$z1 = $_POST['adven1'];
$a2 = $_POST['insta'];
include("config.php");
// Attempt insert query execution
// $sql = "INSERT INTO `flush`.`single_blog` (`blog_details1`, `home`, `blog`, `blog_details2`, `blog_title`, `des1`, `des2`, `des3`, `food1`, 
// `tech1`, `politics`, `lifestyle1`, `name`, `date`, `views`, `blog_comments`, `des4`, `des5`, `des6`, `prev_post`, `post_name1`, `next_post`, 
// `post_name2`, `comments`, `name1`, `date1`, `c_des1`, `name2`, `date2`, `c_des2`, `name3`, `date3`, `c_des3`, `name4`, `date4`, `c_des4`, 
// `name5`, `date5`, `c_des5`, `name6`, `prof`, `des7`, `news`, `des8`, `tag`, `tech2`, `lifestyle2`, `fash1`, `art1`, `food2`, `arch1`, `adven1`, 
// `insta`) VALUES ('$a', '$b', '$c', '$d','$e', '$f', '$g', '$h', '$i', '$j', '$k', 
// '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1',
// '$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1','$u1','$v1','$w1','$x1','$y1','$z1','$a2')";
$sql="UPDATE `single_blog` SET blog_details1='$a',home='$b',blog='$c',blog_details2='$d',blog_title='$e',des1='$f',
des2='$g',des3='$h',food1='$i',tech1='$j',politics='$k',lifestyle1='$l',name='$m',date='$n',views='$o',blog_comments='$p',des4='$q',des5='$r',des6='$s',
prev_post='$t',post_name1='$u',next_post='$v',post_name2='$w',comments='$x',name1='$y',date1='$z',c_des1='$a1',name2='$b1',date2='$c1',
c_des2='$d1',name3='$e1',date3='$f1',c_des3='$g1',name4='$h1',date4='$i1',c_des4='$j1',name5='$k1',date5='$l1',c_des5='$m1',name6='$n1',prof='$o1',des7='$p1',
news='$q1',des8='$r1',tag='$s1',tech2='$t1',lifestyle2='$u1',fash1='$v1',art1='$w1',food2='$x1',arch1='$y1',adven1='$z1',insta='$a2' WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>