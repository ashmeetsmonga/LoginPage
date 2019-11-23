<?php 

if(isset($_POST['login-submit'])){
	require "dbh.inc.php";

	$username = $_POST["username"];
	$password = $_POST["password"];

	if(empty($username) || empty($password)) {
		header("Location: ../index.php?error=emptyfields");
		exit();
	}

	else {
		$sql = "select * from users where user = ? and pwd = ?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $username, $password);
		$stmt -> execute();
		$result = $stmt->get_result();
		if($result->num_rows > 0) {
			header("Location: ../loginsuccess.php");
		exit();
		} 

		else {
			header("Location: ../index.php?error=nouser");
		exit();
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}



 ?>