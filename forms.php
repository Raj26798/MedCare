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
    <link rel="stylesheet" href="css/forms.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>
  
    </head>
    <body>        
        <section class="container-fluid head_title">
            <h1 class="p-2 d-inline"><a href="index1.php">MEDCARE</a></h1>
            <span class="d-inline"><a href="index1.php" style="font-size:1rem !important;float:right;">Home</a></span>
        </section>
        <section class="container py-4">
        <div class="row">
        
            <!-- <div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
   <div class="forms_sec">
        <img src="img/plant5.jpg" alt="model_img" class="w-100" />
       <div class="row px-0 py-3">
           <div class="col-2 text-center">
               <i class="fa fa-heartbeat model_icon mx-3 mt-1" aria-hidden="true"></i>

           </div>
           <div class="col-10">
                    <h5 class="font-weight-bold d-inline">Prescreptions</h5>
              <a href="reports.html" class="add_new">Add</a>
                </div>
       </div>
      
                </div>
              
</div>
    <div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
   <div class="forms_sec">
        <img src="img/plant8.png" alt="model_img" class="w-100" />
       <div class="row px-0 py-3">
           <div class="col-2 text-center">
           <i class="fa fa-heartbeat model_icon mx-3 mt-1" aria-hidden="true"></i>
           </div>
           <div class="col-10">
                    <h5 class="font-weight-bold d-inline">Lab reports</h5>
              <a href="#" class="add_new">Add</a>
                </div>
       </div>
      
                </div>
              
</div>
            <div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
   <div class="forms_sec">
        <img src="img/plant13.png" alt="model_img" class="w-100" />
       <div class="row px-0 py-3">
           <div class="col-2 text-center">
           <i class="fa fa-heartbeat model_icon mx-3 mt-1" aria-hidden="true"></i>
           </div>
           <div class="col-10">                                                                         
                    <h5 class="font-weight-bold d-inline">X-ray Reports</h5>

              <a href="#" class="add_new">Add</a>
                </div>
       </div>
      
                </div>
              
</div> -->

<div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
                <div class="forms_sec">
                     <img src="img/plant4.jpg" alt="model_img" class="w-100" />
                    <div class="row px-0 py-3">
                        <div class="col-2 text-center">
                        <i class="fa fa-heartbeat model_icon mx-3 mt-1" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                                 <h5 class="font-weight-bold d-inline">Reports</h5>
                                 <a href="reports.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" class="add_new">Add</a>
                              <p class="model_para my-2 mr-2">We can store Preceptions, medical reports, certificates, bills, lab reports, x-ray reports, test reports. </p>  
                         
                             </div>
                    </div>
                   
                             </div>
                           
             </div>

             <div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
   <div class="forms_sec">
        <img src="img/plant1.png" alt="model_img" class="w-100" />
       <div class="row px-0 py-3">
           <div class="col-2 text-center">
           <i class="fa fa-heartbeat model_icon mx-3 mt-1" aria-hidden="true"></i>
           </div>
           <div class="col-10">
               <div class="d-inline">
                    <h5 class="font-weight-bold d-inline">Vaccine Reports</h5>
                     <a href="vaccine_report.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" class="add_new">Add</a>
                     <p class="model_para my-2 mr-2">We can store childrends and adult vaccine reports. </p>  
               </div>
                </div>
       </div>
      
                </div>
              
</div>
<!--
             <div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
   <div class="forms_sec">
        <img src="img/plant5.jpg" alt="model_img" class="w-100" />
       <div class="row px-0 py-3">
           <div class="col-2 text-center">
           <i class="fa fa-heartbeat model_icon mx-3 mt-1" aria-hidden="true"></i>
           </div>
           <div class="col-10">
                    <h5 class="font-weight-bold d-inline">Medical Certificates</h5>

              <a href="#" class="add_new">Add</a>
                </div>
       </div>
      
                </div>
              
</div> -->

       
            
               <div class="circle1 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-2">
                
   <div class="forms_sec">
        <img src="img/plant9.jpg" alt="model_img" class="w-100" />
       <div class="row px-0 pt-2 pb-0">
           <div class="col-2 text-center">
           <i class="fa fa-heartbeat model_icon mx-3 mt-2" aria-hidden="true"></i>
           </div>
           <div class="col-10 py-2">
                    <h5 class="font-weight-bold d-inline">Day Today Reports</h5>
                 
                    <a href="dreport.php?id=<?php echo $id; ?>" class="add_new">Add</a>
                 <p class="model_para my-2 mr-2">We can store routine Sugar, BP, Fever, Pulse reports </p>   
                </div>
          
       </div>
      
                </div>
              
</div>
    
            
</div>
            
<!--            </div>-->
        </section>
        
        
        
        
    </body>    
</html>


<?php

}else{
	header("Location:login.php");
	die();
}

?>