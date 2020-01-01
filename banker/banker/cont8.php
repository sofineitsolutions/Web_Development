
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin9")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
    $add = $res['add'];
	$no = $res['no'];
	$id = $res['id'];
       
 }
}
else"0 result";

$conn->close();

?>
<?php
	$title="Contact Us";
	$add="203 Fake St. Mountain View, San Francisco, California, USA";
	$no="+1 232 3235 324";
	$id="youremail@domain.com";
?>