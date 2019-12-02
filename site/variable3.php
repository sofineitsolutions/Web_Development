<?php 
//----------------------------------index3.php----------------------------------------


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'site');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin3")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title = $res['title'];
$tit1 = $res['tit1'];
$portfolio1 = $res['portfolio1'];
$tit2 = $res['tit2'];
$portfolio2 = $res['portfolio2'];
$tit3 = $res['tit3'];
$portfolio3 = $res['portfolio3'];
$tit4 = $res['tit4'];
$portfolio4 = $res['portfolio4'];
$tit5 = $res['tit5'];
//$k = $res['service4'];
$portfolio5 = $res['portfolio5'];
$tit6 = $res['tit6'];
$portfolio6 = $res['portfolio6'];
$tit7 = $res['tit7'];
$portfolio7 = $res['portfolio7'];
$tit8 = $res['tit8'];
$portfolio8 = $res['portfolio8'];
    
}
}
else"0 result";

$conn->close();

 
$header1="About";
$header2="Services";
$header3="Portfolio";
$header4="Blog";
$header5="Contacts";


// $title="Portfolio";
// $tit1="Lueiverra Mertolo Derto";
// $portfolio1="Asit ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto";

// $tit2="Keiverra Mertolo Terto";
// $portfolio2="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";

// $tit3="Saeerra Gertolo Lertor";
// $portfolio3="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";

// $tit4="Jeiverra Lertolo Derto";
// $portfolio4="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";

// $tit5="Nueiverra Bertolo Herto";
// $portfolio5="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";

// $tit6="Julieiverra Vertolo Merto";
// $portfolio6="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";

// $tit7="Lueiverra Gertolo Merto";
// $portfolio7="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";

// $tit8="Mueiverra Fertolo Serto";
// $portfolio8="Detconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt";
?>