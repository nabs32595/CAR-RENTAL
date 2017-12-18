<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Nabilah Car Company</h1>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="account.php">Client Login</a></li>
							<li><a href="adminlogin.php">Admin Login</a></li>
						</ul>
					<?php
						} else{
					?>
							<ul>
								<li><?php echo $_SESSION['email']; ?></li>
								<li><?php echo $_SESSION['clientid']; ?></li>
								<li><a href="index.php">Home</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
					<?php
						}
					?>
				</nav>
			</div>
</header>