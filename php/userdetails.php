<?php
include("connection.php");
$username=$_POST['name'];
$age=$_POST['age'];
$contact=$_POST['contact_no'];
$email=$_POST['email'];
$vehicle=$_POST['vechile_no'];
$password=$_POST['password'];
$query="INSERT INTO `users`VALUES ('', '$username', '$age', '$contact','$email' '$vehicle', '$password')";
$result=mysqli_query($conn,$query);
?>