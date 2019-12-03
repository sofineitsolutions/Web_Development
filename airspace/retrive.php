<?php
include("config.php");

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query_user = mysqli_query($link,"SELECT * FROM home")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){

	echo"<table><tr><th>Title</th><th>Description</th><th>About</th><th>Description1</th><th>Description2</th><th>idea</th><th>idea1</th><th>idea2</th><th>idea3</th><th>service1</th><th>service2</th><th>service3</th><th>service4</th><th>service5</th><th>service6</th><th>service7</th><th>service8</th><th>service9</th><th>Experiance1</th><th>Experiance2</th><th>Fun</th><th>Fun1</th><th>View1</th><th>View2</th><th>View3</th><th>View4</th></tr>";

while($res = mysqli_fetch_array($query_user) ){
	echo"<tr><td>".$res['name']."</td><td>".$res['phoneno']."</td><td>".$res['msg']."</td></tr>";
     echo "<br>";
echo"</table>";
}
}
else{
	echo"0 result";
}
$link->close();
?>