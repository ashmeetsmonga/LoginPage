<?php 
	require "header.php";

 ?>


 	<main>
 		
 		<div class="signup-form">
 			<h1>SignUp</h1>

	 		<form action="includes/signup.inc.php" method="POST">
	 			<input class="box" type="text" name="username" placeholder="Username"><br>
	 			<input class="box" type="password" name="password" placeholder="Password"><br>
	 			<input class="box" type="password" name="password-repeat" placeholder="Repeat Password"><br>
	 			<input class="button" type="submit" name="submit-signup" value="SignUp">
	 		</form>
	 		<a href="index.php"><input class="button" style="padding: 5px 27px" type="submit" name="login-submit" value="Login"></a>
 		</div>


 	</main>


<?php 

	require "footer.php"; 

 ?>