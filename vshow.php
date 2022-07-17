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
<link rel="stylesheet" href="css/show.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"
    />
    <!-- <link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" /> -->


<script src="file/jquery-3.3.1.js"></script>
<script src="file/popper.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>


<style>

</style>


</head>
<body>
<section class="container-fluid head_title1">
            <h1 class="p-2 d-inline"><a href="index1.php">MEDCARE</a></h1>
            <span class="d-inline"><a href="index1.php" style="font-size:1rem !important;float:right;">Home</a></span>
        </section>
    <section class="container-fluid">

    <div class="row">

    <?php
 $id=$_GET["id"];
include_once 'config.php';
$a=1;
$query = $con->query("SELECT * FROM vreports where user_id='$id'");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        echo "<div class='col-lg-4 col-xl-4 col-md-6 col-sm-12 col-12 p-2 dis'>";
        $count = $row["index1"]-1;
           
            $imageURL1 = 'imagess/'.$row["image1"];
?>
<div class="sec_head">
<div class="row m-1" style="box-shadow:0px 0px 3px 3px lavender;">
        <div class="w-50 d-inline">
        <a class="ach" class="" data-fancybox="single" href="<?php echo $imageURL1; ?>">
            <img class="w-100 group h-100" src="<?php echo $imageURL1; ?>" alt=" " />
            </a>
<?php while($a<=$count)
{
    $imageURL[$a] = 'images/'.$row["image".$a.""];
    ?>
            <a class="ach d-none" data-fancybox="single" href="<?php echo $imageURL[$a]; ?>">
            <img width="100px" height="100px" class="group" src="<?php echo $imageURL[$a]; ?>" alt=" " />
            </a>
<?php
$a++;
        }
        ?>
            </div>

         <div class="w-50 d-inline">
             <table class="table table-sticky">
                 <tr>
                     <td>
         <p class="p-0 m-0"><?php  echo $row["type"].""; ?></p> 
    </td>
    </tr>
    <tr>
        <td>
         <p class="p-0 m-0"><?php  echo $row["vname"].""; ?></p>
         </td>
    </tr>
    <tr>
        <td>
             <p class="p-0 m-0"><?php  echo $row["date"].""; ?></p>
             </td>
    </tr>
    <tr>
        <td>
             <p class="p-0 m-0"><?php  echo $row["description"].""; ?></p>       
             </td>
    </tr>
    <tr>
        <td>
             <p class="p-0 m-0 font-weight-bold"><?php $h=$row["index1"];$s=$h+1; echo $s."  Images"; ?></p> 
             </td>
    </tr>
    </table> 
        </div>
    </div>
    </div>
    </div>
<?php
}

}else
{ ?>
    <p>No image(s) found...</p>
<?php } ?> 





</div>

</section>



<script>


$(document).ready(function() {


$(".ash.group").fancybox({
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600, 
    'speedOut'		:	200, 
    'overlayShow'	:	false
});

});

// $("a.grouped_elements").fancybox();

</script>

</body>
</html>

