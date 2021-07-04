<?php 

if (isset($_POST['submit'])){

	require 'db.php';

	$username = $_POST['user'];
	$password = $_POST['pass'];

	if (empty($username) || empty($password)){
		header("Location: userlogin.php?error=emptyfields");
		exit();
	}
	else{
		$sql ="SELECT * FROM user WHERE uname=? OR email=?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: userlogin.php?error=sqlerror");
			exit();	
		}
		else{

			mysqli_stmt_bind_param($stmt, "ss", $username, $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['pword']);
				if ($pwdCheck == false){
					header("Location: userlogin.php?error=wrongpassword");
					exit();
				}
				else if ($pwdCheck == true){
					session_start();
					$_SESSION['userId'] = $row['id'];
					$_SESSION['userUid'] = $row['uname'];

					header("Location: userindex.php?login=success");
					exit();
				}
				else{
					header("Location: userlogin.php?error=wrongpassword");
					exit();
				}
			}
			else {
				header("Location: userlogin.php?error=nouser");
				exit();
			}



		}

	}




}
else {
	header("Location: userlogin.php");
	exit();
}