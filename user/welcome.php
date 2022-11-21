<?php
session_start();

include('../php/connection.php');

if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0)) {
  header('location:../user/siginform.php');
  } else{?>
    
    <html>
    <head>
      <style>
        nav
        {
           border:1px solid black;
        }
        </style>
  </head>
    <body>
      <nav>
        <ul>
          <li><a href='viewvehicle.php'></a></li>
  </ul>
  </nav>
  </body>
  </html>
  <?php}?>