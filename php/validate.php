<?php
include("connection.php");
$admin=$_POST['name'];
$pass=$_POST['pass'];
$query="SELECT `ad_name`, `ad_password` FROM `admin` WHERE ad_name='$admin' and ad_password='$pass'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
    $admin1=$row['ad_name'];
    $pass1=$row['ad_password'];
}
if($admin==$admin1 && $pass==$pass1)
    {
    session_start();
    $_SESSION['username']=session_id();
    header("location:../admin/welcome.html");
}
else {
    echo"login not successful";
}


?>