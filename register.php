<?php
	if(isset($_POST['submit'])) {

		require 'db.php';


		$mail = $_POST['em'];
		$fullname= $_POST['full'];
		$cont = $_POST['con'];
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$plate = $_POST['plt'];
		$car = $_POST['cty'];



		if(empty($mail) || empty($fullname) || empty($cont) || empty($username) || empty($password) || empty($plate) || empty($car)){
			header("Location: userregister.php?error=emptyfields&user=".$username,"&em=".$mail);
			exit();

		}
		else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
			header("Location: userregister.php?error=invalidemuser");
			exit();
		}

		else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
			header("Location: userregis	ter.php?error=invalidem&user=".$username);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
			header("Location: userregister.php?error=invaliduser$em=".$mail);
		}
		else {

			$sql = "SELECT id FROM user WHERE id=?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: userregister.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0){
					header("Location: userregister.php?error=usertaken&em=".$mail);
					exit();
				}
				else{

					$sql = "INSERT INTO user (email, fname, cno, uname, pword, pno, ctype) VALUES (?, ?, ?, ?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						header("Location: userregister.php?error=sqlerror");
						exit();
				}
				else{
					$hashedpword = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sssssss", $mail, $fullname, $cont, $username, $hashedpword, $plate, $car);
					mysqli_stmt_execute($stmt);
					header("Location: userlogin.php?register=success");
					exit();
				}
			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else{
		header("Location: userregister.php");
		exit();
	}
 