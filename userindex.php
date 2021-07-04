
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.css" rel="stylesheet" />
<link href="parkqueen.css" rel="stylesheet">
<link href="fontawesome/css/all.css" rel="stylesheet" />
<head>
	<nav class="navbar navbar-expand-sm bg-info ">
	<li class="nav-link text-white"><i class="fas fa-car-garage"></i> PARKQUEEN</li>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link text-white" href="userindex.php">Reservation</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="slot.php">Slot Available</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="booking.php">View Booking</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="userlogin.php">Log-out</a></li>
		</ul>
	</div>

</nav>
</head>
<body class="reservationbody">
	<form action="request.php" enctype="multipart/form-data" method="post" class="card"
		style="margin-left:15%; margin-right:40%; margin-top: 5%; margin-bottom: 10%;">
		<input type="hidden" name="action" value="add">
		<div class="card-header ">
			<i class="fas fa-edit"></i>SLOT RESERVATION REQUEST
		</div>
		<br>
		
		<div class="form-row">
			<div class="form-group col-md-7" style="margin-left: 1.6%;">
				<label>Full Name:</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="fullname" class="form-control"
						 placeholder="Enter Name">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7" style="margin-left: 1.6%;">
				<label>Reservation Date:</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="date" name="udate" class="form-control">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-address-card"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-group col-md-6" style="margin-left: 1.6%;">
				<label>Time of Arrival:</label>
				<input type="Time" name="toa">
		</div>

		<div class="form-group col-md-6" style="margin-left: 1.6%;">
				<label>Select Hours:</label>
				<select name="hour">
					<option>Select</option>
					<option value="30 minutes">30 Minutes</option>
					<option value="1 hour">1 Hour</option>
					<option value="2 hours">2 Hours</option>
					<option value="3 hours">3 Hours</option>
					<option value="4 hours">4 Hours</option>
					<option value="5 hours">5 Hours</option>
					<option value="6 hours">6 Hours</option>
					<option value="7 hours">7 Hours</option>
					<option value="8 hours">8 Hours</option>
					<option value="9 hours">9 Hours</option>
				</select>
		</div>
		
		
		<div>
			<button type="submit" class="margin_left btn btn-info m-2">
				<i class="fas fa-save"></i> Request
			</button>
		</div>
</form>
</body>		