<?php 

include_once('config.php');
  
 // File upload configuration 
 $id=$con->real_escape_string($_POST['id']);
 $name="";
 $type=$con->real_escape_string($_POST['type']);
 $date=$con->real_escape_string($_POST['date']);
 $description=$con->real_escape_string($_POST['description']);
 
 $targetDir = "images/"; 
 $allowTypes = array('jpg','png','jpeg','gif'); 
 $images[]="";
$images[1]="";
$images[2]="";    
$images[3]="";  
$images[4]="";  
$images[5]="";  
$images[6]="";  
$images[7]="";  
$images[8]="";  
$images[9]="";  
$images[10]="";  
$images[11]="";  
$images[12]="";  
$images[13]="";  
$images[14]="";  
$images[15]="";  
$images[16]="";  
$images[17]="";  
$images[18]="";  
$images[19]="";  
$images[0]="";  
$count="";
 $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
 $fileNames = array_filter($_FILES['files']['name']); 

     foreach($_FILES['files']['name'] as $key=>$val){ 
         // File upload path 
         $fileName = basename($_FILES['files']['name'][$key]); 
         $targetFilePath = $targetDir . $fileName; 
          
         // Check whether file type is valid 
         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
         if(in_array($fileType, $allowTypes)){ 
             // Upload file to server 
             if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
               //        $insertValuesSQL .= "('".$fileName."', NOW(), '".$id."', '".$name."', '".$type."', '".$date."', '".$description."'),"; 
             }else{ 
                
             } 
         }else{ 
            
         } 
$images[$key]=$fileName;

        }
        $count=$key;

    
    
        //  $insertValuesSQL = trim($insertValuesSQL, ','); 
         // Insert image file name into database 
         $insert = $con->query("INSERT INTO reports (date1, user_id, name, type, date, description, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, image11, image12, image13, image14, image15, image16, image17, image18, image19, image20, index1) VALUES (NOW(), '$id', '$name', '$type', '$date', '$description', '$images[0]', '$images[1]', '$images[2]', '$images[3]', '$images[4]', '$images[5]', '$images[6]', '$images[7]', '$images[8]', '$images[9]', '$images[10]', '$images[11]', '$images[12]', '$images[13]', '$images[14]', '$images[15]', '$images[16]', '$images[17]', '$images[18]', '$images[19]', '$count')"); 
         if($insert){ 
            echo "yes"; 
         }else{ 
             echo "no"; 
         } 
  
 


?>