<?php
include("connection.php");
$username=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="INSERT INTO `users`VALUES ('', '$username', '$age','$email','$password')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"inserted successfully";
}

?>