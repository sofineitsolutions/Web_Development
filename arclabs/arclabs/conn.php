<?php
	$conn=mysqli_connect("localhost", "root", "", "mysql");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>