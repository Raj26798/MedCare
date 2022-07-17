<?php
include_once('config.php');
session_start();

if (isset($_SESSION['PHONE'])) {
    $phone = $_SESSION['PHONE'];
$id=$_GET["id"];

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MEDCARE</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<link rel="stylesheet" href="css/dreport.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>

</head>
<body style="">
    <section class="container-fluid register-form">
        
        <div class="row">
        
            <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 mx-auto mt-3">
            
                <div class="page-wrap">
                    <h1 class="text-center py-3">Day Today Report</h1>
                    <p>Save your information! Protect your life!</p>
  
  <form class="p-2" id="submitForm">
    <input type="text" name="id" value="<?php echo $id; ?>" class="d-none" />
  <div class="styled-input">

<select name="type" id="type" class="form-control" required>
  <option>Select type</option>
  <option>Fever</option>
  <option>Sugar test</option>
  <option>Blood presser(BP)</option>
  <option>Pulse rate</option>
</select>
</div>

<div class="p-2 text-success" style="clear:both">
<h6>*Fever level 80 to 120</h6>
<h6>*Sugar level 50 to 550</h6>
<h6>*BP 30/25 to 220/140</h6>
<h6>*Pulse 60 to 120</h6>
</div>
      <div class="styled-input">
      <input type="text" name="value" required />
      <label>Enter the Measure value</label>
      <span></span>
    </div>
    <div class="styled-input pt-2 mt-2 mb-5">
          <!-- <h6 class="px-1">DOB</h6> -->
      <input type="date" name="date" id="date" class="pt-0 mt-0" required />
      <label style="background:#fff;width:100%">Select Date</label>
      <span></span>
    </div>
    <div>
      <button type="submit" id="loginSubmit" name="submit" style="border-radius: 5px !important;">Submit</button>
      </div>
  </form>
</div>
            <div class="p-2 m-0 text-center" id="login_p">
                <span class="">GOTO<a class="mx-2" href="index1.php">Home</a></span>
                </div>
            </div>
        
        </div>
        
        
        </section>
<!-- <script>
     alert("asdfa");
    </script> -->

       <script type="text/javascript">
        
    $("#submitForm").on("submit", function(e){
      e.preventDefault();
      var date3=$("#date").val();
    var type=$("#type").val();
      var formData = $(this).serialize();


      var d=new Date();
var dt=d.getFullYear();
var md=new Date(date3);
var mdt=md.getFullYear();

var mon=d.getMonth();
var mon1=md.getMonth();

var date=d.getDate();
var date1=md.getDate();

      if(type === "Select type")
	{
		alert("Select report type");
	}
	else
	{
    if((mdt > 1950 && mdt <= dt) && (mon >= mon1) && (date >= date1))
    {


      $.ajax({
        url  : "dreport_store.php",
        type : "POST",
        cache:false,
        data : formData,
        success:function(response){
          if (response == "yes") {
            alert("Report stored successfully!");
            window.location.href='index1.php';
          }
          else if (response == "no") {
            alert("Enter valid data!");
          }     
          else{
            alert(response);
          }   
        }
      });


    }
    else{
      alert()
    }
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