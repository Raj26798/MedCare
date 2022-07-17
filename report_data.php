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
<link rel="stylesheet" href="css/show1.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body style="background:lavender">
<section class="container-fluid head_title1">
            <h1 class="p-2 d-inline"><a href="index1.php">MEDCARE</a></h1>
            <span class="d-inline"><a href="index1.php" style="font-size:1rem !important;float:right;">Home</a></span>
        </section>
<section class="pt-5 px-s">
        <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12 mx-auto py-5 mt-5" style="background:#fff;
    border-radius: 8px;">
        <a class="btn btn-primary w-100 my-2" href="show.php?id=<?php echo $id; ?>">General Reports</a>
        <a class="btn btn-primary w-100 my-2" href="vshow.php?id=<?php echo $id; ?>">Vaccine Reports</a>
        <a class="btn btn-primary w-100 my-2" href="dshow.php?id=<?php echo $id; ?>">Day today Reports</a>
</div>
</section>
</body>
</html>


<?php

}else{
	header("Location:login.php");
	die();
}

?>