<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nabila Car Rental</title>
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

		<div class="wrapper">
		<div id="fom">
			<form method="post" action="adminlogin.php">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Admin Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center"><input type="submit" name="login"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';

					$uname = $_POST['uname'];
					$pass = $_POST['pass'];

					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass' ";

					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);

					if($row > 0){
						session_start();
						$_SESSION['uname'] = $row['uname'];
						$_SESSION['pass'] = $row['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"admin/add_vehicles.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"adminlogin.php\")
									</script>";
					}
				}
			?>
		</div>
		
	
</body>
</html>