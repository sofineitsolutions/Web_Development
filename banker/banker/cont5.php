
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin6")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
    $con1 = $res['con1'];
	$dec1 = $res['dec1'];
	$dec2 = $res['dec2'];
    $dec3 = $res['dec3'];
    $dec4 = $res['dec4'];
    $dec5 = $res['dec5'];
    $con2 = $res['con2'];
    $con3 = $res['con3'];
    
    
   
        

    
 }
}
else"0 result";

$conn->close();

?>
<?php
	$title1="Pricing";
	$con1="Basic";
	$dec1="Officia quaerat eaque neque";
	$dec2="Possimus aut consequuntur incidunt"; 
	$dec3="Lorem ipsum dolor sit amet";
	$dec4="Consectetur adipisicing elit";
	$dec5="Dolorum esse odio quas architecto sint";
	$con2="Premium";
	$con3="Professional"; 
?>