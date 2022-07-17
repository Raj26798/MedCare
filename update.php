<?php



  include_once('config.php');
  $a_a = "";
  $imgContent="";
  $query="";

  if (isset($_POST['name'])) {
    
    $id=$con->real_escape_string($_POST['id']);
    $name=$con->real_escape_string($_POST['name']);
    $dob=$con->real_escape_string($_POST['dob']);
  //  $relation=$con->real_escape_string($_POST['relation']);
  $height=$con->real_escape_string($_POST['height']);;
  $weight=$con->real_escape_string($_POST['weight']);
  $blood=$con->real_escape_string($_POST['blood']);
  $address=$con->real_escape_string($_POST['address']);
  $alter=$con->real_escape_string($_POST['alter_no']);
  $problems=$con->real_escape_string($_POST['problems']);
  $gender=$con->real_escape_string($_POST['gender']);
  $family_id="";

    $img=$_FILES["images"]["name"];

// if($img == "")
// {    
//     // $imgContent=""
// }



  



    function ageCalculator($dob){
      if(!empty($dob)){
          $birthdate = new DateTime($dob);
          $today   = new DateTime('today');
          $age = $birthdate->diff($today)->y;
          return $age;
      }else{
          return 0;
      }
  }
  $age=ageCalculator($dob);
  



if($img === "")
{
    if($blood === "Select Blood group")
    {
    $query = "UPDATE family SET name='$name', dob='$dob', age='$age', height='$height', weight='$weight', blood='', address='$address', alter_no='$alter', problems='$problems', gender='$gender' WHERE id='$id'";
    }
    else{
        $query = "UPDATE family SET name='$name', dob='$dob', age='$age', height='$height', weight='$weight', blood='$blood', address='$address', alter_no='$alter', problems='$problems', gender='$gender' WHERE id='$id'";
  
    }
}
else{

    $fileName = basename($_FILES["images"]["name"]); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$allowTypes = array('jpg','png','jpeg','gif'); 
$image =$_FILES["images"]["tmp_name"];
$imgContent = addslashes(file_get_contents($image)); 
if($blood === "Select Blood group")
{
    $query = "UPDATE family SET name='$name', dob='$dob', age='$age', image= '$imgContent', height='$height', weight='$weight', blood='', address='$address', alter_no='$alter', problems='$problems', gender='$gender' WHERE id='$id'";
}
else{
    $query = "UPDATE family SET name='$name', dob='$dob', age='$age', image= '$imgContent', height='$height', weight='$weight', blood='$blood', address='$address', alter_no='$alter', problems='$problems', gender='$gender' WHERE id='$id'";
}
}






//  $query = "UPDATE family SET name='$name', dob='$dob', age='$age', image= '$imgContent', height='$height', weight='$weight', blood='$blood', address='$address', alter_no='$alter', problems='$problems', gender='$gender' WHERE id='$id'";
 

 
 $result = $con->query($query);

 if ($result) {
     echo "yes";
 }else{
     echo "no";
 }   

  }
  
?>