<?php
include("connection.php");
$vehi_name = $_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_POST['vehi_no'];
$lot_no=$_POST['lot_code'];
$cust_id=$_POST['id'];
$phno=$_POST['phno'];
$arrtime=$_POST['time'];
/*$sql1="UPDATE lots
SET lot_status='IN' user_id='$cust_id'
WHERE  ;*/
$sql="insert into users values('','$vehi_name',$vehi_type','$vehi_no','$lot_no','$cust_id','$phno','$arrtime')";
$query=mysqli_query($conn,$sql);
if($query==TRUE)
{
    echo"inserted successfully";
}
else
echo"not inserted successfully";
?>
