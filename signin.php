<?php

session_start();
if(isset($_POST['signin_x'])||($_POST['signin_y'])){

	if (isset($_SESSION["user"]) && $_SESSION["Registration_No"]==uoc) {
		header("location: admin.html");
		
	}

	else if (isset($_SESSION["user"]) ) {
		header("location:login.php");
		
	}

	else {
		header("location: login.php");
	}
}