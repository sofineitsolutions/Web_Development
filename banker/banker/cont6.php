
<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin7")or die(mysqli_error($conn));
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
	$dec2 = $res['dec2'];
    $dec3 = $res['dec3'];
    $con6 = $res['con6'];
    $dec4 = $res['dec4'];
       
 }
}
else"0 result";

$conn->close();

?>
<?php
	$title1="Frequently Ask Questions";
	$con1="Can I accept both Paypal and Stripe?";
	$dec1="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
	$con2="What available is refund period?";
	$con3="Where are you from?";
	$dec2="Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.";
	$con4="What is your opening time?";
	$con5="Bank Loan";
	$dec3="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
	$con6="Banking Consulation";
	$dec4="Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."; 
?>