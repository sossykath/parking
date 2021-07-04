<?php 
	include_once 'db.php';

		$fullname = $_POST['fullname'];
		$date= $_POST['udate'];
		$toa = $_POST['toa'];
		$hour = $_POST['hour'];

		$sql = "INSERT INTO request(fname, udate, toa, hour) VALUES ('$fullname', '$date', '$toa', '$hour');";
		mysqli_query($conn, $sql);

		header("Location: booking.php?request=success");

