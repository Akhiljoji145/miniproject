<?php
session_start();
error_reporting(0);
include('../php/connection.php');
error_reporting(0);
if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0)) {
  header('location:../user/siginform.php');
  } else{ ?>
<?php}