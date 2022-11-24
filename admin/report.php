<?php
include("../php/connection.php");
$fr_date=$_POST['fr_date'];
$to_date=$_POST['to_date'];
$sql="SELECT * FROM `transaction` WHERE date_of_trans between '$fr_date' AND '$to_date'";
$result=mysqli_query($conn,$sql);
if($result==TRUE)
{
echo"
<html>
<body>
<table border='1'>
<tr>
<th>transactionid</th>
<th>user id</th>
<th>vehicle no</th>
<th>receipt no</th>
<th>time</th>
<th>date of transaction</th>
<th>amount</th>
</tr>";
while($row=mysqli_fetch_row($result))
{
echo"<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>
<td>$row[5]</td>
<td>$row[6]</td>
</tr>";
}
echo"</table>
</body>
</html>";
}
else
?>