<?php
//<!------------------------------------------------- index.php -->

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin1")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$b1_title1 = $res['b1_title1'];
	$b1_subtitle1 = $res['b1_subtitle1'];
	$b1_title2 = $res['b1_title2'];
	$b1_title3 = $res['b1_title3'];
    $con1 = $res['con1'];
    $dec1 = $res['dec1'];
    $con2 = $res['con2'];
    $con3 = $res['con3'];
    $title4 = $res['title4'];
    $dec2 = $res['dec2'];
    $dec3 = $res['dec3'];
    $dec4 = $res['dec4'];

}
}
else"0 result";

$conn->close();

?>
<?php
    //$b1_title1="Banking Solutions";
    //$b1_subtitle1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!";
    //$b1_title2="Financing Solutions";
    //$b1_title3="Savings Accounts";
    //$con1="Money Savings";
    //$dec1="A small river named Duden flows by their place and supplies it with the necessary regelialia.";
    //$con2="Online Shoppings";
    //$con3="Credit / Debit Cards";
    //$title4="Amortization Computation";
    //$dec2=">Officia quaerat eaque neque";
    //$dec3="Lorliem ipsum dolor sit amet";
    //$dec4="Consectetur adipisicing elit";
?>