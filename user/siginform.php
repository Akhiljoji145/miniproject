<?php
session_start();
//error_reporting(0);
include('../php/connection.php');
if(isset($_POST['submit']))
  {
    $emailcon=$_POST['email'];
    $password=$_POST['pass'];
    $sql="SELECT `user_id`,`email`, `password` FROM `users` WHERE email='$emailcon' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query);
    if($result>0){
        $_SESSION['email']=$result['email'];
        $_SESSION['user_id']=$result['user_id'];
      header("location:welcome.php");
    }

    else
    {
    echo "not successfully";
    }
    
} 
  ?>
<html>
    <head>
        <style>
            
            .submit
            {
                height:25px;
                width: 245px;
                background-color: black;
                color:azure;
            }
            h1
            {
                text-align: center;
            }
            .border
            {
                border:1px solid black;
            }
            .height
            {
                height:550px;   
            }
            .width
            {
                width:1330px;
            }
            .padding
            {
                padding-left: 550px;
                padding-top:150px;
            }
            .bg
            {
                background-image: url("../images/parking.jpg");
                background-size: 100% 100%;
            }
            label{
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="border width">
            <h1>User Login</h1>
        </div>
        <div class="border height width bg">
        <br>
        <div class="padding">
        <form method="POST">
        <label>username:</label><input type="email" autocomplete="off" name="email"><br><br>
        <label>password:</label><input type="password" autocomplete="off" name="pass"><br><br>
        <input class="submit" type="submit" value="login" name="submit">
        </form>
        </div>
        </div>
        
    </body>
</html>