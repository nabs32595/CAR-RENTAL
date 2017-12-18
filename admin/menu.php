<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
	<h1><a href="#">Saidatul rescue Team</a></h1>
	<div id="top-navigation">
		<a href="logout.php">Log out</a>
	</div>
</div>

<div id="navigation">
	<ul>
	    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
	</ul>
</div>