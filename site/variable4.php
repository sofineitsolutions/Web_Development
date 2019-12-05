<?php 
//----------------------------------index3.php----------------------------------------

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'site');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin4")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title = $res['title'];
$title1 = $res['title1'];
$head = $res['head'];
$line1 = $res['line1'];
$line2 = $res['line2'];
$line3 = $res['line3'];
$line4 = $res['line4'];
$contact = $res['contact'];
$email = $res['email'];
$email1 = $res['email1'];
    
}
}
else"0 result";

$conn->close();






// $title="Our Location";
// $title1="Contact Form";
// $head="Contact Information";
// $line1="We offer you 24/7 support for all ";
// $line2="premium templates";
// $line3="If you need help in customization of freebies, ask guys from";
// $line4="TemplateTuning";
// $contact = "Ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo monolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom  lid ber asrot gertoli moniko.</p>";
//  $contact1="The Company Name Inc.";
//  $contact2="9870 St Vincent Place, <br>";
//         Glasgow, DC 45 Fr 45. <br>";
//         Telephone: +1 800 603 6035 <br>";
//         FAX: +1 800 889 9898 <br>";
//  $email="E-mail:";       
//  $email1="mail@demolink.org";

 
$header1="About";
$header2="Services";
$header3="Portfolio";
$header4="Blog";
$header5="Contacts";
?>