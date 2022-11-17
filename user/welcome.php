<?php
session_start();
error_reporting(0);
include('../php/connection.php');
error_reporting(0);
if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0)) {
  header('location:../user/siginform.php');
  } else{ ?>
<html>
  <head>
    <style>
     .header{
      border:1px solid black;
      height:60px;
      width:1350px;
      padding-top:20px;
      }
     .user{
      font-size:25px;
      font-family:stencil;
      padding-left:50px;
       
     }
     .padding
     {
      font-size:25px;
      padding-left:250px;
      text-shadow:1px 1px 2px black;
      color:red;
     }
    </style>
  </head>
    <body>
        <div class="header">
        <span class="user"><b>USER</b></span><span class="padding"><b>ONLINE VEHICLE PARKING MANAGEMENT SYSTEM</b></span>
        </div>
  </body>
  </html>
<?php } 