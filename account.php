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


	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post" action="account.php">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Client Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login Here"></td>
						<td style="text-align:right;"><a href="signup.php">Sign Up Here</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM client WHERE email = '$uname' AND password = '$pass'";

					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					if($row > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['password'];
						$_SESSION['clientid'] = $row['client_id'];
						echo "Succesfull";
						header("location: ../car_rental_2/index.php");
					} else{
						echo "Unsuccesfull";
					}
				}
			?>
			</div>

		</div>

	</section><!--  end search section  -->

	<footer>
		<div class="copyrights wrapper">
			Copyright &copy; All Rights Reserved | Designed by Nabilah.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>