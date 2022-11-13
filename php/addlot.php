<?php
include("connection.php");
$lot_code=$_POST['lot_code'];
$sql="insert into lots values ('','$lot_code','OUT','')";
$result=mysqli_query($conn,$sql);
if($result==TRUE)
{
    echo"inserted successfully";
}
else
echo"not inserted";
?>