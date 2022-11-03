<?php
include("connection.php");
$vehi_name=$_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_POST['vehi_no'];
$owner=$_POST['name'];
$contact_no=$_POST['no'];
$query="insert into vehicles values ('','$vehi_name','$vehi_type','$vehi_no','$owner','$contact_no')";
$result=mysqli_query($conn,$query);
if($result==TRUE)
{
    echo"<img height='30' width='30' src='..\images\full-stop.png'>";
}
else
echo"not inserted";
?>


