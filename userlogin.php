<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.css" rel="stylesheet" />
<link href="parkqueen.css" rel="stylesheet">
<link href="fontawesome/css/all.css" rel="stylesheet" />
<head>
<nav class="navbar navbar-expand-sm bg-info ">
	<div class="nav-link text-white"><i class="fas fa-car-garage"></i> PARKQUEEN</div>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link text-white" href="userlogin.php">User</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="admin.php">Admin</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="userregister.php">Register</a></li>
		</ul>
	</div>
	<ul class="navbar-nav">
			<div class="nav-item">
			<form class="nav-link text-white" action="login.php" method="post">
			   <div class="input-group">
				<input type="text" name="user" class="form-control" placeholder="Username">
				<br>
				<input type="password" name="pass" class="form-control" placeholder="Password" style="display: inline-block;">
			    <button class="btn btn-primary" name="submit" >Log-In</button>
			   </div>
			</form>
		   </div>
			
	</ul>
</nav>
</head>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<body class="frontpage">
	<br>
	<br>
<header>
			<h1 style="font-size: 250%;"> ABOUT</h1>
</header>
	
	<section>
		<p >The PARKQUEEN PARKING Availability and Reservation System 
	is a system that enables customers/drivers to reserve a parking
	 space to a specific place. It also allows customers/drivers to view the parking status. It was developed because of the congestion and collision of vehicles. The system aimed at solving such problems by designing a web based system that will enable the customers/drivers to make a reservation of available parking space.</p> </section>
</body>


	