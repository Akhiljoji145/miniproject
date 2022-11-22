<?php
session_start();

include('../php/connection.php');

if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0)) {
  header('location:../user/siginform.php');
  } 
  else{?>
<html>
    <head>
      <style>
        ul {
    list-style-type: none;
    margin: 0;
    padding:10 10 10 10;
  }
  li
  {
    padding-top:10px;
    padding-bottom:10px;
    
  }
        nav
        {
           border:1px solid black;
           width:200px;
           height:545px;
           float:left;
          
        }
        iframe
        {
          height:545px;
          width:1105px;
          float:left;
          border:1px solid black;
        }
        a
        {
          text-decoration:none;
        }
        a:hover
        {
          text-decoration:underline;
        }
        </style>
  </head>
    <body>
      <nav>
        <ul>
          <li>User Id : <?php echo $_SESSION['user_id'] ?></li>
          <hr>
          <li><a href="viewvehicle.php" target="frame4">View Vehicle</a></li>
          <hr>
  </ul>
  </nav>
  <iframe name="frame4"></iframe>
  </body>
  </html>
<?php }
?>