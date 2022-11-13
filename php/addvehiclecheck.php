<?php
include("connection.php");
$vehi_name = $_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_POST['vehi_no'];
$lot_no=$_POST['lot_code'];
$cust_id=$_POST['id'];
$phno=$_POST['phno'];
$arrtim=$_POST['time'];
$arrdate=$_POST['date'];
$sql="INSERT INTO `vehicles`(`vehi_id`,`vehi_name`,`vehi_type`,`vehi_no`,`lot_no`,`user_id`,`contact_no`,`time_arr`,`date_arr`,`status`) 
VALUES ('','$vehi_name','$vehi_type','$vehi_no','$lot_no','$cust_id','$phno','$arrtim','$arrdate','IN')";
$query=mysqli_query($conn,$sql);
if($query==TRUE)
{
    echo"inserted successfully";
$sql1="UPDATE `lots` SET `lot_status`='IN',user_id='$cust_id' WHERE lot_code='$lot_no'";
$query1=mysqli_query($conn,$sql1);
if($query1==TRUE)
{
    echo"updated successfully";
}
else
echo"not updated";
}
else
echo"not inserted successfully";
?>
