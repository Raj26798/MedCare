<!Doctype html>
<html>
<head>
<title>MEDCARE</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="file/jquery-3.3.1.js"></script>
    </head>
    <body style="">
    <section class="container-fluid register-form">
        
        <div class="row">
        
            <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 mx-auto mt-3">
            
                <div class="page-wrap">
                    <h1 class="text-center py-3">Login</h1>
                    <p>Save your information! Protect your life!</p>
  
  <form class="p-2" id="submitForm">
      <div class="styled-input">
      <input type="number" name="phone" required />
      <label>Phone</label>
      <span></span>
    </div>
    <div class="styled-input pt-2 mt-2 mb-5">
          <!-- <h6 class="px-1">DOB</h6> -->
      <input type="date" name="dob" id="dob" class="pt-0 mt-0" required />
      <label style="background:#fff;width:100%">Date of birth</label>
      <span></span>
    </div>
    <div>
      <button type="submit" id="loginSubmit" name="submit" style="border-radius: 5px !important;">Login</button>
      </div>
  </form>
</div>
            <div class="p-2 m-0 text-center" id="login_p">
                <span class="">Already not account? <a href="register.php">Register</a></span>
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
      var formData = $(this).serialize();
      $.ajax({
        url  : "login_store.php",
        type : "POST",
        cache:false,
        data : formData,
        success:function(response){
          if (response == "yes") {
            alert("Login successfully!");
            window.location.href='index1.php';
          }
          if (response =="no") {
            alert("Enter valid data!");
          }        
        }
      });
    });
</script>


    </body>
</html>