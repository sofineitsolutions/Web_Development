
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin4")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
	$con1 = $res['con1'];
    $dec1 = $res['dec1'];
    $con2 = $res['con2'];
    $con3 = $res['con3'];
    $con4 = $res['con4'];
    $con5 = $res['con5'];
    $con6 = $res['con6'];     

    
 }
}
else"0 result";

$conn->close();

?>
<?php
	$title1="Our Services";
	$con1="Business Consulting";
	$dec1="A small river named Duden flows by their place and supplies it with the necessary regelialia.";
	$con2="Credit Card";
	$con3="Income Monitoring";
	$con4="Insurance Consulting";
	$con5="Financial Investment";
	$con6="Financial Management";
?>