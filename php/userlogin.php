<?php
session_start();
include("connection.php");
$email=$_POST['email'];
$pass=$_POST['pass'];
$query="SELECT email , password  FROM `users` WHERE email='$email' and password='$pass'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
if($email==$row['email'] && $pass==$row['password'])
{ 

    echo"login successfully";
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['user_id'];
    header("location:../user/welcome.php");

}
else {
    function function_alert($message) {
        echo "<script>alert('$message');</script>";
        echo"<a href='../user/siginform.html'>GO BACK TO PREVIOUS PAGE</a>";
      }
      function_alert("login not sucessfully");
}
}

