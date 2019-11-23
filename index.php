<?php 
	require "header.php";

 ?>


 	<header>
		<div class="signup-form">
 			<h1>Login</h1>

	 		<form action="includes/login.inc.php" method="POST">
	 			<input class="box" type="text" name="username" placeholder="Username"><br>
	 			<input class="box" type="password" name="password" placeholder="Password"><br>
	 			<input class="button" style="padding: 5px 27px" type="submit" name="login-submit" value="Login">

	 		</form>
	 		<a href="signup.php"><button class="button">SignUp</button></a>
 		</div>

	</header>


<?php 

	require "footer.php"; 

 ?>