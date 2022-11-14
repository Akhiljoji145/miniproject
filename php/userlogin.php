<?php
include("connection.php");
$email=$_POST['email'];
$pass=$_POST['pass'];
$query="SELECT email , password  FROM `users` WHERE email='$email' and password='$pass'";
$result=mysqli_query($conn,$query);
error_reporting(0);
while($row=mysqli_fetch_assoc($result))
{
    $email1=$row['email'];
    $pass1=$row['password'];
}
if($email==$email1 && $pass==$pass1)
{
    echo"inserted successfully";
}
else {
    function function_alert($message) {
        echo "<script>alert('$message');</script>";
        echo"<a href='../user/siginform.html'>GO BACK TO PREVIOUS PAGE</a>";
      }
      function_alert("login not sucessfully");
      
  }

?>