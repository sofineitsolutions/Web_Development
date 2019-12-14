<?php
$date = $_POST['date'];
$mobno = $_POST['mobno'];
$eid = $_POST['eid'];
$b1_dec1 = $_POST['b1_dec1'];
$b1_dec2 = $_POST['tb1_dec2'];
$b2_title1 = $_POST['b2_title1'];
$b2_dec1 = $_POST['b2_dec1'];
$b2_btn1 = $_POST['b2_btn1'];
$b2_title2 = $_POST['b2_title2'];
$b2_dec2 = $_POST['b2_dec2'];
$b2_subtitle1 = $_POST['b2_subtitle1'];
$b2_dec3 = $_POST['b2_dec3'];
$b2_btn2 = $_POST['b2_btn2'];
$b2_subtitle2 = $_POST['b2_subtitle2'];
$b2_dec4 = $_POST['b2_dec4'];
$b2_subtitle3 = $_POST['b2_subtitle3'];
$b2_dec5 = $_POST['b2_dec5'];
$b3_title1 = $_POST['b3_title1'];
$b3_subtitle1 = $_POST['b3_subtitle1'];
$b3_con1 = $_POST['b3_con1'];
$b3_name = $_POST['b3_name'];
$b3_con2 = $_POST['b3_con2'];
$b4_title1 = $_POST['b4_title1'];
$b4_subtitle1 = $_POST['b4_subtitle1'];
$b4_dec1 = $_POST['b4_dec1'];
$b4_dec2 = $_POST['b4_dec2'];
$b4_dec3 = $_POST['b4_dec3'];
 $b4_dec4 = $_POST['b4_dec4'];
 $b5_title1 = $_POST['b5_title1'];
  $b5_subtitle1 = $_POST['b5_subtitle1'];
   $b5_dec1 = $_POST['b5_dec1'];
    $b5_dec2 = $_POST['b5_dec2'];
     $b5_dec3 = $_POST['b5_dec3'];
///* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "login");

// // Check connection
// if($link === false){
// die("ERROR: Could not connect. " . mysqli_connect_error());
// }
include("config.php");
// Attempt insert query execution
$sql = "INSERT INTO `admin1` (`date`, `mobno`, `eid`, `b1_dec1`, `b1_dec2`, `b2_title1`, `b2_dec1`, `b2_btn1`, `b2_title2`, `b2_dec2`, `b2_subtitle1`, `b2_dec3`, `b2_btn2`, `b2_subtitle2`, `b2_dec4`, `b2_subtitle3`, `b2_dec5`, `b3_title1`, `b4_subtitle1`, `b3_con1`, `b3_name`, `b3_con2`, `b4_title1`, `b4_subtitle1`, `b4_dec1`,'b4_dec2','b4_dec3','b4_dec4','b5_title1','b5_subtitle1','b5_dec1','b5_dec2','b5_dec3')VALUES ('$date', '$mobno', '$eid', '$b1_dec1', '$b1_dec2', '$b2_title1', '$b2_dec1', '$b2_btn1', '$b2_title2', '$b2_dec2', '$b2_subtitle1', '$b2_dec3', '$b2_btn2', '$b2_subtitle2', '$b2_dec4', '$b2_subtitle3', '$b2_dec5', '$b3_title1', '$b4_subtitle1', '$b3_con1', '$b3_name', '$b3_con2', '$b4_title1', '$b4_subtitle1', '$b4_dec1','$b4_dec2','$b4_dec3','$b4_dec4','$b5_title1','$b5_subtitle1','$b5_dec1','$b5_dec2','b5_dec3')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>