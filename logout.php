<?php
	session_start();
	session_destroy();
	unset($_SESSION['PHONE']);
	// unset($_SESSION['NAME']);
	header("Location:login.php");
?>