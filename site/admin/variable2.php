<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'site');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin2")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$tit = $res['tit'];
$t1 = $res['t1'];
$block1 = $res['block1'];
$t2 = $res['t2'];
$service1 = $res['service1'];
$t3 = $res['t3'];
$service2 = $res['service2'];
$t4 = $res['t4'];
$service3 = $res['service3'];
$cus_new = $res['cus_new'];
//$k = $res['service4'];
$l1 = $res['l1'];
$service4 = $res['service4'];
$l2 = $res['l2'];
$service5 = $res['service5'];
$why = $res['why'];
$service6 = $res['service6'];
$s1 = $res['s1'];
$s2 = $res['s2'];
$s3 = $res['s3'];
$s4 = $res['s4'];
$s5 = $res['s5'];
$s6 = $res['s6'];
$s7 = $res['s7'];
$s8 = $res['s8'];
    
}
}
else"0 result";

$conn->close();


$header1="About";
$header2="Services";
$header3="Portfolio";
$header4="Blog";
$header5="Contacts";


//-----------------------------------------index1.php--------------------------------------------------------------//
// $tit="Main Services";
// $t1="Quisque viverra";
// $block1 = "Dipsum dolor sit ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono</p>
//            Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon dertlo";
// $t2="Isque viverratte";
// $service1="Sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono</p>
//             Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon";
// $t3="Kuisque iverram";
// $service2="Sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono</p>
//             Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon";
// $t4="Kouisque erramer";
// $service3="Sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono</p>
//             Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon";


// $cus_new="Custom Content Management";

// $l1="Lueiverra Mertolo Derto";
// $service4="Sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono</p>
//             Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon";
// $l2="Lueiverra Mertolo Derto";
// $service6="Besit ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo monoter lom";
// $why="Why Choose Us?";
// $service5="Sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono</p>
//             Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko lomon";
// $s1="Besit ametconsecteturertolom  werto monikosit";
// $s2="Amet ultricies erateroli me rutruma auctorerttu";
// $s3="Terolp sadertto mertoInteger convawertolo ";
// $s4="Amertoloolaoreetatwertlim wernom fertolom";
// $s5="Dolor sit amsecteturertolom  lid be";
// $s6="Moniko lomon dertlosit amet ultricies erater";
// $s7="Rutruma auctorert retlomoni molokintromoli";
// $s8="Convallis orci vel mi laoreetat terolo ";

?>