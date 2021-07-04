<?php
	 include('db.php'); 
		 if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from request where id = ".$id;
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from request where id=".$id;
		if(mysqli_query($conn, $sql)){
		header('location:booking.php');
		}
	}
}
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
			<li class="nav-item"><a class="nav-link text-white" href="userindex.php">Reservation</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="slot.php">Slot Available</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="booking.php">View Booking</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="userlogin.php">Log-out</a></li>
		</ul>
	</div>
</nav>
</head>
<body background="bg4.png">
<br><br>
<div>

<h4 style="text-align: center;"><b>Reservation</b></h4>
<hr>
	<table class="table" style="background-color:white; margin-left: 1%; margin-right: 10%; margin:auto; text-align: center;">
	<thead class="thead-dark">
			<tr>
				
				<th>Full Name</th>
				<th>Date</th>
				<th>Time of Arrival</th>
				<th>Hours of Stay</th>
				<th>Given Slot</th>
				<th><i class="fas fa-trash-alt"></i></th>
				
				
			</tr>
		</thead>
		
			<tbody>
				<?php
							 $sql = "select * from request";
							 $result = mysqli_query($conn, $sql);
							 if(mysqli_num_rows($result)){
							 while($row = mysqli_fetch_assoc($result)){
							 ?>
				<tr>
					<td><?php echo $row['fname'] ?></td>
					<td><?php echo $row['udate'] ?></td>
					<td><?php echo $row['toa'] ?></td>
					<td><?php echo $row['hour'] ?></td>
					<td><?php echo $row['gslot'] ?></td>
					<td><a href="booking.php?delete=<?php echo $row['id'] ?>" onclick="return"
						confirm('Are you sure you want to DELETE this record?')";>
							Delete</a></td>
					
				</tr>
				<?php
							 }
							 }
							 ?>	
			</tbody>
		
	</table>
</div>
</body>
</html>