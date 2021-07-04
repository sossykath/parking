<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.css" rel="stylesheet" />
<link href="parkqueen.css" rel="stylesheet">
<link href="fontawesome/css/all.css" rel="stylesheet" />
<head>
<nav class="navbar navbar-expand-sm bg-info">
	<div class="nav-link text-white"><i class="fas fa-car-garage"></i> PARKQUEEN</div>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link text-white" href="userlogin.php">Home</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="admin.php">Admin</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="userregister.php">Register</a></li>
		</ul>
		
			
		
	</div>
</nav>
</head>
<body class="registerbody">
	<form action="register.php" method="post" class="card" enctype="multipart/form-data" style="margin-left:4%; margin-top: 4%; margin-bottom: 10%; margin-right: 61%;">


		<input type="hidden" name="action" value="add">
		<div class="card-header ">
			<i class="fas fa-edit"></i>REGISTRATION
		</div>
		<br>
		<div class="form-row">
			<div class="form-group col-md-10" style="margin-left: 1.6%;">
				<label>E-Mail</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="email" name="em" class="form-control"
						 placeholder="Input E-mail">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-10 " style="margin-left: 1.6%;">
				<label>Full Name</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="full" class="form-control"
						 placeholder="Full Name">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-8" style="margin-left: 1.6%;">
				<label>Contact No.</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="con" class="form-control"
						 placeholder="Contact Number">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-address-card"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-8 " style="margin-left: 1.6%;">
				<label>Username</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="user" class="form-control"
						 placeholder="Input Username">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-8" style="margin-left: 1.6%;">
				<label>Password</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="password" name="pass" class="form-control"
						 placeholder="Input Password">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-key"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-8" style="margin-left: 1.6%;">
				<label>Plate Number</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="plt" class="form-control"
					 placeholder="Plate Number">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-address-card"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-8" style="margin-left: 1.6%;">
				<label>Car Type</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="cty" class="form-control"
						 placeholder="Car Type">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-car"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<div class="card-footer" >
			<button type="submit" name="submit" class="margin_left btn btn-info">
				<i class="fas fa-save"></i> Save
			</button>
			<button type="reset" class="margin_left btn btn-danger">
				<i class="fas fa-undo"></i> Reset
			</button>
		</div>
	</form>
</body>
</html>