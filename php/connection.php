<?php
$conn=new mysqli("localhost","root","","parking");
if(!$conn){
    die("connection failed");
}
else
echo "connected successfully";
?>