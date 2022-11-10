<?php
include("connection.php");
$vehi_name = $_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_POST['vehi_no'];
$cust_id=$_POST['id'];
$phno=$_POST['phno'];
$arrtime=$_POST['time'];
$sql="insert into users values('','$vehi_name',$vehi_type','$vehi_no','$cust_id','$phno','$arrtime')";
$query=mysqli_query($sql);
if($query==TRUE)
{
    echo"inserted successfully";
}
else
echo"not inserted successfully";
?>
