<?php
include_once('config.php');
session_start();

if (isset($_SESSION['PHONE'])) {
    $phone = $_SESSION['PHONE'];

    $query  = "SELECT * FROM family WHERE phone = '$phone'";
   	$result = $con->query($query);

    
   	// if ($result->num_rows > 0) {
       	// $con->query("UPDATE users SET otp = '' WHERE mobile_number = '$mobile'");
        // $_SESSION['PHONE'] = $row['phone'];
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
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>

<script src="file/bootstrap.min.js"></script>
</head>
<body>
<header class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-4 col-md-6 col-8 col-sm-8">
            <a href="javascript:void(0)" class="sb_head_tit"><h1 class="title_a">MEDCARE</h1></a>
</div>
<div class="col-lg-8 col-xl-8 col-md-6 col-4 col-sm-4 p-0">
    <div class="sb_menu_links" id="menu_links">
<a href="javascript:void(0)">Home</a>
<a href="#service">Services</a>
<a href="#reports">Reports</a>
<a href="#family">Family</a>
<a href="logout.php">Logout</a>
</div>
</div>
</div>
</header>

<section class="container-fluid">
<div class="row">
<div class="col-lg-6 col-xl-6 col-md-6 col-11 col-sm-11 head_center">
<!-- <h1 class="title_a">MEDCARE</h1> -->
<p class="report_para my-5 mx-5">
We store certificates, test results, vaccination records, X-rays, sick leave certificates, doctor prescriptions and any other important information.
</p>
<div class="py-3">
<a href="#service" class="title_link">Start</a>
       </div>     
</div>

       <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12 text-center ">
       <!-- <div class="sb_menu_links" id="menu_links">
<a href="">Home</a>
<a href="">Demo</a>
<a href="">Family</a>
</div> -->
       <img src="img/banner.png" alt="banner image" class="w-75 my-2" />
       </div>
       </div>
<section>

<section class="container my-5" id="service">
    <h1 class="text-center pb-4 service_head">OUR SERVICES</h1>
    <div class="row">
    <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 my-2">
<div class="card">

<img src="img/massive4.jpg" class="w-100" alt="model" style="height:200px;" />
    <p class="pt-4">Make sure to share the information with your siblings, children, or grandchildren, as they get older.

To get started, call your relatives, or ask them in person about your family health history. Let your relatives know you’re not being nosy.</p>
</div>
</div>
<div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 my-2">
<div class="card" style="height:inhrerit">

<img src="img/pharmacy-vector-32.png" class="w-100" alt="model" style="height:200px;" />
    <p class="pt-4">Once you find out your medical history, you can make powerful choices for yourself. If you learn, for example, that heart disease runs in your family, you may decide to make lifestyle changes that could lower your risk, such as quitting smoking, losing weight, or getting more exercise.</p>

</div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 my-2">
        <div class="card" style="height:auto">
        <img src="img/massive3.png" class="w-100" alt="model" style="height:200px;" />
    <p class="pt-4">If you were adopted, you may not know anything about your birth parents’ health history. If that’s the case, a big chunk of your medical history is a question mark. You may wonder if you’re at risk for heart disease, cancer, or other diseases that run in families. </p>

</div>
        </div>
</div>
</section>


<section class="container mt-2 mb-5" id="reports">
  
<div class="">
<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 float-right text-center">
<img src="img/massive7.jpg" alt="Model image" class="w-100" />
       </div>
       <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 pt-5">
       <h1 class="report_head">REPORTS</h1>
       <p class="report_para my-3">
We store certificates, test results, vaccination records, X-rays, sick leave certificates, doctor prescriptions and any other important information.
</p>
<div class="py-4">
<a href="#family" class="report_link">Add Report</a>
       </div>     
</div>
       </div>
       </section>


<section class="container-fluid py-2 px-4 profiles" style="clear:both !important">
<div class="row">
<div class="col-lg-3 col-xl-3 col-md-4 col-sm-12 col-12 py-2" style="">
</div>
</div>
</section>


<span id="phone_no" class="d-none"><?php echo $phone; ?></span>

<section class="container px-3 py-3" id="family">

<div class="row">
<div class="col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12 text-center px-1">
<img src="img/massive9.png" alt="model image" class="w-100" style="transform: rotateY(180deg);" />
       </div>

       <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12 pt-1">

       <div class="user_profile px-2 my-2 py-2 scrollbar" >
    <div class="flex-container overflow">
<div class="col-lg-2 col-xl-2 col-md-3 col-3 col-sm-3 add_user text-center d-inline pt-1" >
    <span class="add_one"><a href="add_person.php">+</a></span>
    <span class="add_person d-block mx-auto"></span>
</div>


    <!-- <span class="add_one"><a href="addPerson.php">+</a></span> -->
    <!-- <i class="fa fa-user-circle-o person_icon" aria-hidden="true"></i>
    <p class="d-inline sb_user_name d-block"></p>
</div> -->

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
<div class="col-lg-2 col-xl-2 col-md-3 col-3 col-sm-3 text-center p-2 d-inline">
    <button style="border:none;background:#fff;" onclick="user(this.id, this.class, this.name)" id="<?php echo $row['dob']; ?>" class="user_btn" name="<?php echo $row['name']; ?>" >
<img class="person_icon" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
   <p class="mt-2">
   <?php

        echo $row["name"];
    ?>
    </p>
    </button>
    </div>
    
    <?php
    }
} else {
    echo "0 results";
}

?>




       </div>
</div>

       <div class="user_data2 scrollbar" style="height:370px;
    background: #fff;
    border-radius: 10px;overflow-y:scroll;scrollbar-width: thin;">

<div id="demo"><p class="text-center my-5 py-5" style="font-size:1.2rem;font-weight:bold;">Click profile to view your details</p></div>
<!-- -->

       </div>
</div>     
       </div>

       </section>


       
  <!-- <div class="scrollbar">
    <div class="overflow"></div>
  </div> -->


<div>
<i class="fa fa-bars menu_icon" aria-hidden="true" onclick="menu_btn()" id="menu_link_btn"></i>
</div>


<div class="text-center footer-content ">
 <span class="mx-3">Contact : 7010895482</span>&copy;SBIT   

</div>



<script>
    $(document).ready(function(){
        $('#menu_link_btn').click(function(){
    $('#menu_links').toggle(500);
});
    });

</script>

<script>

let anchorlinks = document.querySelectorAll('a[href^="#"]')
 
for (let item of anchorlinks) { // relitere 
    item.addEventListener('click', (e)=> {
        let hashval = item.getAttribute('href')
        let target = document.querySelector(hashval)
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
        history.pushState(null, null, hashval)
        e.preventDefault()
    })
}

    </script>

<script>
    phone_no=document.getElementById("phone_no").innerHTML;
    // alert(phone_no);
function user(phone1, dob1, name1) {
    // alert(phone1);
ph=name1;
db=phone1;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "user_profile.php?p="+ph+"&d="+db+"&phone="+phone_no);
  xhttp.send();
}
</script>



<script>

// if no Webkit browser
(function(){
  let isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  let isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
  let scrollbarDiv = document.querySelector('.scrollbar');
    if (!isChrome && !isSafari) {
      scrollbarDiv.innerHTML = 'You need Webkit browser to run this code';
    }
})();
    </script>


<script>
    phone_no=document.getElementById("phone_no").innerHTML;
    // alert(phone_no);
function update(dob2, name2) {
    // alert(phone1);
name_p=name2;
dob_p=dob2;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "user_profile.php?p="+ph+"&d="+db);
  xhttp.send();
}
</script>



<script type="text/javascript">
        
        $("#sub").on("submit", function(e){
          e.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
            url  : "delete.php",
            type : "POST",
            cache:false,
            data : formData,
            success:function(result){
              if (result == "yes") {
                  alert("Deleted One person in your family");
                // window.location.href='add_Person.php';
              }
              if (result =="no") {
                alert("Can't delete");
              }        
            }
          });
        });
    </script>




</body>
</html>


<?php
    //    }

}else{
	header("Location:login.php");
	die();
}

?>