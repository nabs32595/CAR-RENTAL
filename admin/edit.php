<?php
	include '../includes/config.php';

	$newcost = $_REQUEST['newprice'];
	
	$id = $_REQUEST['id'];

		$query = "UPDATE CARS SET hire_cost = '$newcost' WHERE car_id = '$id' ";

		$result = mysqli_query($db, $query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
			alert(\"Car Successfully Edit\");
			window.location = (\"add_vehicles.php\")
			</script>";
	}

	//						
?>



