<?php

	// Database configuration 	
	$hostname = "localhost"; 
	$username = "id17417558_root"; 
	$password = "Rajesh@2020@"; 
	$dbname   = "id17417558_medcare";
	 
	// Create database connection 
	$con = new mysqli($hostname, $username, $password, $dbname); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}

?>