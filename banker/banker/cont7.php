
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin8")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
    $con1 = $res['con1'];
	$dec1 = $res['dec1'];
       
 }
}
else"0 result";

$conn->close();

?>
<?php
	$title1="Our Blog";
	$con1="A Basic Guide to Starting a Franchise in the Philippines";
	$dec1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius."; 
?>