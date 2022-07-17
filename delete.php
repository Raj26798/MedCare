<?php
 
  session_start();
  include_once('config.php');

  	
   	$id = $_GET["id"];
 	$query  = "DELETE FROM family WHERE id = '$id'";
   	$result = $con->query($query);
     
   	if ($result) {
       	// echo "yes";
         
        //    echo "<script>window.close();</script>";
        // echo "<script>window.open('index1.php');</script>";   
        header("Location: index1.php");
        
   	}else{
       	// echo "no";
   	} 
                 


?>