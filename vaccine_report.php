<?php
include_once('config.php');
session_start();

if (isset($_SESSION['PHONE'])) {
    $phone = $_SESSION['PHONE'];

$id=$_GET["id"];
$name=$_GET["name"];
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
    <link rel="stylesheet" href="css/reports1.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>
    </head>
    <body>
    <section class="container-fluid register-form">
        
        <div class="row">
        
            <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 mx-auto">
            
                <div class="page-wrap">
                    <h1 class="text-center">Vaccine Reports</h1>
                    <p>Save your information! Protect your life!</p>
  
                    <form class="p-2" id="submitForm">
                    <input type="text" class="d-none" value="<?php echo $id; ?>" name="id" />

              
                    <div class="styled-input">
      <select class="form-control w-100" id="type" name="type" onchange="other1()">
          <option>Select Vaccine type</option>
          <option>Oral Polio Vaccine (OPV 0)</option>
          <option>Bacillus Calmette–Guérin (BCG)</option>
          <option>Hepatitis B (HB 1)</option>
          <option>Diptheria, Tetanus and Pertussis vaccine (DTP 1)</option>
          <option>Inactivated Polio Vaccine (IPV** 1)</option>
          <option>Hepatitis B  (HB 2)</option>
          <option>Haemophilus Influenzae Type B (HiB 1) </option>
          <option>Rotavirus 1</option>
          <option>Pneumococcal Conjugate Vaccine (PCV 1)</option>
          <option>Diptheria, Tetanus and Pertussis vaccine (DTP 2)</option>
          <option>Haemophilus Influenzae Type B (HiB 2)</option>
          <option>Inactivated Polio Vaccine (IPV** 2)</option>
          <option>Hepatitis B (HB 3)</option>
          <option>Rotavirus 2</option>
          <option>Pneumococcal Conjugate Vaccine (PCV 2)</option>
          <option>Diptheria, Tetanus and Pertussis Vaccine (DTP 3)</option>
           <option>Haemophilus Influenzae Type B (HiB 3)</option>
           <option>Inactivated Polio Vaccine (IPV** 3)</option>
           <option>Hepatitis B  (HB*4)</option>
           <option>Rotavirus 3</option>
           <option>Pneumococcal Conjugate Vaccine (PCV 3)</option> 
          <option>InfluenzaOPV</option>
           <option>Measles, Mumps, and Rubella (MMR 1)Typhoid Conjugate Vaccine</option>
           <option>Hepatitis A (Hep A1)</option>
           <option>Measles, Mumps, and Rubella (MMR 2)</option>
          <option>Varicella 1</option>
           <option>PCV Booster 1</option> 
          <option>Diphtheria, Perussis, and Tetanus (DTP B1)</option>
           <option>Inactivated Polio Vaccine (IPV*** B1)</option> 
          <option>Hepatitis A (Hep A2*****)</option>
           <option>Haemophilus Influenzae Type B (HiB B1)</option>
           <option>Diphtheria, Perussis, and Tetanus (DTP B2)</option>
           <option>Varicella 2</option>
          <option>Measles, Mumps, and Rubella (MMR 3/MMRV)</option>
          <option>Tdap</option>
          <option>Human Papilloma Virus (HPV 1 & 2)</option>
            <option>Td</option>
            <option>Human Papilloma Virus (HPV 1, 2 & 3)</option>
          <option>other</option>
          </select>
      </div>
        <div class="styled-input">
      <input type="text" class="" id="vname" name="vname" placeholder="" required />
      <label class="w-100" style="">Enter vaccine name</label>
      <span></span>
    </div>
       <div class="styled-input">
      <input type="file" name="files[]" class="" required multiple />
      <label class="w-100" style="background:#fff;">Select Images</label>
      <span></span>
    </div>
    <h6>* Maximum upload images 3</h6>
        <div class="styled-input">
      <input type="date" id="date" name="date" class="" required />
      <label class="w-100" style="background:#fff;">Select Date</label>
      <span></span>
    </div>
    <div class="styled-input">
           <textarea class="" name="description" rows="3" required></textarea>
           <label class="">Select Description</label>
      <!-- <span></span> -->
    </div>
    <div class="my-2">
      <button type="submit" style="border-radius:5px !important;">Add Report</button>
      </div>
  </form>
</div>
            <div class="p-2 m-0 text-center" id="login_p">
                <span class="">Goto <a href="index1.php">Home</a></span>
                </div>
            </div>
        
        </div>
        
        
        </section>

<script>
 var vname=document.getElementById("vname").disabled = true;
 
function other1()
{
  var type=document.getElementById("type").value;
  // alert(type);
  if(type === "other")
  {
    document.getElementById("vname").disabled = false;
  }
  else
  {
    document.getElementById("vname").disabled = true;
  }
}
  </script>

        <script type="text/javascript">
  $(document).ready(function(){
    $("#submitForm").on("submit", function(e){
      e.preventDefault();
      var formData = $(this).serialize();
    var dob=$("#date").val();
    var type=$("#type").val();
    var d=new Date();
var dt=d.getFullYear();
var md=new Date(dob);
var mdt=md.getFullYear();

var mon=d.getMonth();
var mon1=md.getMonth();

var date=d.getDate();
var date1=md.getDate();

// alert(mdt);

	if(type === "Select Report Type")
	{
		alert("Select report type");
	}
	else
	{
    if((mdt > 1950 && mdt <= dt) && (mon >= mon1) && (date >= date1))
    {

      $.ajax({
        url  : "vaccine_store.php",
        type : "POST",
        contentType: false,
        processData:false,
        cache:false,
        data : new FormData(this),
        success:function(result){
          // alert(result);
          if (result == "yes") {
            alert("Report stored sucessfully ");
            window.location ='index1.php';          
          }
		  else if(result == "no"){
            alert("Report not stored");
            alert(result);
          }     
		  else{
			  alert(result);
		  }     
        }
      }); 


    }
    else{
  alert("Enter correct Date");
}
	} 
      });    
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