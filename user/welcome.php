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
      height:50px;
      width:1350px;

     }
     .user{
       font-size:20px;
       padding-top:30px;
     }
    </style>
  </head>
    <body>
        <div class="header">
        <span class="user">USER</span>
        </div>
  </body>
  </html>
<?php } 