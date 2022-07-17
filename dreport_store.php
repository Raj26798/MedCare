<?php 

include_once('config.php');
  
 // File upload configuration 
 $id=$con->real_escape_string($_POST['id']);
 $type=$con->real_escape_string($_POST['type']);
 $date=$con->real_escape_string($_POST['date']);
 $value=$con->real_escape_string($_POST['value']);
  
    
        //  $insertValuesSQL = trim($insertValuesSQL, ','); 
         // Insert image file name into database 
         $insert = $con->query("INSERT INTO dreports (date1, user_id, type, date, value1) VALUES (NOW(), '$id', '$type', '$date', '$value')"); 
         if($insert){ 
            echo "yes"; 
         }else{ 
             echo "no"; 
         } 
  
 


?>