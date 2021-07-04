<?php include 'updates.php'; ?>
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
			
		</ul>
	</div>
</nav>
</head>
<body class="reservationbody">
	<form action="" method="post" class="card" enctype="multipart/form-data" onsubmit="location.reload()"
		style="margin-left:10%; margin-right:50%; margin-top: 5%; margin-bottom: 10%;">
		<input type="hidden" name="id" value="<%=st.getid() %>">
		<div class="card-header ">
			<i class="fas fa-edit"></i>SLOT ASSIGNMENT
		</div>
		<br>
		
		<div class="form-row">
			<div class="form-group col-md-8" style="margin-left: 1.6%;">
				<label>Full Name:</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="fname" class="form-control"
						 placeholder="Enter Name" value="<?php echo $row['fname']; ?>">
					<div class="input-group-prepend">
						
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8" style="margin-left: 1.6%;">
				<label>Select Date:</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="date" name="udate" class="form-control" value="<?php echo $row['udate']; ?>">
					<div class="input-group-prepend">
					</div>
				</div>
			</div>
		</div>

		<div class="form-group col-md-6" style="margin-left: 1.6%;">
				<label>Time of Arrival:</label>
				<input type="time" name="toa" value="<?php echo $row['toa']; ?>">
		</div>

		<div class="form-group col-md-6" style="margin-left: 1.6%;">
				<label>Select Hours:</label>
				<input type="text" name="hour" value="<?php echo $row['hour']; ?>"> 
		</div>
		
		<div class="form-row">
		<div class="form-group col-md-6" style="margin-left: 1.6%;">
				<label>Select Slot:</label>
				<select name="gslot" value="<?php echo $row['gslot']; ?>">
					<option>Assign Slot</option>
					<option value="A1">A1</option>
					<option value="A2">A2</option>
					<option value="A3">A3</option>
					<option value="A4">A4</option>
					<option value="A5">A5</option>
					<option value="A6">A6</option>
					<option value="A7">A7</option>
					<option value="A8">A8</option>
					<option value="A9">A9</option>
					<option value="A10">A10</option>
				</select>
		</div>
	</div>
		
		<div>
			<button type="submit" name="submit" class="margin_left btn btn-info m-2">
				<i class="fas fa-save"></i> Reserve
			</button>
		</div>
</form>
</body>		