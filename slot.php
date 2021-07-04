<?php
	 include('db.php');
	 
		 if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from avail where id = ".$id;
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from sched where id=".$id;
		if(mysqli_query($conn, $sql)){
		header('location:slot.php');
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

<hr>
	<table class="table table-striped" style="width:60%; margin-left:auto; margin-right:auto; background-color:white; text-align:center;" border="1">
	<thead class="thead-dark">
			<tr>
				<th>Slot</th>
				<th>Status</th>
				<th>Time</th>
			</tr>
		</thead>
		
			<tbody>
				<?php
							 $sql = "select * from avail";
							 $result = mysqli_query($conn, $sql);
							 if(mysqli_num_rows($result)){
							 while($row = mysqli_fetch_assoc($result)){
							 ?>
				<tr>
					<td><?php echo $row['slot'] ?></td>
					<td><?php echo $row['status'] ?></td>
					<td><?php echo $row['time'] ?></td>
				</tr>
				<?php
							 }
							 }
							 ?>
			</tbody>
	
	</table>


</body>
</html>