<?php
	require_once'conn.php';
	
	if(ISSET($_POST['save'])){
		$a=$_POST['db_title1'];
		$b=$_POST['db_title2'];
		$c=$_POST['db_title3'];
		$d=$_POST['db_con1'];
		$e=$_POST['db_dec1'];
		$f=$_POST['db_dec2'];
		$g=$_POST['db_dec3'];
		$h=$_POST['db_dec4'];
		$i=$_POST['db_con2'];
		$j=$_POST['db_con3'];
		$k=$_POST['db_con4'];
		$l=$_POST['db_title4'];
		



		


		
	
	

       mysqli_query($conn, "INSERT INTO `table1` VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')") or die(mysqli_error());




     

		
		
		header('location: entry_form1.php');
	}
?>