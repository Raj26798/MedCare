<?php
include_once('config.php');
$name=$_GET["p"];
$dob=$_GET["d"];
$phone=$_GET["phone"];

// echo $phone;
// echo $dob;
// echo $name;

$sql = "SELECT * FROM family where phone = '$phone' and name = '$name' and dob = '$dob'";
$result = $con->query($sql);
?>

<table class="table table-striped" style="">

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "<br> id: ". $row["id"]. " - Name: ". $row["name"];
        $h=$row["name"];
        $db=$row["dob"];
        $phone=$row["phone"];
        $id=$row['id'];
?>

    <tr>
        <td>
        <img class="person_icon" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
       </td>
       <td>
        <a class="btn btn-success float-right m-1" href="details.php?name=<?php echo $h; ?>&dob=<?php echo $db; ?>">Update profile</a>
        <a class="btn btn-primary float-right m-1" href="report_data.php?id=<?php echo $id; ?>">View Reports</a>
        <a class="btn btn-danger float-right m-1" href="delete.php?id=<?php echo $id; ?>">Delete profile</a>
        <a class="btn btn-info float-right m-1" href="forms.php?id=<?php echo $id; ?>&name=<?php echo $h; ?>">Add Reports</a>
        <!-- <form id="sub">
            <input type="text" name="user_id" id="user_id" value="<?php echo $row['id']; ?>" />
         <input type="submit" name="submit" class="btn btn-danger float-right m-1" />
    </form> -->
    </td>
    </tr>
    <tr>
        <td>
    </td>
    <td>

    </td>
    </tr>
<tr>
<td>Name</td>
<td><?php echo $row["name"]; ?></td>    
</tr>
<tr>
<td>Age</td><td><?php echo $row["age"]; ?></td>     
</tr>
<tr>
<td>DOB</td><td><?php echo $row["dob"]; ?></td>    
</tr>
<tr>
<td>Gender</td><td><?php echo $row["gender"]; ?></td>    
</tr>
<tr>
<td>Phone</td><td><?php echo $row["phone"]; ?></td>     
</tr>
<tr>
<td>Height</td><td><?php echo $row["height"]; ?></td>    
</tr>
<tr>
<td>Relationship</td><td><?php echo $row["relation"]; ?></td>        
</tr>
<tr>
<td>Weight</td><td><?php echo $row["weight"]; ?></td>      
</tr>
<tr>
<td>Blood group</td><td><?php echo $row["blood"]; ?></td>        
</tr>
<tr>
<td>Address</td><td><?php echo $row["address"]; ?></td>        
</tr>
<tr>
<td>Problems</td><td><?php echo $row["problems"]; ?></td>        
</tr>

      

    <?php


}
} else {
    echo "0 results";
}



?>

</table>


