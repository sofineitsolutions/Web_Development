<?php
$a = $_POST['title'];
$b = $_POST['des'];
$c = $_POST['button1'];
$d = $_POST['social'];
$e = $_POST['social_life'];
$f = $_POST['politics'];
$g = $_POST['part_politics'];
$h = $_POST['food'];
$i = $_POST['food_finished'];
$j = $_POST['blog1'];
$k = $_POST['des1'];
$l = $_POST['view_more1'];
$m = $_POST['food1'];
$n = $_POST['tech1'];
$o= $_POST['politics1'];
$p = $_POST['lifestyle1'];
$q = $_POST['name1'];
$r = $_POST['date1'];
$s = $_POST['views1'];
$t = $_POST['comments1'];
$u = $_POST['blog2'];
$v = $_POST['des2'];
$w = $_POST['view_more2'];
$x = $_POST['food2'];
$y = $_POST['tech2'];
$z = $_POST['politics2'];
$a1 = $_POST['lifestyle2'];
$b1= $_POST['name2'];
$c1 = $_POST['date2'];
$d1 = $_POST['views2'];
$e1 = $_POST['comments2'];
$f1 = $_POST['blog3'];
$g1 = $_POST['des3'];
$h1 = $_POST['view_more3'];
$i1 = $_POST['food3'];
$j1 = $_POST['tech3'];
$k1 = $_POST['politics3'];
$l1 = $_POST['lifestyle3'];
$m1= $_POST['name3'];
$n1 = $_POST['date3'];
$o1 = $_POST['views3'];
$p1 = $_POST['comments3'];
$q1 = $_POST['blog4'];
$r1 = $_POST['des4'];
$s1= $_POST['view_more4'];
$t1 = $_POST['food4'];
$u1 = $_POST['tech4'];
$v1 = $_POST['politics4'];
$w1 = $_POST['lifestyle4'];
$x1 = $_POST['name4'];
$y1 = $_POST['date4'];
$z1 = $_POST['views4'];
$a2 = $_POST['comments4'];
$b2 = $_POST['blog5'];
$c2 = $_POST['des5'];
$d2 = $_POST['view_more5'];
$e2 = $_POST['food5'];
$f2 = $_POST['tech5'];
$g2 = $_POST['politics5'];
$h2 = $_POST['lifestyle5'];
$i2 = $_POST['name5'];
$j2 = $_POST['date5'];
$k2 = $_POST['views5'];
$l2 = $_POST['comments5'];
$m2 = $_POST['name6'];
$n2 = $_POST['prof'];
$o2 = $_POST['des6'];
$p2 = $_POST['news'];
$q2 = $_POST['des7'];
$r2 = $_POST['tag'];
$s2 = $_POST['tech6'];
$t2 = $_POST['lifestyle6'];
$u2 = $_POST['fash'];
$v2 = $_POST['art'];
$w2 = $_POST['food6'];
$x2 = $_POST['arch'];
$y2 = $_POST['adven'];
$z2 = $_POST['news1'];
$a3 = $_POST['insta'];

include("config.php");
// Attempt insert query execution
// $sql = "INSERT INTO `flush`.`blog` (`title`, `des`, `button1`, `social`, `social_life`, `politics`, `part_politics`, `food`,
//  `food_finished`, `blog1`, `des1`, `view_more1`, `food1`, `tech1`, `politics1`, `lifestyle1`, `name1`, `date1`, `views1`,
//   `comments1`, `blog2`, `des2`, `view_more2`, `food2`, `tech2`, `politics2`, `lifestyle2`, `name2`, `date2`, `views2`, `comments2`,
//    `blog3`, `des3`, `view_more3`, `food3`, `tech3`, `politics3`, `lifestyle3`, `name3`, `date3`, `views3`, `comments3`, `blog4`,
//     `des4`, `view_more4`, `food4`, `tech4`, `politics4`, `lifestyle4`, `name4`, `date4`, `views4`, `comments4`, `blog5`, `des5`, 
//     `view_more5`, `food5`, `tech5`, `politics5`, `lifestyle5`, `name5`, `date5`, `views5`, `comments5`, `name6`, `prof`, `des6`, 
//     `news`, `des7`, `tag`, `tech6`, `lifestyle6`, `fash`, `art`, `food6`, `arch`, `adven`, `news1`, `insta`) VALUES
//      ('$a', '$b', '$c', '$d','$e', '$f', '$g', '$h', '$i', '$j', '$k', 
//  '$l','$m', '$n', '$o', '$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1',
//  '$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1','$u1','$v1','$w1','$x1','$y1','$z1','$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2',
//  '$i2','$j2','$k2','$l2','$m2','$n2','$o2','$p2','$q2','$r2','$s2','$t2','$u2','$v2','$w2','$x2','$y2','$z2','$a3')";
$sql="UPDATE `blog` SET title='$a',des='$b',button1='$c',social='$d',social_life='$e',politics='$f',
part_politics='$g',food='$h',food_finished='$i',blog1='$j',des1='$k',view_more1='$l',
food1='$m',tech1='$n',politics1='$o',lifestyle1='$p',name1='$q',date1='$r',views1='$s',
comments1='$t',blog2='$u',des2='$v',view_more2='$w',food2='$x',tech2='$y',politics2='$z',
lifestyle2='$a1',name2='$b1',date2='$c1',views2='$d1',comments2='$e1',blog3='$f1',des3='$g1',view_more3='$h1',food3='$i1',tech3='$j1',
politics3='$k1',lifestyle3='$l1',name3='$m1',date3='$n1',views3='$o1',comments3='$p1',blog4='$q1',des4='$r1',view_more4='$s1',food4='$t1',tech4='$u1',
politics4='$v1',lifestyle4='$w1',name4='$x1',date4='$y1',views4='$z1',comments4='$a2',blog5='$b2',des5='$c2',view_more5='$d2',food5='$e2',tech5='$f2',
politics5='$g2',lifestyle5='$h2',name5='$i2',date5='$j2',views5='$k2',comments5='$l2',name6='$m2',prof='$n2',des6='$o2',news='$p2',des7='$q2',
tag='$r2',tech6='$s2',lifestyle6='$t2',fash='$u2',art='$v2',food6='$w2',arch='$x2',adven='$y2',news1='$z2',insta='$a3' WHERE id=1";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>