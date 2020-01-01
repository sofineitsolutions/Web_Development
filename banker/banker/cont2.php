
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin3")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
	$title2 = $res['title2'];
    $dec1 = $res['dec1'];
    $con1 = $res['con1'];
    $dec2 = $res['dec2'];
    $con2 = $res['con2'];
    $con3 = $res['con3'];
 }
}
else"0 result";

$conn->close();

?>
<?php
	$title1="Gallery";
	$title2="How It Works";
	$dec1="A small river named Duden flows by their place and supplies it with the necessary regelialia.";
	$con1="01. Online Applications";
	$dec2="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.";
	$con2="02. Get an approval";
	$con3="03. Card delivery"; 
?>