<?php
	session_start();
	session_destroy();
header("location: ../car_rental_2/index.php");
?>