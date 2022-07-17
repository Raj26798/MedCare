<?php
include_once('config.php');
session_start();

if (isset($_SESSION['PHONE'])) {
    $phone = $_SESSION['PHONE'];
    $name=$_GET["name"];
    $dob=$_GET["dob"];


    $sql = "SELECT * FROM family where phone = '$phone' and name = '$name' and dob = '$dob'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    ?>


<!Doctype html>
<html>
<head>
<title>MEDCARE</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/details.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>

<script src="file/bootstrap.min.js"></script>
</head>
<body>
<section class="container-fluid">

    <div class="row">
        <div class="col-lg-5 col-xl-5 col-md-8 col-12 col-sm-12 mx-auto my-2 update_sec">
          <h1 class="text-center py-4 head_title">Update details</h1>


          <form class="p-2" id="submitForm">
    <div class="styled-input">
      <input type="text" name="name" value="<?php echo $row["name"]; ?>" required />
      <label>Name</label>
      <span></span>
    </div>
      

<input type="text" value="<?php echo $row['id']; ?>" name="id" />
    <div class="styled-input pt-2 mt-3 mb-3">
          <!-- <h6 class="px-1">DOB</h6> -->

      <input type="date" name="dob" value='<?php echo $row["dob"]; ?>' id="dob" class="pt-0 mt-0" required />
      <label style="background:#fff;width:100%">Date of birth</label>
      <span></span>
    </div>
      <input type="text" class="d-none" id="ph" name="phone" value="<?php echo $row['phone']; ?>" />
    <div class="styled-input">
    <input type="text" id="phone" disabled value='<?php echo $row["phone"]; ?>' autocomplete="off" required >
    <!-- <label for="phone">Phone</label>
    <span></span> -->
  </div>
 

  <div class="styled-input">
  <div class="">  
  <div class="w-25 float-left">
  <img class="" style="height:50px;width:50px;border-radius:50%;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
  </div>
  <div class="w-75 float-right">  
  <input type="file" name="images" id="images" />
    <label for="image" class="w-75 float-right" style="background:#fff;clear:both;left:25%">Change profile image</label>
    <span></span>
  </div>
  </div>
  </div>
  
  <div class="styled-input">
    <input type="number" value='<?php echo $row["alter_no"]; ?>' id="alter_no" name="alter_no" required autocomplete="off" >
    <label for="alter_no" >Alternative mobile number</label>
    <span></span>
  </div>

  <div class="styled-input">
    <input type="number" name="height" value='<?php echo $row["height"]; ?>' id="height" autocomplete="off">
    <label for="height">Height</label>
    <span></span>
  </div> 
  <div class="styled-input">
    <input type="number" name="weight" value='<?php echo $row["weight"]; ?>' id="weight" autocomplete="off" >
    <label for="weight">Weight</label>
    <span></span>
  </div>

  <div class="styled-input">
  <textarea rows="4" id="address" name="address" autocomplete="off" ><?php echo $row["address"]; ?></textarea>
    <label for="address">Enter Your Address</label>
    <!-- <span></span> -->
  </div>
  <div class="styled-input ">
  <textarea rows="4" id="com" class="" name="problems" autocomplete="off" ><?php echo $row["problems"]; ?></textarea>
    <label for="com">Enter Your Problems</label>
    <!-- <span class="pb-1"></span> -->
  </div>
<input type="text" id="gendert" class="d-none" value="<?php echo $row['gender']; ?>" />
  <div class="w-100 py-1 px-2 d-block styled-input">
  <div class="row">
  <div class="col-4" style="display:flex !important;">
<input type="radio" name="gender" id="male" class="d-inline" value="male" /><p class="d-inline" style="margin: -6px;">Male</p>
</div>
<div class="col-4" style="display:flex;">
<input type="radio" name="gender" id="female" class=" d-inline" value="female" /><p class="d-inline" style="margin: -6px">Female</p>
</div>
<!-- <div class="col-4">
<input type="radio" name="gender" class="gender d-inline w-25" value="other" /><label class="px-2">Other</label>
</div> -->
</div>
</div>
  
  <div class="styled-input ">
    <input type="text" disabled id="rl" name="relation" class="" value='<?php echo $row["relation"]; ?>' />
           <!-- <select class="form-control" name="relation" required id="relation">
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
           </select> -->
    </div>
  <div class="">
    <!-- <input type="number" -->
    <input type="text" id="blood1" name="blood1" class="d-none" value='<?php echo $row["blood"]; ?>' />
    <select id="group" name="blood" autocomplete="off" class="w-100 form-control" required>
<option>Select Blood group</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select>
<!-- <label for="group">Blood group</label> -->
  </div>



    <div class="">
      <button type="submit" name="submit" style="border-radius:5px !important;" class="my-3">Add</button>
      </div>
  </form>
  <div class="p-2 m-0 text-center" id="login_p">
                <span class="">Goto <a href="index1.php">Home</a></span>
                </div>





</div>
</div>
</section>
<script>

  var rl=document.getElementById("rl").value;
  if(rl=="")
  {
    document.getElementById("relation").value = "Select Relationship";
  }
else{
  document.getElementById("relation").value = rl;
}

var rl1=document.getElementById("blood").value;
  if(rl1=="")
  {
    document.getElementById("group").value = "Select Blood group";
  }
else{
  document.getElementById("group").value = rl1;
}

// 

// fgt=document.getElementById("female");
// mgt.checked;
// if(gt === "male")
// {
// mgt.checked = true;

// }
  </script>
<script>
  gt=document.getElementById("gendert").value;
  if(gt === "male")
  {
document.getElementById("male").checked = true;
document.getElementById("female").checked = false;
  }
  else if(gt === "female"){
    document.getElementById("male").checked = false;
document.getElementById("female").checked = true;
  }
  else{

  }
  </script>


<script>
var b=document.getElementById("blood1").value;

if(b === "")
{
  document.getElementById("group").selectedIndex = 0;
}
else if(b === "A+")
{
  document.getElementById("group").selectedIndex = 1;
}
else if(b === "A-")
{
  document.getElementById("group").selectedIndex = 2;
}
else if(b === "B+")
{
  document.getElementById("group").selectedIndex = 3;
}
else if(b === "B-")
{
  document.getElementById("group").selectedIndex = 4;
}
else if(b === "AB+")
{
  document.getElementById("group").selectedIndex = 5;
}
else if(b === "O+")
{
  document.getElementById("group").selectedIndex = 6;
}
else if(b === "O-")
{
  document.getElementById("group").selectedIndex = 7;
}
else{
  document.getElementById("group").selectedIndex = 0;
}
// document.getElementById("group").selectedIndex = 1;

  </script>

<script type="text/javascript">
        // imageSelecter = document.getElementById("images");
        $("#submitForm").on("submit", function(e){
          e.preventDefault();
    //       imageSelecter=$("#images");
		// file = imageSelecter.files;
          var gr=$("#male").val();
          var relation=$("rl").val();
          var value = $("[name=gender]:checked").val();
          // alert(value);
          var blood=$("#blood").val();
          // var formData = $(this).serialize();
          // formData.append("images", file);
          // alert(formData);
          var dob=$("#dob").val();
          var mobile1=$("#alter_no").val();

          var phone=$('#ph').val();
          var alter=$('#alter_no').val();
val1=$.trim(value);

var d=new Date();
var dt=d.getFullYear();
var md=new Date(dob);
var mdt=md.getFullYear();
var l=mobile1.length;
var formData = new FormData(this);
// alert(formData);

if(mdt > 1950 && mdt <= dt)
{
	if(mobile1 <= 6000000000 || mobile1 >= 9999999999 || l != 10)
	{	
		alert("Enter valid mobile number");
	}
else{
    if(phone == alter)
{
alert("Alter no don't same phone no");
}
else{

if($.trim(value) === "")
{
  alert("Select Gender");
 }
 else{
// alert("entry");
          $.ajax({
            url  : "update.php",
            type : "POST",
            cache:false,
            data : new FormData(this),
            success:function(result){
              if (result == "yes") {
                  alert("Updated your data!");
                window.location.href='index1.php';
              }
              else if (result == "no") {
                alert("Enter valid data!");
              }        
              else{
                alert("Data can't update. Try again");
              }
            },
            contentType: false,
            processData:false,
          });

 }

}
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
}
} else {
    echo "0 results";
}

}else{
	header("Location:login.php");
	die();
}

?>