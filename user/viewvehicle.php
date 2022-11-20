<?php
session_start();
error_reporting(0);
include('../php/connection.php');
error_reporting(0);
if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0)) {
    header('location:../user/siginform.php');
} 
else{ 
$id=$_SESSION['user_id'];
$sql="SELECT users.username,vehicles.* FROM users , vehicles WHERE users.user_id=vehicles.user_id;";
$result=mysqli_query($conn,$sql);
if(result==TRUE)
{
echo"
<table border='1'>
<tr>
<th>username</th>
<th>vehicle id</th>
<th>vehicle name</th>
<th>vehicle type</th>
<th>vehicle no</th>
<th>lot no</th>
<th>user_id</th>
<th>contact no</th>
<th>time of arr</th>
<th>date of arr</th>
<th>status</th>
</tr>
<tr>";
while($row = mysqli_fetch_row($result))
{
    echo"
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[6]</td>
    <td>$row[7]</td>
    <td>$row[8]</td>
    <td>$row[9]</td>
    <td>$row[10]</td>
   ";
    
}
echo"
</tr>
</table>";
}
else {
echo"NO";
}
}
?>