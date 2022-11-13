<?php
include("connection.php");
$vehi_name = $_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_POST['vehi_no'];
$lot_no=$_POST['lot_code'];
$cust_id=$_POST['id'];
$phno=$_POST['phno'];
$arrtim=$_POST['time'];
$sql="INSERT INTO `vehicles`(`vehi_id`, `vehi_name`, `vehi_type`, `vehi_no`, `lot_no`, `user_id`, `contact_no`, `time_arr`) 
VALUES ('','$vehi_name','$vehi_type','$vehi_no','$lot_no','$cust_id','$phno','$arrtim')";
$query=mysqli_query($conn,$sql);
if($query==TRUE)
{
    echo"inserted successfully";
}
else
echo"not inserted successfully";
?>
