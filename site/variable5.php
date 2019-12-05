<?php



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'site');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin5")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title = $res['title'];
$blog_tit = $res['blog_tit'];
$blog_sub = $res['blog_sub'];
$blog_sub1 = $res['blog_sub1'];
$blog_date = $res['blog_date'];
$blog1 = $res['blog1'];
$button = $res['button'];

$blog_tit1 = $res['blog_tit1'];
$blog_sub2 = $res['blog_sub2'];
$blog_sub3 = $res['blog_sub3'];
$blog_date1 = $res['blog_date1'];
$blog2 = $res['blog2'];
$button1 = $res['button1'];

$blog_tit2 = $res['blog_tit2'];
$blog_sub4 = $res['blog_sub4'];
$blog_sub5 = $res['blog_sub5'];
$blog_date2 = $res['blog_date2'];
$blog3 = $res['blog3'];
$button2 = $res['button2'];

$search = $res['search'];
$cat = $res['cat'];
$cat1 = $res['cat1'];
$cat2 = $res['cat2'];
$cat3 = $res['cat3'];
$cat4 = $res['cat4'];
$cat5 = $res['cat5'];
$cat6 = $res['cat6'];
$cat7 = $res['cat7'];
$cat8 = $res['cat8'];


//$k = $res['service4'];
$poll = $res['poll'];
$poll1 = $res['poll1'];
$poll_per = $res['poll_per'];
$poll2 = $res['poll2'];
$poll_per1 = $res['poll_per1'];
$poll3 = $res['poll3'];
$poll_per2 = $res['poll_per2'];
$poll4 = $res['poll4'];
$poll_per3 = $res['poll_per3'];
    
}
}
else"0 result";

$conn->close();

// $title="Blog";
// $blog_tit="Lueiverra Mertolo Dertomertolino Mel";
// $blog_sub="Submitted by";
// $blog_sub1="Admin";
// $blog_date="11 June, 2014";
// $blog1 ="Asit ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono</p>
//               Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon dertlosit amet ultricies erat rutruma auctorert";
// $button="more";


// $blog_tit1="Hoeiverra Tertolo Gertomertolino";
// $blog_sub2="Submitted by";
// $blog_sub3="Admin";
// $blog_date1="14 June, 2014";
// $blog2 ="Koletconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono</p>
//               Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon dertlosit amet ultricies erat rutruma auctorerte";
// $button1="more";              


// $blog_tit2="Mertolo Dertomertolino Melonwe";
// $blog_sub4="Submitted by";
// $blog_sub5="Admin";
// $blog_date2="18 June, 2014";
// $blog3 = " <p>Gerit ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono</p>
//               Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon dertlosit amet ultricies erat rutruma aucto";
// $button2="more";

// $search="Search";
// $cat="Categories";
// $cat1="Besit ametconsecteturertolom  werto monikosit ";
// $cat2="Amet ultricies erateroli me rutruma auctorerttu";
// $cat3="Terolp sadertto mertoInteger convawertolo";
// $cat4="Amertoloolaoreetatwertlim wernom fertolom";
// $cat5="Dolor sit amsecteturertolom  lid be";
// $cat6="Moniko lomon dertlosit amet ultricies erater";
// $cat7="Rutruma auctorert retlomoni molokintromoli";
// $cat8="Convallis orci vel mi laoreetat terolo";

// $poll="Poll";

// $poll1="Super";
// $poll_per="39%  ";
// $poll2="Good";
// $poll_per1="31%";
// $poll3="Normal";
// $poll_per2="25%";
// $poll4="Bad ";
// $poll_per3="11%";















$footer1="Web Design";
$footer2="Privacy Policy";
$footer3="Website designed by ";
$footer4="priyanka ahire";



$header1="About";
$header2="Services";
$header3="Portfolio";
$header4="Blog";
$header5="Contacts";







?>















