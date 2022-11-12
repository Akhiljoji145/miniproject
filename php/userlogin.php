<?php
include("connection.php");
$email=$_POST['email'];
$pass=$_POST['pass'];
$query="SELECT email , password  FROM `users` WHERE email='$email' and password='$pass'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
    $email1=$row['email'];
    $pass1=$row['password'];
}
if($email==$email1 && $pass==$pass1)
    {
    session_start();
    $_SESSION['username']=session_id();
    echo"login successfully";
}
else {
    echo"login not successful";
}