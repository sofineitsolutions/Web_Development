<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'site');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin1")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$block2 = $res['block2'];
	$des1 = $res['des1'];
	$des2 = $res['des2'];
	$c1 = $res['c1'];
    $c2 = $res['c2'];
    $c3 = $res['c3'];
    $c4 = $res['c4'];
    $about = $res['about'];
    $content= $res['content'];
    $button = $res['button'];
    $title1 = $res['title1'];
    $date = $res['date1'];
    $news1 = $res['news1'];
    $date1 = $res['date2'];
    $news2 = $res['news2'];
    $project = $res['project'];
    
}
}
else"0 result";

$conn->close();


$header1="About";
$header2="Services";
$header3="Portfolio";
$header4="Blog";
$header5="Contacts";




?>





<!-- $block2 = "Unique Artistic Design for All Tastes";
$des1="If you have any questions about this <b>goodie</b> , read the post about it.";
$des2 = "Find a bunch of alike <b>designs</b> at TemplateMonster’s website."; 
$c1="Web Design";
$c2="Graphic Design";
$c3="Development";
$c4="Planning";
$about="About Us";
$content="Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat sit amet ultricies erat rutruma auctor, leo magna Integer convallis orci vel mi laoreet, at ornare lorem consequat.";
$button = "Click Here";
$title1="NEWS ";
$date ="14 June Quisque viverra";
$news1= "Dipsum dolor sit amet, consecteturertolom  werto moniko
          sit amet ultricies erat rutruma auctorerttu terolp sadertto
          Integer convallis orci vel mi laoreetatwertlim wernom vert
          Ipsum dolor sit amsecteturertolom  lid ber asrot";
$date1="17 June Kuisque viverrert";
$news2= "Lipsum dolor sit amet, consecteturertolom  dewas terolo
          it amet ultricies erat rutruma auctorerttu nertoli moniko
          Integer convallis orci vel mi laoreetatwertlim wastrolin der
          psum dolor sit amsecteturertolom  saterolo monikom";
$project ="Featured Projects"; -->

