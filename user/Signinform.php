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
                width: 255px;
                background-color: blue;
                color:azure;
            }
            .submit:hover
            {
                background-color:green;
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
            form
            {
                border:1px solid black; 
                width:255px;
                background-color:black;
            }
            .form
            {
                display: table;
                
            }
            p
            {
                display: table-row;
            }
            input
            {
                display: table-cell;
            }
            label
            {
                display: table-cell;
            }
            .border
            {
                padding-top:200px;
                padding-left: 550px;
                border:1px black;
                width:600px;
            }
            .body
            {
               border:1px solid black;
               height:520px;
               background-image: url("../images/parking.jpg");
               background-size: 100% 100%;
            }
        </style>
        <script>
         function validateForm() {
         let x = document.forms["form"]["email"].value;
         let y = document.forms["form"]["pass"].value;
         if (x == "") {
         alert("email must be filled out");
         return false;
        }
        if (y == "")
        {
            alert("please enter ")
        }
        
    }
        </script>
    </head>
    <body>
    <div class="body">
    <div class="border">
       <form method="POST">
        <div class="form">
        <p>
        <label>Email:</label><input type="email" name="email"><br><br>
        </p>
        <p>
        <label>Password:</label><input type="password" name="pass"><br><br>
        </p>
        </div>
        <input type="submit" class="submit" name="submit" value="submit">
       </form>
    </div>
    <div>
    </body>
</html>