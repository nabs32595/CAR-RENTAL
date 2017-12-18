<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "cars";
	
	$db = new mysqli($host, $user, $pass, $db);
	if($db->connect_error){
		echo "Failed:" . $db->connect_error;
	}
?>