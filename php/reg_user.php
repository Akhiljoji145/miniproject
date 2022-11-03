<?php
include("connection.php");
$query="select user_id,username,age,contact_no from users";
$result=mysqli_query($conn,$query);
echo"<html>
<head>
<style>
</style>
</head>
<body>
<table border='1'>
<tr>
<th>user id</th>
<th>username</th>
<th>age</th>
<th>contact no</th>
</tr>";
while($row = mysqli_fetch_row($result))
{
   echo"<tr>
   <td>$row[0]</td>
   <td>$row[1]</td>
   <td>$row[2]</td>
   <td>$row[3]</td>
   </tr>";


}
echo"</table>
</body>
</html>";
?>