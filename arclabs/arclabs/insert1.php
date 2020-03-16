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
		$m=$_POST['db_subtitle1'];
		$n=$_POST['db_dec5'];
		$o=$_POST['db_title5'];
		$p=$_POST['db_subtitle2'];
		$q=$_POST['db_con5'];
		$r=$_POST['db_con6'];
		$s=$_POST['db_con7'];
		$t=$_POST['db_con8'];
		$u=$_POST['db_con9'];
		$v=$_POST['db_con10'];
		$w=$_POST['db_dec6'];
		$x=$_POST['db_dec7'];
		$y=$_POST['db_dec8'];
		$z=$_POST['db_dec9'];
		$a1=$_POST['db_con11'];
		$b1=$_POST['db_con12'];
		$c1=$_POST['db_con13'];
		$d1=$_POST['db_title6'];
		$e1=$_POST['db_subtitle3'];
		$f1=$_POST['db_dec10'];
		$g1=$_POST['db_dec11'];
		$h1=$_POST['db_dec12'];
		$i1=$_POST['db_dec13'];
		$j1=$_POST['db_dec14'];
		$k1=$_POST['db_name1'];
		$l1=$_POST['db_name2'];
		$m1=$_POST['db_name3'];
		$n1=$_POST['db_name4'];
		$o1=$_POST['db_name5'];
		$p1=$_POST['db_post1'];
		$q1=$_POST['db_post2'];
		$r1=$_POST['db_post3'];
		$s1=$_POST['db_post4'];
		$t1=$_POST['db_post5'];
		



		


		
	
	

       mysqli_query($conn, "INSERT INTO `table1` VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1','$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1')") or die(mysqli_error());




     

		
		
		header('location: entry_form1.php');
	}
?>