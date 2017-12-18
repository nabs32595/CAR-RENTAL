<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM cars WHERE car_id = '$id'";
		$result = mysqli_query($db, $query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Delete\");
					window.location = (\"add_vehicles.php\")
				</script>";
	}
?>
