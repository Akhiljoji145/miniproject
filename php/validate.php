<?php
include('connection.php');
if(isset($_POST['submit']))
  {
    $admin=$_POST['name'];
    $password=$_POST['pass'];
    $sql="SELECT `ad_name`, `ad_password` FROM `admin` WHERE ad_name='$admin' AND ad_password='$password'";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query);
    if($result>0){
      header("location:../admin/welcome.html");
    }
    else
    {
      function function_alert($message) {
      
    
    echo "<script>alert('$message');</script>";
}
  
  
// Function call
function_alert("username or password is incorrect");
  
      header("location:../admin/adminlogin.html");

    }
}
?>