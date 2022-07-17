<?php
include_once('config.php');
session_start();

if (isset($_SESSION['PHONE'])) {
    $phone = $_SESSION['PHONE'];


    ?>

<!Doctype html>
<html>
<head>
<title>MEDCARE</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <link rel="stylesheet" href="css/add.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>
    <style>
  
    </style>
    </head>
    <body>
    <section class="container-fluid register-form">
        
        <div class="row">
        
            <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 mx-auto pt-4">
            
                <div class="page-wrap">
                    <h1 class="text-center pb-4">Add Person</h1>
                    <p>Save your information! Protect your life!</p>
  
                    <form class="p-2" id="submitForm">
                        <input type="text" class="d-none" name="phone" value="<?php echo $phone; ?>" />
    <div class="styled-input">
      <input type="text" name="name" required />
      <label>Name</label>
      <span></span>
    </div>
      


    <div class="styled-input pt-2 mt-3 mb-3">
          <!-- <h6 class="px-1">DOB</h6> -->
      <input type="date" name="dob" id="dob" class="pt-0 mt-0" required />
      <label style="background:#fff;width:100%">Date of birth</label>
      <span></span>
    </div>
      
             <div class="styled-input ">
           <select class="form-control" name="relation" required id="relation">
           <option>Select Relationship</option>
            <option>Father</option>
               <option>Mother</option>
               <option>Elder Brother</option>
               <option>Younger Brother</option>
               <option>Elder Sister</option>
               <option>Younger Sister</option>
               <option>grandfather</option>
               <option>grandmother</option>
                <option>grandson</option>
                <option>granddaughter</option>
                <option>uncle</option>
                <option>aunt</option>
                <option>nephew</option>
               <option>niece</option>
                <option>cousin</option>
                <option>son</option>
                <option>Daughter</option>
               <option>sister-in-law</option>
               <option>brother-in-law</option>
               <option>Friend</option>
           </select>
    </div>
      
    <div class="">
      <button type="submit" name="submit" style="border-radius:5px !important;" class="my-3">Add</button>
      </div>
  </form>
</div>
            <div class="p-2 m-0 text-center" id="login_p">
                <span class="">Goto <a href="index1.php">Home</a></span>
                </div>
            </div>
        
        </div>
        
        
        </section>


        <script type="text/javascript">
        
        $("#submitForm").on("submit", function(e){
          e.preventDefault();
          var relation=$("#relation").val();
          var formData = $(this).serialize();
          var dob=$("#dob").val();
var d=new Date();
var dt=d.getFullYear();
var md=new Date(dob);
var mdt=md.getFullYear();
// result="no";
if(mdt > 1950 && mdt <= dt)
{
    if(relation === "Select Relationship")
{
alert("Select Relationship name");
}
else{

          $.ajax({
            url  : "add_store.php",
            type : "POST",
            cache:false,
            data : formData,
            success:function(result){
              if (result == "yes") {
                  alert("One person added your family");
                window.location.href='add_person.php';
              }
              if (result == "no") {
                alert("Enter valid data!");
              }        
            }
          });
}
}
else{
    alert("Enter valid DOB");
}


        });
    </script>

    </body>
</html>


<?php

}else{
	header("Location:login.php");
	die();
}

?>