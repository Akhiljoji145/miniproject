<?php
include("../php/connection.php");
$sql="SELECT users.username,vehicles.* FROM users , vehicles WHERE users.user_id=vehicles.user_id AND status='IN'";
$query=mysqli_query($conn,$sql);
echo"
<html>
<head>
<style>
table
{
    
    width:1000px;
    
td,tr
{
    border:0;
    height:20px;
    width:30px;
    text-align:center;

}
th
{
    border:0;
    width:30px;
    
}
</style>
</head>
<body>
<table border='1'>
<tr>
<th>username</th>
<th>vehicleid</th>
<th>vehicle name</th>
<th>vehicle type</th>
<th>vehicle no</th>
<th>lot no</th>
<th>user id</th>
<th>contact no</th>
<th>time of arrival</th>
<th>date of arrival</th>
<th>status</th>
</tr>
<tr>";
while ($row=mysqli_fetch_row($query))
{
echo"<td>$row[0]</td>
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
<td class='a'><a href='transaction.html'><button>VIEW</button></a></td>";
}
echo"</tr>
</table>
</body>
</html>";
?>
