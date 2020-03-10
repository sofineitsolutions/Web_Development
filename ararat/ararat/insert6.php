<?php
	require_once'conn.php';
	
	if(ISSET($_POST['save'])){
		$a=$_POST['db_title1'];
		$b=$_POST['db_subtitle1'];
		$c=$_POST['db_dec1'];
		$d=$_POST['db_dec2'];
		$e=$_POST['db_dec3'];
		$f=$_POST['db_dec4'];
		$g=$_POST['db_dec5'];
		$h=$_POST['db_title2'];
		$i=$_POST['db_title3'];
		$j=$_POST['db_name1'];
		$k=$_POST['db_con1'];
		$l=$_POST['db_title4'];
		$m=$_POST['db_con2'];
		$n=$_POST['db_name2'];
		$o=$_POST['db_name3'];
		$p=$_POST['db_name4'];
		$q=$_POST['db_con3'];
		$r=$_POST['db_con4'];
		$s=$_POST['db_title5'];
		$t=$_POST['db_con5'];
		$u=$_POST['db_con6'];
		$v=$_POST['db_con7'];
		$w=$_POST['db_con8'];
		$x=$_POST['db_con9'];
		$y=$_POST['db_con10'];
		$z=$_POST['db_title6'];
		$a1=$_POST['db_con11'];
		$b1=$_POST['db_con12'];
		$c1=$_POST['db_con13'];
		$d1=$_POST['db_con14'];


		
	
	

       mysqli_query($conn, "INSERT INTO `user6` VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1')") or die(mysqli_error());


      // $conn="UPDATE `user1` SET `db_title`='$a',`db_subtitle`='$b',`db_title1`='$c',`db_subtitle1`='$d',`db_con1`='$e',`db_con2`='$f',`db_title2`='$g',`db_con3`='$h',`db_dec1`='$i',`db_con4`='$j',`db_con5`='$k',`db_title3`='$l',`db_con6`='$m',`db_con7`='$n',`db_con8`='$o',`db_con9`='$p',`db_dec2`='$q',`db_dec3`='$r',`db_dec4`='$s',`db_name1`='$t',`db_name2`='$u',`db_name3`='$v',`db_post1`='$w',`db_post2`='$x',`db_post3`='$y' WHERE id=1 ";

		
		
		header('location: entry_form5.php');
	}
?>