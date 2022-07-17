<?php

  // Start session   
  session_start();

  // Include database connection file

  include_once('config.php');

  // Send OTP to email Form post
  if (isset($_POST['phone'])) {
     	
   	$dob    = $con->real_escape_string($_POST['dob']);
   	$mobile = $con->real_escape_string($_POST['phone']);
 	$query  = "SELECT * FROM users WHERE dob = '$dob' AND phone = '$mobile'";
   	$result = $con->query($query);
    $row    = $result->fetch_array();
    
   	if ($result->num_rows > 0) {
       	// $con->query("UPDATE users SET otp = '' WHERE mobile_number = '$mobile'");
        $_SESSION['PHONE'] = $row['phone'];
       	echo "yes";         
   	}else{
       	echo "no";
   	} 
                 
  }

?>