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
                height:30px;
                width: 262px;
                background-color: blue;
                color:azure;
            }
            .submit:hover
            {
                background-color:green;
            }
            span
            {
                
                font-size:25px;
            }
            p
            {
                text-align:center;
            }
            .border
            {
                border:1px solid white;
            }
            .height
            {
                height:470px;   
            }
            .width
            {
                width:1315px;
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
                color:red;
                font-size:18px;
            }
            .bg1
            {
                background-color:black;
                height:100px;
                width:262px;
            }

        </style>
    </head>
    <body>
        <div class="border width">
            <span><p><b>User Login<b><p></span>
        </div>
        <div class="border height width bg">
        <br>
        <div class="padding">
        <form method="POST">
        <div class="bg1">
        <label>Username:</label><input type="email" autocomplete="off" name="email"><br><br>
        <label>Password:</label> <input type="password" autocomplete="off" name="pass"><br><br>
        <input class="submit" type="submit" value="login" name="submit">
        </div>
        </form>
        </div>
        </div>
        
    </body>
</html>