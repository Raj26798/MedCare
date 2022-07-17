<!Doctype html>
<html>
<head>
<title>MEDCARE</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <link rel="stylesheet" href="css/register1.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="file/jquery-3.3.1.js"></script>
    </head>
    <body>
    <section class="container-fluid register-form">
        
        <div class="row">
        
            <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 mx-auto mt-3">
            
                <div class="page-wrap">
                    <h1 class="text-center">Register</h1>
                    <p>Save your information! Protect your life!</p>
  
  <form class="p-2" id="submitForm">
    <div class="styled-input">
      <input type="text" name="name" id="name" required />
      <label>Name</label>
      <span></span>
    </div>
<!--
    <div class="styled-input">
      <input type="email" required />
      <label>Email</label>
      <span></span>
    </div>
-->
    <div class="styled-input">
      <input type="number" name="phone" id="phone" required />
      <label>Phone</label>
      <span></span>
    </div>
      <div class="styled-input pt-2 mt-2 mb-5">
          <!-- <h6 class="px-1">DOB</h6> -->
      <input type="date" name="dob" id="dob" class="pt-0 mt-0" required />
      <label style="background:#fff;width:100%">Date of birth</label>
      <span></span>
    </div>
    <div class="mb-3">
      <button type="submit my-2" name="submit" class="btn_m">Register</button>
      </div>
  </form>
</div>
            <div class="p-2 m-0 text-center" id="login_p">
                <span class="">Already have account? <a href="login.php">Login</a></span>
                </div>
            </div>
        
        </div>
        
        
        </section>

        <script type="text/javascript">
          // alert("adsfads");
  $(document).ready(function(){
  
    $("#submitForm").on("submit", function(e){
      e.preventDefault();
     
      var formData = $(this).serialize();
      var name=$("#name").val();
    var mobile1=$("#phone").val();
    var dob=$("#dob").val();
var d=new Date();
var dt=d.getFullYear();
var md=new Date(dob);
var mdt=md.getFullYear();
// alert(mdt);
	var l=mobile1.length;
  
	// alert(l);

  
	if(mobile1 <= 6000000000 || mobile1 >= 9999999999 || l != 10)
	{
		
		alert("Enter valid mobile number");
	}
	else
	{
    if(mdt > 1950 && mdt < dt)
    {
      $.ajax({
        url  : "register_store.php",
        type : "POST",
        cache:false,
        data : formData,
        success:function(result){
          // alert(result);
          if (result == "yes") {
            alert("Registration sucessfully Please login");
            window.location ='login.php';          
          }
		  else if(result == "mobile number already registered!")
		  {
			alert("mobile number already registered!");
		  }
		  //else if(result == "no"){
    //         alert("Registration failed try again!");
    //         alert(result);
    //       }     
		  else{
			  alert(result);
		  }     
        }
      }); 
    }
    else{
  alert("Enter correct Date of birth");
}
	} 





    });    
  });
</script>

    </body>
</html>