
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin5")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
	$dec1 = $res['dec1'];
    $con1 = $res['con1'];
    $con2 = $res['con2'];
    $con3 = $res['con3'];
    $con4 = $res['con4'];
    $dec2 = $res['dec2'];
    $dec3 = $res['dec3'];
    $dec4 = $res['dec4'];
        

    
 }
}
else"0 result";

$conn->close();

?>
<?php 
	$title1="Happy Customers";
	$dec1="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
	$con1="John Smith";
	$con2="Christine Aguilar";
	$con3="Robert Spears";
	$con4="Bruce Rogers";
	$dec2="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.";
	$dec3="Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.";
	$dec4="The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.";

?>