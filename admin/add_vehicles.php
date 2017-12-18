<html>
<head>
	<title>Admin Details</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

	<script type="text/javascript">
		function sureToDelete(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}

		function sureToEdit(id){

			var newprice = prompt("Please enter New Price");
			if(confirm("Are you sure you want to Edit this car?")){
				window.location.href = "edit.php?id=" + id + "& newprice=" + newprice;
			}
		}
	</script>
	
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">		
		<?php
			include 'menu.php';
		?>
	</div>
</div>


<div id="container">
	<div class="shell">

		<div id="main">
		
			<div id="content">
				
				<div class="box">
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Vehicle Name</th>
								<th>Car Type</th>
								<th>Hire Price</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = mysqli_query($db, $select);
								while($row = mysqli_fetch_array($result)){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>

								<td>
								<a href="javascript:sureToDelete(<?php echo $row['car_id'];?>)" class="ico del">Delete</a>
								<a href="javascript:sureToEdit(<?php echo $row['car_id'];?>)" class="ico edit">Edit</a>
								</td>

							</tr>
							<?php
								}
							?>
						</table>						
												
					</div>
				
				</div>
				<!-- End Box -->
			</div>
			<!-- End Content -->
			<div class="cl">&nbsp;</div>	
		</div>
		<!-- Main -->
	</div>

</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Saidatul Rescue Team</span>
	</div>
</div>
<!-- End Footer -->

	
</body>
</html>