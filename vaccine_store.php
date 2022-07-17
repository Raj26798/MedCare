<?php 

include_once('config.php');
  
 // File upload configuration 
 $vname="";
 $id=$con->real_escape_string($_POST['id']);

 if (isset($_POST['vname'])) {
 $vname=$con->real_escape_string($_POST['vname']);
 }
 else{
    $vname="";
 }
 echo $vname;
//  if($vname == "")
//  {
//     $vname="";
//  }
//  else{
//     $vname=$con->real_escape_string($_POST['vname']);
//  }
 
//  

 $type=$con->real_escape_string($_POST['type']);
 $date=$con->real_escape_string($_POST['date']);
 $description=$con->real_escape_string($_POST['description']);
 
 $targetDir = "imagess/"; 
 $allowTypes = array('jpg','png','jpeg','gif'); 
 $images[]="";
 $images[0]="";
$images[1]="";
$images[2]="";    
 
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
         $insert = $con->query("INSERT INTO vreports (date1, user_id, vname, type, date, description, image1, image2, image3, index1) VALUES (NOW(), '$id', '$vname', '$type', '$date', '$description', '$images[0]', '$images[1]', '$images[2]', '$count')"); 
         if($insert){ 
            echo "yes"; 
         }else{ 
             echo "no"; 
         } 
  
 


?>