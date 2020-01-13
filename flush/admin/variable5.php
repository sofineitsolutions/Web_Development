<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`single_blog`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$blog_details1 = $res['blog_details1'];
$home = $res['home'];
$blog = $res['blog'];
$blog_details2 = $res['blog_details2'];
$blog_title = $res['blog_title'];
$des1 = $res['des1'];
$des2 = $res['des2'];
$des3 = $res['des3'];
$food1 = $res['food1'];
$tech1 = $res['tech1'];
$politics = $res['politics'];
$lifestyle1 = $res['lifestyle1'];
$name = $res['name'];
$date = $res['date'];
$views= $res['views'];
$blog_comments = $res['blog_comments'];
$des4 = $res['des4'];
$des5 = $res['des5'];
$des6 = $res['des6'];
$prev_post = $res['prev_post'];
$post_name1 = $res['post_name1'];
$next_post = $res['next_post'];
$post_name2 = $res['post_name2'];
$comments = $res['comments'];
$name1 = $res['name1'];
$date1 = $res['date1'];
$c_des1 = $res['c_des1'];
$name2= $res['name2'];
$date2 = $res['date2'];
$c_des2 = $res['c_des2'];
$name3 = $res['name3'];
$date3 = $res['date3'];
$c_des3 = $res['c_des3'];
$name4 = $res['name4'];
$date4 = $res['date4'];
$c_des4 = $res['c_des4'];
$name5 = $res['name5'];
$date5 = $res['date5'];
$c_des5= $res['c_des5'];
$name6 = $res['name6'];
$prof = $res['prof'];
$des7 = $res['des7'];
$news = $res['news'];
$des8 = $res['des8'];
$tag = $res['tag'];
$tech2= $res['tech2'];
$lifestyle2 = $res['lifestyle2'];
$fash1 = $res['fash1'];
$art1 = $res['art1'];
$food2 = $res['food2'];
$arch1 = $res['arch1'];
$adven1 = $res['adven1'];
$insta = $res['insta'];

}
}
else"0 result";
/***************************Single_blog.php***************8***********/

// $blog_details1="Blog Details";   
// $home="Home";
// $blog="Blog ";
// $blog_details2="Blog Details";
// $blog_title="Astronomy Binoculars A Great Alternative";
// $des1="MCSE boot camps have its supporters and its detractors. Some people do 
// not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.";
// $des2="Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
// camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower
// to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed";
// $des3="Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp 
// when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has
// the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed"; 
// $food1="Food,";
// $tech1="Technology,";
// $politics="Politics,";
// $lifestyle1="Lifestyle";
// $name="Mark wiens";
// $date="12 Dec, 2017";
// $views="1.2M Views";
// $blog_comments="06 Comments";
// $des4="MCSE boot camps have its supporters and its detractors. Some people do not understand why you
// should have to spend money on boot camp when you can get the MCSE study materials yourself at a
// fraction of the camp price. However, who has the willpower to actually sit through a self-imposed
// MCSE training.";                 
// $des5= "MCSE boot camps have its supporters and its detractors. Some people do not understand 
// why you should have to spend money on boot camp when you can get the MCSE study materials 
// yourself at a fraction of the camp price. However, who has the willpower.";
// $des6= "MCSE boot camps have its supporters and its detractors. Some people do not understand 
// why you should have to spend money on boot camp when you can get the MCSE study materials 
// yourself at a fraction of the camp price. However, who has the willpower.";         
// $prevres="Prev Post";
// $post_name1="Space The Final Frontier";
// $nextres="Next Post";
// $post_name2="Telescopes 101";
// $comments="05 Comments";
// $name1="Emilly Blunt";
// $date1="December 4, 2017 at 3:12 pm ";
// $c_des1="Never say goodbye till the end comes!";
// $name2="Elsie Cunningham";
// $date2="December 4, 2017 at 3:12 pm";
// $c_des2="Never say goodbye till the end comes!";
// $name3="Annie Stephens";
// $date3="December 4, 2017 at 3:12 pm";
// $c_des3="Never say goodbye till the end comes!";
// $name4="Maria Luna";
// $date4="December 4, 2017 at 3:12 pm";
// $c_des4="Never say goodbye till the end comes!";
// $name5="Ina Hayes";
// $date5="December 4, 2017 at 3:12 pm";
// $c_des5="Never say goodbye till the end comes!";
// $name6="charlie Barber";
// $prof="Senior blog writer";
// $des7="Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to 
// spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.";
// $news="Newsletter";
// $des8=" Here, I focus on a range of items and features that we use in life without
// giving them a second thought.";
// $tag="Tag Clouds";
// $tech2="Technology";
// $lifestyle2="lifestyle";
// $fash1="Fashion";
// $art1="Art";
// $food2="Food";
// $arch1="Architecture";
// $adven1="Adventure";
// $insta="Follow us on instagram";


/************H.php ****************/
$q="About Me";
$r="Do you want to be even more successful? Learn to love learning and growth.
The more effort you put into improving your skills,";
$s="Copyright &copy;";
$t="All rights reserved | This template is made with ";
$u="Colorlib";
$v="Newsletter";
$x="Stay updated with our latest trends";
$w="follow Me";
$y="Let us be social";
?>
