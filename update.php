<?php include 'supdate.php'; ?>
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
	<form action="" enctype="multipart/form-data" method="post" class="card" onsubmit="location.reload()"
		style="margin-left:10%; margin-right:50%; margin-top: 5%; margin-bottom: 10%;">
		<input type="hidden" name="id" value="<%=st.getid() %>">
		<div class="card-header ">
			<i class="fas fa-edit"></i>AVAILABLE
		</div>
		<br>
		
		<div class="form-row">
			<div class="form-group col-md-5" style="margin-left: 1.6%;">
				<label>Slot</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="slot" class="form-control"
						 placeholder="" value="<?php echo $row['slot']; ?>">
					<div class="input-group-prepend">
						
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-5" style="margin-left: 1.6%;">
				<label>Status(Reserved/Available/Occupied)</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="status" class="form-control"
						 placeholder="" value="<?php echo $row['status']; ?>">
					<div class="input-group-prepend">
					</div>
				</div>
			</div>
		</div>

		<div class="form-group col-md-6" style="margin-left: 1.6%;">
				<label>Time(Start-End):</label>
				<input type="text" name="time" value="<?php echo $row['time']; ?>">
		</div>
		
		<div>
			<button type="submit" name="submit" class="margin_left btn btn-info m-2">
				<i class="fas fa-save"></i> Reserve
			</button>
		</div>
</form>
</body>		