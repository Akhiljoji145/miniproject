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
        <link rel="stylesheet" href="../css/welcome.css">
    </head>
    <body>
    <div class="border1"> 
       
        <div class="float"><h1>ADMIN</h1></div>
        <div class="float1"><img  height="60" width="60" src="../images/LOGO.png"></div>
        <div class="float3"><h1>Online Vehicle Parking Management System</h1></div>
    </div>
      <div class="float">
       <div class="border width padding"><br>
        <div class="padding1">
        <a class="text" href="addvehicle.php" target="frame3"><span>Add Vehicle</span></a>
        </div>
        <hr>
        <div class="padding1">
            <a class="text" href="lot.html" target="frame3"><span>Add Lot</span></a>
        </div>
        <hr>
        <div class="padding1">
            <a class="text" href="vehi_details.php" target="frame3"><span>vehicle details</span></a>
        </div>
        <hr>
        <div class="padding1">
            <a class="text" href="../php/reg_user.php" target="frame3"><span>Reg.User</span></a>
        </div>
        <hr>
        <div class="padding1">
            <a class="text" href="transactiondetails.php" target="frame3"><span>Transaction Details</span></a>
        </div>
        <hr>
       </div>
       <iframe name="frame3"  class="border height">
        
       </iframe>
     </div>
    </body>
</html><?php}