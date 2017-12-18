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
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			
				<h3>Signup Here</h3>
				<form method="post" action="signup.php">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="password" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){

							include 'includes/config.php';
							$fname = $_POST['fname'];
							$password = $_POST['password'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,password,gender,email,phone,location,status)
							VALUES('$fname','$password','$gender','$email','$phone','$location','Available')";
							$result = mysqli_query($db, $qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		
		<div class="copyrights wrapper">
			Copyright &copy;  All Rights Reserved | Designed by Nabilah.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>