
<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'banker');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin2")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title1 = $res['title1'];
	$subtitle1 = $res['subtitle1'];
	$con1 = $res['con1'];
    $dec1 = $res['dec1'];
    $dec2 = $res['dec2'];
    $name1 = $res['name1'];
    $post1 = $res['post1'];
    $name2 = $res['name2'];
    $post2 = $res['post2'];
    $name3 = $res['name3'];
    $post3 = $res['post3'];
    $name4 = $res['name4'];
    $post4 = $res['post4'];
    $name5 = $res['name5'];


}
}
else"0 result";

$conn->close();

?>
<?php
	//$title1="About Us";
	//$subtitle1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.";
	//$con1="We Solve Your Financial Problem";
	//$dec1="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.";
	//$dec2="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.";
	//$con2="Meet Team";
	//$dec2="A small river named Duden flows by their place and supplies it with the necessary regelialia.";
	//$name1="Kaiara Spencer";
	//$post1="Finance Manager";
	//$name2="Dave Simpson";
	//$post2="Marketing Manager";
	//$name3="Ben Thompson";
	//$post3="Accountant";
	//$name4="Kyla Stewart";
	//$post4="Bank Teller";
	//$name5="Chris Stewart";
?>