<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM admin4")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$tit = $res['title'];
	$msg1 = $res['msg1'];
	$msg2 = $res['msg2'];
	$msg3 = $res['msg3'];
    $msg4 = $res['msg4'];
    $msg5 = $res['msg5'];
    $msg6 = $res['msg6'];
    $msg7 = $res['msg7'];
    $msg8 = $res['msg8'];
    $msg9 = $res['msg9'];
    $msg10 = $res['msg10'];
    $msg11 = $res['msg11'];
    $msg12 = $res['msg12'];
    //$msg12 = $res['msg12'];
    

}
}
else"0 result";

$conn->close();


//$button="Free Bootstrap Templates";


// $tit="Alert Styles";
// $msg1="You succesfully read this message";
// $msg2="Better check yourself.You are not looking too good";
// $msg3="Better check yourself.You are not looking too good";
// $msg4="Better check yourself.You are not looking too good";
// $msg5="You succesfully read this message";
// $msg6="Better check yourself.You are not looking too good";
// $msg7="Better check yourself.You are not looking too good";
// $msg8="Better check yourself.You are not looking too good";
// $msg9="You succesfully read this message";
// $msg10="Better check yourself.You are not looking too good";
// $msg11="Better check yourself.You are not looking too good";
// $msg12="Better check yourself.You are not looking too good"; 

?>