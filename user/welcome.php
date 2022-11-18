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
       
        <div class="float"><h1>USER</h1></div>
        <div class="float1"><img  height="60" width="60" src="../images/LOGO.png"></div>
        <div class="float3"><h1>Online Vehicle Parking Management System</h1></div>
        <div class="float4"><h1>User id:<?php echo $_SESSION['user_id']?></h1></div>
    </div>
      <div class="float">
       <div class="border width padding"><br>
        <div class="padding1">
        <a class="text" href="viewvehicle.php" target="frame3"><span>View Vehicle</span></a>
        </div>
        <hr>
        </div>
       <iframe name="frame3"  class="border height">
        
       </iframe>
     </div>
    </body>
</html>
<?php } 