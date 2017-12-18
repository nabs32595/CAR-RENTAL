<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nabilah Car Rental</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>
	</section>
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">

			<?php			
				if(isset($_POST['save'])){
					include 'includes/config.php';
					$pickup = $_POST['pickup_location'];
					$dropoff = $_POST['dropoff_location'];
					$clientid = $_SESSION['clientid'];
					$carid = $_post["id"];

					$qry = "INSERT INTO hire (pickuptime,dropofftime,client_id,car_id)
					VALUES('$pickup','$dropoff','$clientid', '$carid')";

					$result = mysqli_query($db, $qry);
					if($result == TRUE){
						echo "Okay ! Thank you for booking with us. We will notify you with email once we have approved.";
					} else{
						echo "not ok";
					}
				}						

				include 'includes/config.php';
				$query = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
				mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
				$rws = mysqli_fetch_array($result);
			?>

				<li>
				<?php
				if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					header("location: ../car_rental_2/account.php");
				}		
				?>

					<form method="post" action="book_car.php">
						<img class="thumb" src="cars/<?php echo $rws['image']; ?>" width="300" height="200">

						<span class="price"><?php echo 'RM'.$rws['hire_cost'];?></span>


						<div class="property_details">

							<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Company Make>'.$rws['car_type'];?></a>
							</h1>

							<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
						</div>


						<h3>CAR details Here</h3>

						<table>
							<tr>
								<td>Pickup Location</td>
								<td><input type="datetime-local" name="pickup_location" required></td>
							</tr>
							<tr>
								<td>Drop off Location</td>
								<td><input type="datetime-local" name="dropoff_location" required></td>
							</tr>
							<input type="hidden" name="id" value="<?php $_GET[id] ?>" >
							<tr>
								<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
							</tr>
						</table>
					</form>	

				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		
		<div class="copyrights wrapper">
			Copyright &copy; All Rights Reserved | Designed by Nabilah.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>