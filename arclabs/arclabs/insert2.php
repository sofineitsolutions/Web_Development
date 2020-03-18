<?php
	require_once'conn.php';
	
	if(ISSET($_POST['save'])){
		$a=$_POST['db_title1'];
		$b=$_POST['db_subtitle1'];
		$c=$_POST['db_con1'];
		$d=$_POST['db_dec1'];
		$e=$_POST['db_con2'];
		$f=$_POST['db_con3'];
		$g=$_POST['db_con4'];
		$h=$_POST['db_dec2'];
		$i=$_POST['db_dec3'];
		$j=$_POST['db_dec4'];
		$k=$_POST['db_title2'];

		
		



		


		
	
	

       mysqli_query($conn, "INSERT INTO `table2` VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')") or die(mysqli_error());




     

		
		
		header('location: entry_form2.php');
	}
?>