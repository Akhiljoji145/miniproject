<?php
include("../php/connection.php");
echo"<html>
    <style>
        .padding-left
        {
            padding-left: 30px;
        }
        label{
            font-size: 20px;
        }
        form{
            border:1px solid black;
            width:100%;
        }
        .padding-left1
        {
          padding-left: 100px;
          
        }
        .padding-left2
        {
          padding-left: 30px;
        }
        .input
        {
            height:30px;
            width: 200px;
        }
    </style>
    <body>
        <form method='POST' action=''>
        <br>
        <span class='padding-left1'>
        <label>Search:</label>
        <label class='padding-left'>From:</label>
        <span class='padding-left2'><input class='input'  type='date' name='fr_date'></span>
        <label class='padding-left'>To:</label>
        <span class='padding-left2'><input class='input'  type='date' name='to_date'></span>
        <span class='padding-left2'><input class='input'  type='submit' value='Submit' name='submit'></span></span>
        <br><br>
        </form>
</body>
</html>";
if(isset($_POST['submit']))
{
$fr_date=$_POST['fr_date'];
$to_date=$_POST['to_date'];
$sql="SELECT * FROM `transaction` WHERE date_of_trans between '$fr_date' AND '$to_date'";
$result=mysqli_query($result);
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