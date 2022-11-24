<html>
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
        <form method="POST" action="">
        <br>
        <span class="padding-left1">
        <label>Search:</label>
        <label class="padding-left">From:</label>
        <span class="padding-left2"><input class="input"  type="date" name="fr_date"></span>
        <label class="padding-left">To:</label>
        <span class="padding-left2"><input class="input"  type="date" name="to_date"></span>
        <span class="padding-left2"><input class="input" name="Search"  type="submit" value="Search" ></span></span>
        <br><br>
        </form>
</body>
</html>
<?php
if(isset($_POST['Search']))
{ 
    $fr_date=$_POST['fr_date'];
    $to_date=$_POST['to_date'];

 echo"<thead>
<tr>
<tr>
<th>transactionid</th>
<th>user id</th>
<th>vehicle no</th>
<th>receipt no</th>
<th>time</th>
<th>date of transaction</th>
<th>amount</th>
</tr>
    </thead>";
include("../php/connection.php");
$ret=mysqli_query($conn,"SELECT * FROM `transaction` WHERE date_of_trans between '$fr_date' AND '$to_date");
while ($row=mysqli_fetch_row($ret)) {

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
?> 