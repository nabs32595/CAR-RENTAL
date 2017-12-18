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

		<?php
			include 'header.php';
		?>

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$query = "SELECT * FROM cars WHERE status = 'Available'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);				
						while($rws = mysqli_fetch_array($result)){
			?>
				<li>
					<a href="book_car.php? id= <?php echo $rws['car_id'] ?>">

						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">

					</a>

					<span class="price"><?php echo 'RM'.$rws['hire_cost'].' Perday';?></span>
					
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Company Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>

					</div>
				</li>
			<?php
				}
			?>
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