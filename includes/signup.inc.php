<?php 
if (isset($_POST['submit-signup'])) {
	require "dbh.inc.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$passwordrepeat = $_POST['password-repeat'];

	if(empty($username) || empty($password) || empty($passwordrepeat)) {
		header("Location: ../signup.php?error=emptyfields");
		exit();
	}

	else if($password !== $passwordrepeat) {
		header("Location: ../signup.php?error=reenterpasswords");
		exit();
	}

	else {
		
		 {
			$sql = "INSERT INTO users (user, pwd) values (?, ?);";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ss", $username, $password);
			$stmt->execute();
			header("Location: ../index.php?success=success");
			exit();
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}