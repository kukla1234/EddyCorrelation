<?php
	if ( isset($_POST["user"]) && isset($_POST["password"]) && $_POST["password"] === "BergEddy" ) {
		setcookie("user", $_POST["user"]);
		setcookie("password", $_POST["password"]);
		header("Location: http://faculty.virginia.edu/berg/");
	}
	else 
		header("Location: http://faculty.virginia.edu/berg/landing.php");
	
?>