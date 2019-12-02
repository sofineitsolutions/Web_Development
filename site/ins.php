<?php
$a = $_POST['email'];
$b = $_POST['pass'];
//$c = $_POST['number'];
//$d = $_REQUEST['message'];
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "t1");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO `person` (`email`, `pass`) VALUES ('$a', '$b')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<?php
include("config.php");

$sql1="SELECT email,pass FROM person";

$result = mysqli_query($link,$sql1);

if(mysqli_num_rows($result) > 0 ){
 
   while( $row = mysqli_fetch_assoc($result)){
 
  $a = $row["email"];
  $b = $row["pass"];
 
  }
 } else{
  echo "0 results";
  }	


mysqli_close($link);

?>